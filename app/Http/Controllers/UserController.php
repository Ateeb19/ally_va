<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserHour;
use App\Models\UserMostPurchase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Task;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminUserRegisteredMail;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $user = User::create([
    //         'name' => $request->user_name,
    //         'email' => $request->user_email,
    //         'phone' => $request->user_phone,
    //         'password' => Hash::make($request->user_Password),
    //     ]);

    //     // Assign default role
    //     $user->assignRole('user');

    //     return redirect()->back();
    // }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|email|unique:users,email',
            'user_phone' => 'required',
            'user_Password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
            // fallback (normal form)
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->user_name,
            'email' => $request->user_email,
            'phone' => $request->user_phone,
            'password' => bcrypt($request->user_Password),
        ]);

        $user->assignRole('user');

        UserHour::create([
            'user_id' => $user->id,
            'hours' => 00,
            'minutes' => 00,
            'hour_price' => 9,
        ]);

        $defaultPurchases = [
            ['hours' => 30, 'hours_price' => 9, 'discount' => 0, 'status' => 'active'],
            ['hours' => 50, 'hours_price' => 9, 'discount' => 0, 'status' => 'active'],
            ['hours' => 80, 'hours_price' => 9, 'discount' => 0, 'status' => 'active'],
        ];

        foreach ($defaultPurchases as $purchase) {
            UserMostPurchase::create([
                'user_id' => $user->id,
                'hours' => $purchase['hours'],
                'hours_price' => $purchase['hours_price'],
                'discount' => $purchase['discount'],
                'status' => $purchase['status'],
            ]);
        }

        /**
         * 🚀🚀 NEW — SEND EMAILS 🚀🚀
         */

        // Send Welcome Mail to the newly created user
        Mail::to($user->email)->send(new WelcomeMail($user));

        // Notify Super Admin
        $superAdmin = User::role('super_admin')->first();

        if ($superAdmin) {
            Mail::to($superAdmin->email)->send(new AdminUserRegisteredMail($user));
        }

        /**
         * END EMAIL LOGIC
         */


        if ($request->ajax()) {
            return response()->json(['success' => true], 200);
        }

        // Normal redirect fallback
        return redirect()->back()->with('message', 'User added successfully!');
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = auth()->user();
        $userHours = UserHour::where('user_id', $user->id)->first();
        return view('my-profile', [
            'user' => $user,
            'userHours' => $userHours,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->full_name;
        // $user->email = $request->email;
        $user->phone = $request->phone;
        // if ($request->password) {
        //     $user->password = Hash::make($request->password);
        // }
        if ($request->filled('old_password') && $request->filled('new_password')) {
            if (Hash::check($request->old_password, $user->password)) {
                $user->password = Hash::make($request->new_password);
            } else {
                return redirect()->back()->with('error', 'Old password does not match!');
            }
        } elseif ($request->filled('old_password') && !$request->filled('new_password')) {
            return redirect()->back()->with('error', 'Please enter a new password!');
        } elseif (!$request->filled('old_password') && $request->filled('new_password')) {
            return redirect()->back()->with('error', 'Please enter your old password to change it!');
        }
        $user->whatsapp_no = $request->whatsapp_no;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->save();

        if ($request->has('hours') || $request->has('minutes')) {
            $userHours = new UserHour();
            $userHours->user_id = $user->id;
            $userHours->hours = $request->hours;
            $userHours->minutes = $request->minutes;
            $userHours->save();
        }

        if (auth()->user()->hasRole('super_admin') && auth()->id() != $user->id) {
            // Admin was editing another user's profile
            return redirect()->route('user.edit', $user->id)
                ->with('message', 'Profile updated successfully!');
        }
        return redirect()->route('user.edit', $id)->with('message', 'Profile Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('dashboard')->with('message', 'Profile Deleted successfully!');
    }

    public function showTaskHistory(Request $request, $user_id)
    {
        // Base query
        $query = Task::where('user_id', $user_id);

        // Filter by task type if provided
        if ($request->filled('task_type')) {
            $searchTerm = $request->input('task_type');
            $query->where('task_type', 'LIKE', '%' . $searchTerm . '%');
        }

        // Handle pagination (default: 10 per page)
        $perPage = $request->input('per_page', 10);

        // Paginate results & retain query params for links
        $tasks = $query->orderBy('id', 'desc')
            ->paginate($perPage)
            ->appends($request->query());

        // Pass data to view
        return view('tasks.userShowTask', compact('tasks', 'user_id'));
    }

}

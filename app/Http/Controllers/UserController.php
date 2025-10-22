<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserHour;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Task;
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
        $user->email = $request->email;
        $user->phone = $request->phone;
        if ($request->password) {
            $user->password = Hash::make($request->password);
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

        return redirect()->route('home')->with('message', 'Profile Deleted successfully!');
    }

    public function showTaskHistory(Request $request, $user_id)
    {
        // dd($userId);
        $query = Task::where('user_id', $user_id);

        // Check for the 'task_type' filter in the request
        if ($request->filled('task_type')) {
            $searchTerm = $request->input('task_type');

            // Filter tasks where the task_type column CONTAINS the search term
            // Use a wildcard search (LIKE) for flexible filtering
            $query->where('task_type', 'LIKE', '%' . $searchTerm . '%');
        }

        // Execute the query to retrieve the tasks
        $tasks = $query->get();

        return view('tasks.userShowTask', compact('tasks'));
    }
}

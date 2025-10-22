<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserHour;
use App\Models\UserMostPurchase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserManageProfileController extends Controller
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
    public function store(Request $request)
    {
        //
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
    public function edit(string $id, $userId)
    {
        $user = User::findOrFail($userId);
        $userHours = UserHour::where('user_id', $userId)->first();
        $UserMostPurchase = UserMostPurchase::where('user_id', $userId)
            ->get(['hours', 'hours_price', 'discount']); // fetch discount too

        // dd($UserMostPurchase);

        return view('userProfile', [
            'user' => $user,
            'userHours' => $userHours,
            'UserMostPurchase' => $UserMostPurchase,
            'adminView' => true,  // Admin editing someone else
            'userId' => $userId,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, $userId)
    {
        // dd($request->all());
        $this->validate($request, [
            'full_name' => 'required',
            'email'     => 'required',
            'phone'     => 'required',
        ]);

        $user               = User::find($userId);
        $user->name         = $request->full_name;
        $user->email        = $request->email;
        $user->phone        = $request->phone;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->whatsapp_no  = $request->whatsapp_no;
        $user->city         = $request->city;
        $user->country      = $request->country;
        $user->save();

        if ($request->has('hours') || $request->has('minutes')) {
            $userHours = UserHour::where('user_id', $user->id)->first();
            if (!$userHours) {
                $userHours          = new UserHour();
            }
            $userHours->user_id     = $user->id;
            $userHours->hours       = $request->hours;
            $userHours->minutes     = $request->minutes;
            $userHours->hour_price  = $request->hourPrice;
            $userHours->save();
        }

        if ($request->has('hours_1') && $request->has('hours_price_1')) {
            $mostPurchase = new UserMostPurchase();
            $mostPurchase->user_id     = $user->id;
            $mostPurchase->hours = $request->hours_1;
            $mostPurchase->hours_price = $request->hours_price_1;
            $mostPurchase->discount = $request->hours_discount_1;
            $mostPurchase->save();
        }

        if ($request->has('hours_2') && $request->has('hours_price_2')) {
            $mostPurchase = new UserMostPurchase();
            $mostPurchase->user_id     = $user->id;
            $mostPurchase->hours = $request->hours_2;
            $mostPurchase->hours_price = $request->hours_price_2;
            $mostPurchase->discount = $request->hours_discount_2;
            $mostPurchase->save();
        }

        if ($request->has('hours_3') && $request->has('hours_price_3')) {
            $mostPurchase = new UserMostPurchase();
            $mostPurchase->user_id     = $user->id;
            $mostPurchase->hours = $request->hours_3;
            $mostPurchase->hours_price = $request->hours_price_3;
            $mostPurchase->discount = $request->hours_discount_3;
            $mostPurchase->save();
        }

        return redirect()->route('users.userprofile.edit',['user' => $userId, 'userprofile' => $userId])->with('message', 'Profile Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

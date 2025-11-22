<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserHour;
use App\Models\UserMostPurchase;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminUserRegisteredMail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:20'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    protected function registered(Request $request, $user)
    {
        $request->session()->forget('form_type');
    }
    protected function sendFailedResponse($request, $validator)
    {
        return back()
            ->withErrors($validator)
            ->withInput($request->all() + ['form_type' => 'signup']);
    }


    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);

        // Assign default role
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
        // Send Welcome email to user
        Mail::to($user->email)->send(new WelcomeMail($user));

        //get Super Admin 
        $superAdmin = User::role('super_admin')->first();

        if ($superAdmin) {
            // Send admin notification email
            Mail::to($superAdmin->email)->send(new AdminUserRegisteredMail($user));
        }


        return $user;
    }
}

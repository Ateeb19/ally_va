<?php

// namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;

// class LoginController extends Controller
// {
//     /*
//     |--------------------------------------------------------------------------
//     | Login Controller
//     |--------------------------------------------------------------------------
//     |
//     | This controller handles authenticating users for the application and
//     | redirecting them to your home screen. The controller uses a trait
//     | to conveniently provide its functionality to your applications.
//     |
//     */

//     use AuthenticatesUsers;

//     /**
//      * Where to redirect users after login.
//      *
//      * @var string
//      */
//     protected $redirectTo = '/';

//     /**
//      * Create a new controller instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         $this->middleware('guest')->except('logout');
//         $this->middleware('auth')->only('logout');
//     }
// }



namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Services\RecaptchaService;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Default redirect path.
     */
    protected $redirectTo = '/dashboard';

    protected function validateLogin(Request $request)
    {
        // First do Laravel's normal validation
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);

        // Then verify reCAPTCHA
        $verified = RecaptchaService::verify(
            $request->input('g-recaptcha-response'),
            'login',
            $request->ip(),
            0.7
        );

        if (!$verified) {
            throw \Illuminate\Validation\ValidationException::withMessages([
                'captcha' => ['Suspicious login attempt. Please try again.'],
            ]);
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Override the redirect after login.
     */
    protected function authenticated(Request $request, $user)
    {
        // If the logged-in user is ADMIN
        if ($user->is_admin) {
            return redirect()->route('dashboard');   // admin dashboard
        }

        // Normal user
        return redirect()->route('dashboard');       // user dashboard
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        return back()
            ->withInput($request->only('email', 'remember', 'form_type'))
            ->withErrors([
                'email' => trans('auth.failed'),
            ]);
    }

    /**
     * Clear intended URL after logout.
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Important: remove the "intended" redirect
        $request->session()->forget('url.intended');

        return redirect('/');
    }


    public function autoLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json([
            'success' => true
        ]);
    }

}

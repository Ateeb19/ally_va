<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserHour;
use App\Models\UserMostPurchase;
use App\Models\Transaction;
use App\Mail\InqueryFormAdminMail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['InquirySave']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // Start the query chain
        $query = User::role('user')->orderBy('id', 'desc');

        // Check if the search term is present in the request
        if ($request->filled('email_search')) {
            $searchTerm = $request->input('email_search');
            
            // Filter the users where the email LIKE the search term (for partial matches)
            // Or use an exact match: ->where('email', $searchTerm)
            $query->where('email', 'LIKE', '%' . $searchTerm . '%');
        }

        // Paginate the results. The 'appends' method ensures the search term 
        // is kept in the pagination links.
        $users = $query->paginate(10)->appends($request->query());
        $userHour = UserHour::where('user_id', Auth()->user()->id)->first();
        $transactions = Transaction::where('user_id', Auth()->user()->id)->latest()->get();
        $UserMostPurchase = UserMostPurchase::where('user_id', Auth()->user()->id)->get();
        return view('home', compact('users','transactions','userHour','UserMostPurchase'));
    }

    public function viewUserDashboard(Request $request)
    {
        // Start the query chain
        $query = User::role('user')->orderBy('id', 'desc');

        // Check if the search term is present in the request
        if ($request->filled('email_search')) {
            $searchTerm = $request->input('email_search');
            
            // Filter the users where the email LIKE the search term (for partial matches)
            // Or use an exact match: ->where('email', $searchTerm)
            $query->where('email', 'LIKE', '%' . $searchTerm . '%');
        }

        // Paginate the results. The 'appends' method ensures the search term 
        // is kept in the pagination links.
        $users = $query->paginate(10)->appends($request->query());
        $userId = $request->user;
        $userHour = UserHour::where('user_id', $userId)->first();
        $UserMostPurchase = UserMostPurchase::where('user_id', $userId)->get();
        $transactions = Transaction::where('user_id', $userId)->latest()->get();
        return view('home', compact('userId','users','transactions','userHour','UserMostPurchase'))->with('adminView', true);
    }

    public function InquirySave(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'company_name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'project_desc' => 'required|string',
        ]);

        $superAdmin = User::role('super_admin')->first();

        if ($superAdmin) {
            // Send admin notification email
            Mail::to($superAdmin->email)->send(new InqueryFormAdminMail($data));
        }

        return view('contact');
    }
}

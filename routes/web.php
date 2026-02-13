<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskHistoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserManageProfileController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// routes/web.php

// Route::get('/', function () {
//     // Check if a user is logged in
//     if (Auth::check()) {
//         // If logged in, redirect them directly to the dashboard
//         // using the named route 'home'.
//         return redirect()->route('home');
//     }

//     // If not logged in, show the regular website homepage view
//     return view('welcome'); // or 'home', or whatever your homepage view is
// });
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('welcome');
});

// Route::get('/home-page', function () {
//     return view('welcome');
// })->name('public.home');
Route::get('/home', function () {
    return view('welcome');
})->name('public.home');

// ... the rest of your routes
Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/website-development', function () {
    return view('website');
});

Route::get('/administrative-support', function () {
    return view('Administrative_Support');
});

Route::get('/operations-oversight', function () {
    return view('Operations_Oversight');
});

Route::get('/ecommerce-services', function () {
    return view('eCommerce_Services');
});

Route::get('/crm-bookkeeping', function () {
    return view('CRM_Bookkeeping');
});

Route::get('/social-media-management', function () {
    return view('Social_Media_Management');
});

Route::get('/essential-seo', function () {
    return view('Essential_SEO');
});

Route::get('/graphic-design', function () {
    return view('Graphic_Design');
});

Route::get('/it-solutions', function () {
    return view('IT_Solutions');
});

Route::get('/privacy', function () {
    return view('Privacy_policy');
});

Route::get('/insights', function () {
    return view('insights');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
// Route::get('/dashboard', [HomeController::class, 'index'])->middleware('auth')->name('dashboard');

// Inquiry submission
Route::post('/inquerySave', [App\Http\Controllers\HomeController::class, 'InquirySave'])->name('inquerySave');

// Admin routes
Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function () {
    Route::get('/users/{user}/dashboard', [App\Http\Controllers\HomeController::class, 'viewUserDashboard'])
        ->name('admin.users.dashboard');
    Route::delete('/tasks/delete-multiple', [TaskHistoryController::class, 'deleteMultiple'])
        ->name('admin.users.task.destroyMultiple');
    Route::resource('users.tasks', TaskHistoryController::class);
    Route::resource('users.transaction', TransactionController::class);
    Route::delete('/transactions/delete-multiple', [TransactionController::class, 'deleteMultiple'])
        ->name('admin.users.transaction.destroyMultiple');
    Route::resource('users.userprofile', UserManageProfileController::class);
    Route::resource('blogs', BlogController::class);
    Route::post('/blogs/delete-multiple', [BlogController::class, 'deleteMultiple'])
        ->name('blogs.destroyMultiple');

    // Route::delete('/blogs/delete-multiple', [BlogController::class, 'deleteMultiple'])
    // ->name('blogs.destroyMultiple');
});

// Route::resource('user', UserController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('user/taskhistory/{user_id}', [UserController::class, 'showTaskHistory'])->name('user.showTaskHistory');

    Route::resource('user', UserController::class);
});


// Route::get('/blogs/show-detail/{blog_id}', [BlogController::class, 'FrontBlogDetailShow'])
//     ->name('blogs.blog-detail');
// Route::get('/blogs/{blog_id}/{slug?}', [BlogController::class, 'FrontBlogDetailShow'])
//     ->name('blogs.blog-detail');
// Route::get('/blogs/{blog}', [BlogController::class, 'FrontBlogDetailShow'])
//     ->name('blogs.blog-detail');


Route::get('paypal/payment', [PayPalController::class, 'payment'])->name('paypal.payment');
Route::get('paypal/success', [PayPalController::class, 'success'])->name('paypal.success');
Route::get('paypal/cancel', [PayPalController::class, 'cancel'])->name('paypal.cancel');

Route::get('/{blog}', [BlogController::class, 'FrontBlogDetailShow'])
    ->name('blogs.blog-detail');

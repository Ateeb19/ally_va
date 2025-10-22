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

Route::get('/', function () {
    // Check if a user is logged in
    if (Auth::check()) {
        // If logged in, redirect them directly to the dashboard
        // using the named route 'home'.
        return redirect()->route('home');
    }

    // If not logged in, show the regular website homepage view
    return view('welcome'); // or 'home', or whatever your homepage view is
});

// ... the rest of your routes
Route::get('/about-us', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/insights', function () {
    return view('insights');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/inquerySave', [App\Http\Controllers\HomeController::class, 'InquirySave'])->name('inquerySave');

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
});

Route::get('user/taskhistory/{user_id}', [UserController::class, 'showTaskHistory'])->name('user.showTaskHistory');
Route::resource('user', UserController::class);

Route::delete('/blogs/delete-multiple', [BlogController::class, 'deleteMultiple'])
     ->name('blogs.destroyMultiple');
Route::get('/blogs/show-detail/{blog_id}', [BlogController::class, 'FrontBlogDetailShow'])
     ->name('blogs.blog-detail');
Route::resource('blogs', BlogController::class);

Route::get('paypal/payment', [PayPalController::class, 'payment'])->name('paypal.payment');
Route::get('paypal/success', [PayPalController::class, 'success'])->name('paypal.success');
Route::get('paypal/cancel', [PayPalController::class, 'cancel'])->name('paypal.cancel');
<?php

use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/', function () {
    return view('users.dashboard');
})->name('home');


Route::get('/aboutus', function () {
    return view('users.aboutus');
})->name('aboutus');
Route::get('/admin/aboutus', function () {
    return view('admins.aboutus');
})->name('admin.aboutus');

// Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');


// Route::get('/admin/dashboard', '')->middleware('auth')->name ('admin_dashboard');
Route::get('/admin/dashboard', function () {
    return view('admins.admin_dashboard');
})->name('admin.dashboard')->middleware('auth');

Route::get('/admin/customer_details', [FormController::class, 'getData'])->name('admin.customer-details')->middleware('auth');

Route::get('/admin/billing', function () {
    return view('admins.billing');
})->name('admin.billing')->middleware('auth');

Route::get('/admin/services', function () {
    return view('admins.service_center');
})->name('admin.service_center')->middleware('auth');

/**
 *
 * Examples
            Route::get('/admin/services', function () {
                $data = DB::select(''); => inner join
                 return view('admins.customer', ['data' => $data]);
            })->name('admin.service_center')->middleware('auth');
 *
 */

Route::post('/submit-form-post', [FormController::class, 'form_table'])->name('submit-form-post');

Route::get('/user/submit_form', function () {
    return view('users.submit-form');
})->name('user.submit-form');

Route::get('/user/login', function () {
    return view('users.login');
})->name('user.login');

Route::get('/user/register', function () {
    return view('users.register');
})->name('user.register');

Route::get('/user/services/{id}', function ($id) {
    $service = new ServicesController($id);
    return view('users.services', ['id' => $id, 'service' => $service]);
})->name('user.services');

// Route::get('/user/login', function () {
//     return view('users.userloginpage');
// })->name('userloginpage');

Route::get('/admin/register', function () {
    return view('admins.register');
})->name('admin.register');

Route::get('/admin/login/', function () {
    return view('admins.login');
})->name('admin.login');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/user/logout', [LogoutController::class, "userLogout"])->name('user.logout');
    Route::get('/admin/logout', [LogoutController::class, "adminLogout"])->name('admin.logout');
});

Route::post('/admin/check', [LoginController::class, 'adminLoginCheck'])->name('admin.login.check');
Route::post('/user/check', [LoginController::class, 'userLoginCheck'])->name('user.login.check');
Route::post('/admin/set', [LoginController::class, 'setAdminLogin'])->name('admin.login.set');
Route::post('/user/set', [LoginController::class, 'setUserLogin'])->name('user.login.set');

//Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');

// Route::get('/', array('as' => 'admin', 'uses' => 'admincontroller@index'));
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\admincontroller;

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

Route::post('/submit-form-post', [FormController::class, 'form_table'])->name('submit-form-post');

Route::get('/user/login', function () {
    return view('users.login');
})->name('user.login');

Route::get('/user/register', function () {
    return view('users.register');
})->name('user.register');

// Route::get('/user/login', function () {
//     return view('users.userloginpage');
// })->name('userloginpage');

Route::get('/admin/register', function () {
    return view('admins.register');
})->name('admin.register');

Route::get('/admin/login/', function () {
    return view('admins.login');
})->name('admin.login');

Route::post('/admin/check', [LoginController::class, 'adminLoginCheck'])->name('admin.login.check');
Route::post('/user/check', [LoginController::class, 'userLoginCheck'])->name('user.login.check');
Route::post('/admin/set', [LoginController::class, 'setAdminLogin'])->name('admin.login.set');
Route::post('/user/set', [LoginController::class, 'setUserLogin'])->name('user.login.set');

//Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');

// Route::get('/', array('as' => 'admin', 'uses' => 'admincontroller@index'));

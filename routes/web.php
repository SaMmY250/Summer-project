<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
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
    return view('users.dashboard');
});

Route::get('/home',function(){
    return view('users.dashboard');
})->name('home');


Route::get('/admin/login',function(){
    return view('admins.login');
});

 Route::get('/aboutus',function(){
     return view('users.aboutus');
    })-> name('aboutus');

Route::get('/admin/dashboard', '')->middleware('auth');

Route::post('/submit-form-post', [FormController::class,'form_table'])->name('submit-form-post');

Route::get('/submit-form-view',function(){
    return view('users.submit-form');
 })->name('submit-form-view');

 Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');







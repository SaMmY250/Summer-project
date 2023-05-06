<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/home',function(){
    return view('dashboard');
})->name('home');


Route::get('/login',function(){
    return view('login');
});

 Route::get('/aboutus',function(){
     return view('aboutus');
    })-> name('aboutus');

Route::get('/dashboard', 'DashboardController@index')->middleware('auth');

Route::post('/submit-form', 'FormController@submitForm')->name('submit-form');

Route::get('/submit-form-view',function(){
    return view('layouts.submit-form');
 })->name('submit-form-view');

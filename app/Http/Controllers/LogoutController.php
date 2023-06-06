<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    public function userLogout()
    {
        if (Auth::user()->role_name == 'user') {
            Session::flush();
            Auth::logout();
            return redirect()->route('user.login');
        }

    }

    public function adminLogout()
    {
        if (Auth::user()->role_name == 'admin') {
            Session::flush();
            Auth::logout();
            return redirect()->route('admin.login');
        }

    }
}
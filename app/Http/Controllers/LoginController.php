<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginCheck(Request $request)
    {
        // dd($request->except('_token'));
        $credentials = $request->except('_token');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        } else {
            $script = "<script>
                alert('Login Failed');
            </script>";
            echo $script;
        }
    }

    public function setLogin(Request $request)
    {
        $user = new User();
        $user->name = " ";
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        $script = "<script>
                alert('Added user');
            </script>";
        echo $script;
    }
}

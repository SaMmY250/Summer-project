<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function check(Request $request)
    {
        // $user = new User();
        $credentials = $request->except('_token');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // return redirect()->route('landing-page');
            echo "Success";
        } else {
            $script = "<script>
                alert('Login Failed');
            </script>";
            echo $script;
        }
    }
}

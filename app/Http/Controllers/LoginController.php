<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginCheck(Request $request)
    {
        // dd($request->except('_token'));
        $credentials = [
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ];
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

        $date = Carbon::now()->format('Y-m-d');

        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->created_at = $date;
        $user->save();

        return redirect()->route('userloginpage')->with('success', 'Added user');
    }
}

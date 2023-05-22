<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginCheck(Request $request)
    {
        // dd($request->except('_token'));
        $credentials = [
            'name' => $request['name'],
            // 'email' => $request->input('email'),
            'password' => $request['password']
        ];
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin-dashboard');
        } else {
            $error = $this->getLoginErrorMessage($credentials);
            dd($error);
        }
    }

    private function getLoginErrorMessage($credentials)
    {
        $user = User::where('name', $credentials['name'])->first();

        if (!$user) {
            return 'Invalid username.';
        }

        if (!Hash::check($credentials['password'], $user->password)) {
            return 'Invalid password.';
        }

        return "Login Failed";
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

        return redirect()->route('admin-login')->with('success', 'Added user');
    }
}
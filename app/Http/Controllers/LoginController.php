<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;

class LoginController extends Controller
{
    public function adminLoginCheck(Request $request)
    {
        // dd($request->except('_token'));
        $credentials = [
            'name' => $request['name'],
            'password' => $request['password']
        ];


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');

        } else {
            $error = $this->getLoginErrorMessage($credentials);
            dd($error);
        }
    }

    public function userLoginCheck(Request $request)
    {
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password']
        ];


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home');
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

    public function setAdminLogin(Request $request)
    {
        if (Auth::check())
            Auth::logout();

        $date = Carbon::now()->format('Y-m-d');

        $admin = new User();
        $admin->email = $request->email;
        $admin->name = $request->name;
        $admin->password = bcrypt($request->password);
        $admin->created_at = $date;
        $admin->role_name = $request->role;
        $admin->save();
        return redirect()->route('admin.login')->with('success', 'Added user');
    }

    public function setUserLogin(Request $request)
    {
        if (Auth::check() && Auth::user()->role_name == 'admin')
            Auth::logout();

        $date = Carbon::now()->format('Y-m-d');

        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->created_at = $date;
        $user->role_name = $request->role;
        $user->save();

        // $email = $request->email;
        // $name = $request->name;
        // $password = bcrypt($request->password);
        // $created_at = $date;
        // $role_name = $request->role;

        // $data = DB::insert(
        //     'insert into users (name,email,password,role_name,created_at) values (?,?,?,?,?)',
        //     [$name, $email, $password, $role_name, $created_at]
        // );

        return redirect()->route('user.login')->with('success', 'Added user');
        // if ($data)
        // else
        //     return redirect()->route('user.login')->with('failed', 'Failed to add user');

    }
}
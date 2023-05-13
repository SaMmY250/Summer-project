
namespace App\Http\Controllers;
<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use DB; // Database

class LoginController extends Controller
{
    public function setLogin()
    {
        return view('Login');
    }

    public function loginCheck(Request $request)
    {
        // dd($request->except('_token'));
        $credentials = $request->except('_token');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin_dashboard');
        } else {
            $script = "<script>
                alert('Login Failed');
            </script>";
            echo $script;
        }
    }
}



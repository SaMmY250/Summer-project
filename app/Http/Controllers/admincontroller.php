<?php

namespace App\Http\Controllers;

class admincontroller extends Controller
{
    use Illuminate\Http\Request;

    public function index()

    {
        return view('layouts.main');

    }
    public function adminAuth(Request $request){
        dd($request);

    }

}

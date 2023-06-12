<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB; // Database

class FormController extends Controller
{
    public function form_table(Request $request)
    {
        // dd($request);
        if (Auth::check() && Auth::user()->role_name == 'user') {
            $vehicle_type = $request->input('vehicle-type');
            $vehicle_name = $request->input('vehicle-name');
            $vehicle_lot_no = $request->input('vehicle-lot-num');

            $data = array(
                'vehicle_type' => $vehicle_type,
                'vehicle_name' => $vehicle_name,
                'vehicle_lot_num' => $vehicle_lot_no,
                'customer_id' => Auth::user()->id,
                'created_at' => Carbon::now()
            );

            if (DB::table('vehicle_detail')->insert($data))
                session()->flash('success', 'Successfully inserted into database.');
            else
                session()->flash('error', 'Failed inserted into database.');

            return redirect()->back();
        }
    }

    public function getData()
    {
        $users = DB::select('SELECT * FROM users WHERE role_name = "user"');
        return view('admins.customer', ['users' => $users]);
    }
}

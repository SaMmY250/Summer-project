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
            $services = $request->input('service');
            $vehicle_type = $request->input('vehicle-type');
            $vehicle_name = $request->input('vehicle-name');
            $vehicle_lot_no = $request->input('vehicle-lot-num');
            $request_type = $request->input('request-type');

            foreach ($services as $ser) {
                $data = array(
                    'vehicle_type' => $vehicle_type,
                    'vehicle_name' => $vehicle_name,
                    'vehicle_lot_num' => $vehicle_lot_no,
                    'services' => $ser,
                    'request_type' => $request_type,
                    'customer_id' => Auth::user()->id
                );
                DB::table('form_table')->insert($data);
            }
            echo "<h1>Success</h1>";
            // Here to redirect
        }
    }

    public function getData()
    {
        $users = DB::select('SELECT * FROM users WHERE role_name = "user"');
        return view('admins.customer', ['users' => $users]);
    }
}

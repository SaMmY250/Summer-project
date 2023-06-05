<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DB; // Database

class FormController extends Controller
{
    public function form_table(Request $request)
    {
        // dd($request);
        $vehicle_type = $request->input('vehicle-type');
        $full_name = $request->input('full-name');
        $contact = $request->input('contact');
        $email = $request->input('email');
        $vehicle_name = $request->input('vehicle-name');
        $vehicle_lot_no = $request->input('vehicle-lot-num');
        $request_type = $request->input('request-type');
        $services = $request->input('service');


        /* if ($request->input('service1')) {
            array_push($services, $request->input('service1'));
        }
        if ($request->input('service2')) {
            array_push($services, $request->input('service2'));
        }
        if ($request->input('service3')) {
            array_push($services, $request->input('service3'));
        }
        if ($request->input('service4')) {
            array_push($services, $request->input('service4'));
        }*/
        if ($this->hasEmail($email)) {
            dd($request);
        } else {
            $detail = array(
                "owner_name" => $full_name,
                "owner_contact" => $contact,
                "email" => $email,
                "created_at" => Carbon::now(),
            );
            DB::table('customer_detail')->insert($detail);

            foreach ($services as $ser) {
                $data = array(
                    'vehicle_type' => $vehicle_type,
                    'vehicle_name' => $vehicle_name,
                    'vehicle_lot_num' => $vehicle_lot_no,
                    'services' => $ser,
                    'request_type' => $request_type,
                );
                DB::table('form_table')->insert($data);
            }
        }
        echo "<h1>Success</h1>";
    }

    private function hasEmail($email)
    {
        $exists = DB::table('customer_detail')->where('email', $email)->exists();

        if ($exists) {
            return true;
        } else {
            return false;
        }
    }
}
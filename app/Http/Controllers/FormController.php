<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use DB; // Database

class FormController extends Controller
{
    public function form_table(Request $request)
    {
        // dd($request);
        $services=[];
        $vehicle_type = $request->input('vehicle-type');
        $full_name = $request->input('full-name');
        $contact = $request->input('contact');
        $email = $request->input('email');
        $vehicle_name = $request->input('vehicle-name');
        $vehicle_lot_no = $request->input('vehicle-lot-num');
        $request_type = $request->input('request-type');
        // $services = $request->input('service');
        if($request->input('service1')){
            array_push($services,$request->input('service1'));
        }
        if ($request->input('service2')) {
            array_push($services, $request->input('service2'));
        }
        if ($request->input('service3')) {
            array_push($services, $request->input('service3'));
        }
        if ($request->input('service4')) {
            array_push($services, $request->input('service4'));
        }
        dd($services);
        // else{
        //     dd('service4 not checked');
        // }

        $data = array(
            'vehicle_type' => $vehicle_type,
            'owner_name' => $full_name,
            'owner_contact' => $contact,
            'owner_email' => $email,
            'vehicle_name' => $vehicle_name,
            'vehicle_lot_num' => $vehicle_lot_no,
            // 'services' => $services,
            'request_type' => $request_type,
        );



        DB::table('form_table')->insert($data);

        // echo $request->input('services');
        echo "<h1>Success</h1>";
    }
}

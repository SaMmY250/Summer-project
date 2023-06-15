<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    private int $id;
    function __construct(int $id)
    {
        $this->id = $id;
    }
    public function setServices(Request $request)
    {

    }
    public function getDetail()
    {
        $services = DB::select('select * from vehicle_detail where customer_id = ?', [$this->id]);
        return $services;
    }
}
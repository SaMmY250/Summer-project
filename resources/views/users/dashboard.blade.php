@extends('layouts/main')
@section('title', 'Dashboard')
@section('body')
    @include('layouts/navbar')
    <header class="content-image py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-black">
                <h1 class="display-4 fw-bolder">Bike management system</h1>
                <p class="lead fw-normal text-black-50 mb-0">any problem every solution.</p>
                <a href="{{ route('userloginpage') }}" class="btn btn-primary btn-lg rounded-0 mt-4">Login</a>
            </div>
        </div>
    </header>

    <div class="container py-5">
        <div class="row">
            <div class="col-sm-3"><b>Our categories:</b></div>
            <div class="col-sm-3"><b>Our Service:</b></div>
            <div class="col-sm-3"><b>Contact Us:</b></div>
            <div class="col-sm-3"><b>Working time:</b></div>
        </div>

        <div class="row mt-4">
            <div class="col-sm-3">Bike</div>
            <div class="col-sm-3">Engineen tune</div>
            <div class="col-sm-3">01-425688</div>
            <div class="col-sm-3">(10am-5pm)</div>
        </div>

        <div class="row mt-2">
            <div class="col-sm-3">Scooter</div>
            <div class="col-sm-3">Oil change</div>
        </div>

     <div class="row mt-2">

            <div class="col-sm-3"></div>
            <div class="col-sm-3">Tire Replacement</div>
            <div class="col-sm-3"></div>
            <div class="col-sm-3"></div>
    </div>

    <div class="row mt-2">

        <div class="col-sm-3"></div>
        <div class="col-sm-3">Overall checkup</div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
</div>

    </div>
@endsection

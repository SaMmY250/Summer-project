@extends('layouts/main')
@section('title', 'Dashboard')
@section('body')
    <script src="{{ asset('js/main.js') }}"></script>

    @include('layouts/navbar')

    <header class="content-image py-5">
        <div class="px-lg-5 container my-5 px-4">
            <div class="text-center text-black">
                <h1 class="display-4 fw-bolder">Bike management system</h1>
                <p class="lead fw-normal text-black-50 mb-0">any problem every solution.</p>
                <a href="{{ route('submit-form-view') }}" class="btn btn-primary btn-lg rounded-0 mt-4">Submit Form</a>
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

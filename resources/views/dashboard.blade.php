@extends('layouts/main')
@section('title', 'Dashboard')
@section('body')
    @include('layouts/navbar')
    <header class="content-image py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-black">
                <h1 class="display-4 fw-bolder">Bike management system</h1>
                <p class="lead fw-normal text-black-50 mb-0">any problem every solution.</p>
                <a href="{{ route('submit-form-view') }}" class="btn btn-primary px-4 py-3 mt-5">Fill Form</a>
            </div>
        </div>
    </header>

    <div class="container py-5">
        <div class="row">
            <div class="col-sm-3"><b>Our categories</b></div>
            <div class="col-sm-4"><b>Our Service</b></div>
            <div class="col-sm-5"><b>Contact Us</b></div>
        </div>

        <div class="row mt-4">
            <div class="col-sm-3">Bike</div>
            <div class="col-sm-4">Engineen tune</div>
        </div>

        <div class="row mt-2">
            <div class="col-sm-3">Scooter</div>
            <div class="col-sm-4">Oil change</div>
        </div>
        <div class="row mt-1">
            <div class="col-sm-5">01-425688</div>

        </div>
    </div>
@endsection

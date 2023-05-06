@extends('layouts/main')
@section('title', 'Dashboard')
@section('body')
    <script src="{{ asset('js/main.js') }}"></script>

    @include('layouts/navbar')

    <header class="content-image py-5">
        <div class="px-lg-5 container my-5 px-4">
            <div class="text-center text-black">
                <h1 class="display-4 fw-bolder">Bike management system</h1>
                <p class="lead fw-normal text-black-50 mb-0">With this shop hompeage template</p>

                <button class="btn btn-primary mt-5 px-4 py-3">Service Center</button>
            </div>
        </div>
    </header>



    <div class="container py-5">
        <div class="row">
            <div class="col-sm-3">Our categories</div>
            <div class="col-sm-4">Our Service</div>
        </div>

        <div class="row mt-4">
            <div class="col-sm-3">Bike</div>
            <div class="col-sm-4">Engineen tune</div>
        </div>

        <div class="row mt-2">
            <div class="col-sm-3">Scooter</div>
            <div class="col-sm-4">Oil change</div>
        </div>
    </div>
@endsection

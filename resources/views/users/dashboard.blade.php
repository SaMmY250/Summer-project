@extends('layouts/main')
@section('title', 'Dashboard')
@section('body')
    <script src="{{ asset('js/main.js') }}"></script>

    @include('layouts/navbar')

    <header class="content-image py-md-5">
        <div class="px-md-4 container my-4">
            <div class="text-center text-black">
                <h1 class="display-4 fw-bolder">Bike management system</h1>
                <p class="lead fw-normal text-black-50 mb-0">Providing quality service our no.1 priority.</p>
                @if (Auth::check() && Auth::user()->role_name == 'user')
                    <a href="{{ route('user.submit-form') }}" class="btn btn-primary btn-lg rounded-4 mt-4">Submit form</a>
                @else
                    <a href="{{ route('user.login') }}" class="btn btn-primary btn-lg rounded-4 mt-4">Online Form FillUp</a>
                @endif
            </div>
        </div>
    </header>


    <div class="container py-4">
        <div class="row">
            <div class="col-sm-2"><b>Our categories:</b></div>
            <div class="col-sm-2"><b>Our Service:</b></div>
            <div class="col-sm-2"><b>Contact Us:</b></div>
            <div class="col-sm-2"><b>Working time:</b></div>
            <div class="col-sm-2"><b>Email:</b></div>
        </div>

        <div class="row mt-2">
            <div class="col-sm-2">Bike</div>
            <div class="col-sm-2">Engineen tune</div>
            <div class="col-sm-2">01-425688</div>
            <div class="col-sm-2">(10am-5pm)</div>
            <div class="col-sm-2">Mhepiautoworkshop@gmail.com</div>
        </div>

        <div class="row mt-2">
            <div class="col-sm-2">Scooter</div>
            <div class="col-sm-2">Oil change</div>
            <div class="col-sm-2">9813498649</div>
        </div>

        <div class="row mt-2">

            <div class="col-sm-2"></div>
            <div class="col-sm-2">Tire Replacement</div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
        </div>

        <div class="row mt-2">
            <div class="col-sm-2"></div>
            <div class="col-sm-2">Overall checkup</div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
        </div>

    </div>
@endsection

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
                    <a href="{{ route('user.submit-form') }}" class="btn btn-info btn-lg rounded-4 mt-4 text-white">Add
                        Vehicle</a>
                @else
                    <a href="{{ route('user.login') }}" class="btn btn-primary btn-lg rounded-4 mt-4">Online Form
                        Fillup</a>
                @endif
            </div>
        </div>
    </header>


    <div class="container py-4">
        <div class="row">
            <div class="col-sm-2">
                <b>Our categories:</b>
                <ul class="list-group-item mt-2">
                    <li class="list-group-flush py-1">Bikes</li>
                    <li class="list-group-flush py-1">Scooty</li>
                </ul>
            </div>

            <div class="col-sm-2">
                <b>Our Services</b>
                <ul class="list-group-item mt-2">
                    <li class="list-group-flush py-1">Engine Tune</li>
                    <li class="list-group-flush py-1">Oil Change</li>
                    <li class="list-group-flush py-1">Tire replace</li>
                    <li class="list-group-flush py-1">Overall chechup</li>
                </ul>
            </div>

            <div class="col-sm-2">
                <b>Contant Us</b>
                <ul class="list-group-item mt-2">
                    <li class="list-group-flush py-1">01-425688</li>
                    <li class="list-group-flush py-1">9813498649</li>
                </ul>
            </div>

            <div class="col-sm-2">
                <b>Working time</b>
                <ul class="list-group-item mt-2">
                    <li class="list-group-flush py-1">10 am - 5 pm</li>
                    <li class="list-group-flush py-1">9813498649</li>
                </ul>
            </div>


            <div class="col-sm-2">
                <b>Email</b>
                <ul class="list-group-item mt-2">
                    <li class="list-group-flush py-1">Mhepiautoworkshop@gmail.com</li>
                </ul>
            </div>

        </div>
    </div>
@endsection

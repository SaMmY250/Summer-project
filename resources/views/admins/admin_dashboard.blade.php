@extends('layouts/main')
@section('title', 'Dashboard')
@section('body')
    @include('layouts/navbar')
    <header class="content-image py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-black">
                <h1 class="display-4 fw-bolder">Bike management system</h1>
                <p class="lead fw-normal text-black-50 mb-0">any problem every solution.</p>
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg rounded-0 mt-4">Login</a>
            </div>
        </div>
    </header>

@endsection

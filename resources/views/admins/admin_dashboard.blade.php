@extends('layouts/main')
@section('title', 'Dashboard')
@section('assets')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@stop
@section('body')
    @include('layouts/admin-navbar')
    <script src="{{ asset('js/main.js') }}"></script>
    @include('layouts/admin-sidebar')
    <div class="w3-container container">
        <div class="row py-lg-0 px-md-2">
            @if (Auth::check() && Auth::user()->role_name == 'admin')
                <h1><u>Welcome, {{ Auth::user()->name }}</u></h1>
            @endif
            <h2 class="mt-4">Summary</h2>
            <div class="w3-container card">
                <div class=""></div>
            </div>
        </div>
    </div>
@endsection

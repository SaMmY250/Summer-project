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
            <div class="w3-container mt-2">
                <div class="content-wrapper pt-2">
                    <!-- Main content -->
                    <section class="content text-white">
                        <div class="w3-container">
                            <div class="row info-box">
                                <div class="info-box-content col-md-3 bg-dark container">
                                    <span class="info-box-text">Toatal Category</span>
                                    <span class="info-box-number">2</span>
                                </div>
                                <div class="info-box-content col-md-3 bg-dark container">
                                    <span class="info-box-text">Mechanics</span>
                                    <span class="info-box-number">8</span>
                                </div>
                                <div class="info-box-content col-md-3 bg-dark container">
                                    <span class="info-box-text">Services</span>
                                    <span class="info-box-number">4</span>
                                </div>
                            </div>
                            <!-- /.info-box -->
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection

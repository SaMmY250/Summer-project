@extends('layouts/main')
@section('title', 'Dashboard')
@section('assets')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@stop
@section('body')
    @include('layouts/admin-navbar')
    <script src="{{ asset('js/main.js') }}"></script>
    @include('layouts/admin-sidebar')
    <h1>Service</h1>
@endsection

@extends('layouts/main')

@section('title', 'Fill up')

@section('assets')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@stop

@section('body')
    @include('layouts/navbar')
    <script src="{{ asset('js/form.js') }}"></script>


@endsection

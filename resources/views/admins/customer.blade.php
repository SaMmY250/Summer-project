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
            <h1>Customer details</h1>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Vehicle Name</th>
                        <th scope="col">Vehicle Type</th>
                        <th scope="col">Vehicle Lot Number</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td scope="col">{{ $user->id }} </td>
                            <td scope="col">{{ $user->name }} </td>
                            <td scope="col">{{ $user->email }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

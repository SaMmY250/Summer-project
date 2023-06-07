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
        <div class="row py-lg-2" style="width: auto">
            <h1>Customer details</h1>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Vehicle Name</th>
                        <th scope="col">Vehicle Type</th>
                        <th scope="col">Vehicle Lot Number</th>
                        <th scope="col" colspan="2" style="text-align:center">Views</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td scope="col">{{ $user->id }} </td>
                            <td scope="col">{{ $user->name }} </td>
                            <td scope="col">{{ $user->email }} </td>
                            <td scope="col">{{ $user->email }} </td>
                            <td scope="col">{{ $user->email }} </td>
                            <td scope="col">{{ $user->email }} </td>
                            <td scope="col">
                                <a href="{{ route('admin.service_center') }}">
                                    <button class="btn btn-info text-white">Services</button>
                                </a>
                            </td>
                            <td scope="col">
                                <a href="{{ route('admin.billing') }}">
                                    <button class="btn btn-info text-white">Bills</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

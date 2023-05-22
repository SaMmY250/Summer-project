@extends('layouts/main')
@section('title', 'Dashboard')
@section('body')
    @include('layouts/admin-navbar')
    <div class="app-body">
        <header>
            <div class="sidebar">
                <nav class="sidebar-nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="components/buttons.html"><i class="icon-puzzle"></i> Customer's
                                Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/buttons.html"><i class="icon-puzzle"></i> Service Center
                                Detail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/social-buttons.html"><i class="icon-puzzle"></i>
                                Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/social-buttons.html"><i class="icon-puzzle"></i>
                                Billing</a>
                        </li>
                    </ul>
        </header>
    </div>

    <div class="row">
        <div class="col-md-4 py-4 card mt-4 ml-6">
            <h1>Header</h1>
        </div>
    </div>


@endsection

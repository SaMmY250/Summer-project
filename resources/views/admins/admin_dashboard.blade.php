@extends('layouts/main')
@section('title', 'Dashboard')
@section('body')
    @include('layouts/admin-navbar')
    <div class="app-body">
        @include('layouts/admin-sidebar')
        <div class="main-wrap">
            <div class="main">
                <div class="row mt-4">
                    <div class="col-sm-4 py-4 card">
                        <h1>Header</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

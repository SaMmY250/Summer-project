@extends('layouts/main')

@section('title', 'Fill up')

@section('assets')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@stop

@section('body')
    @include('layouts/navbar')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div id="login-form-wrap">
        <h2 style="font-weight: 300;text-align: center;">Login</h2>
        <form id="login-form" method="POST" action="{{ route('user.login.check') }}">
            @csrf
            <div class="row my-4">
                <label>Enter e-mail address</label>
                <input type="email" id="email" name="email" required><i
                    class="validation"><span></span><span></span></i>
            </div>
            <div class="row my-4">
                <label>Enter password</label>
                <input type="password" id="username" name="password" required><i
                    class="validation"><span></span><span></span></i>
            </div>
            <div class="row my-4">
                <input type="hidden" value="user" name="role">
                <input type="submit" id="login" value="Login">
            </div>
        </form>
        <div id="create-account-wrap">
            <p>Not a member? <a href="{{ route('user.register') }}">Create Account</a>
            <p>
        </div>
        <!--create-account-wrap-->
    </div>
    <!--login-form-wrap-->
    <!-- partial -->
@endsection

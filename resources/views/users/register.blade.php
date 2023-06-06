@extends('layouts/main')

@section('title', 'Fill up')

@section('assets')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@stop

@section('body')
    @include('layouts/navbar')
    <div id="login-form-wrap">
        <h2 style="font-weight: 300;text-align: center;">Sign Up</h2>
        <form id="login-form" method="POST" action="{{ route('user.login.set') }}">
            <div class="row my-4">
                <label>Enter username</label>
                <input type="text" id="username" name="username" required><i
                    class="validation"><span></span><span></span></i>
            </div>
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
                <input type="submit" id="login" value="Sign up">
            </div>
        </form>
        <div id="create-account-wrap">
            <p><a href="{{ route('user.login') }}">Go to login page</a>
            <p>
        </div>
        <!--create-account-wrap-->
    </div>
    <!--login-form-wrap-->
    <!-- partial -->
@endsection

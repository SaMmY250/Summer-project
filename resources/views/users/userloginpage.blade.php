@extends('layouts.main')

@section('title', 'login')
@section('body')
    <script src="{{ asset('js/main.js') }}"></script>

    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif

    <div class="wrapper linear-background">
        <div class="registration_form">
            <!-- Title -->
            <div class="title">
                User Login
            </div>

            <!-- Form -->
            <form action="{{ route('login.check') }}" method="post">
                @csrf
                <div class="form_wrap">
                    <!-- Email Id input Place -->
                    <div class="input_wrap">
                        <label>Enter a E-mail</label>
                        <input type="email" name="email" required>
                    </div>

                    {{-- Password --}}

                    <div class="input_wrap">
                        <label>Enter a Password</label>
                        <input type="password" name="password" id="myInput" required />
                    </div>

                    <div>
                        <label>Show Password:</label>
                        <input type="checkbox" onclick="showPassword()">
                    </div>
                    <br>
                    <!-- Submit button -->
                    <div class="input_wrap">
                        <input type="submit" value="Login Now" class="submit_btn">
                    </div>

                    <span class="center-alignment" style="margin: 8px auto; border-top:1px solid #ccc;"></span>

                    <div class="input_wrap">
                        <span class="center-alignment" style="margin:18px 60px auto 60px">
                            <a href="{{ route('register') }}">
                                create new account
                            </a>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

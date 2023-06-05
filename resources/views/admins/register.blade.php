@extends('layouts.main')

@section('title', 'Admin Register')
@section('body')
    <script src="{{ asset('js/main.js') }}"></script>
    <div class="wrapper linear-background">

        <div class="registration_form">
            <!-- Title -->
            <div class="title">
                Admin Register
            </div>

            <!-- Form -->
            <form action="{{ route('admin.login.set') }}" method="post">
                @csrf
                <div class="form_wrap">
                    <!-- Name Id input Place -->
                    <div class="input_wrap">
                        <label>Enter a Name</label>
                        <input type="text" name="name" required>
                    </div>

                    <!-- Email Id input Place -->
                    <div class="input_wrap">
                        <label>Enter a E-mail</label>
                        <input type="text" name="email" required>
                    </div>

                    <div class="input_wrap">
                        <label>Enter a Password</label>
                        <input type="password" name="password" id="myInput" required />
                    </div>

                    <div>
                        <label>Show Password:</label>
                        <input type="checkbox" onclick="showPassword()">
                    </div>
                    <br>
                    <input type="hidden" name="role" value="admin">
                    <!-- Submit button -->
                    <div class="input_wrap">
                        <input type="submit" value="register" class="submit_btn">
                    </div>

                    <span class="center-alignment" style="margin: 8px auto; border-top:1px solid #ccc;"></span>

                    <div class="input_wrap">
                        <span class="center-alignment" style="margin:18px 60px auto 60px">
                            <a href="{{ route('admin.login') }}">
                                Go to Login
                            </a>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

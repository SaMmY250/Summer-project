@extends('layouts.main')

@section('title', 'login')
@section('body')
    <script src="{{ asset('js/main.js') }}"></script>
    <div class="wrapper linear-background">

        <div class="registration_form">
            <!-- Title -->
            <div class="title">
                Admin Login Form
            </div>

            <!-- Form -->
            <form action="{{ route('admin.login.check') }}" method="post">
                @csrf
                <div class="form_wrap">
                    <!-- Email Id input Place -->
                    <div class="input_wrap">
                        <label>Admin name</label>
                        <input type="text" name="name" required>
                    </div>

                    <div class="input_wrap">
                        <label>Password</label>
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

                        </span>
                    </div>
                </div>
            </form>
        </div>
        {{-- <a href="{{ route('admin_dashboard') }}">
        </a> --}}
    </div>
@endsection

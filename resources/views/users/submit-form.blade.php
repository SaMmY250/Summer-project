@extends('layouts/main')
@section('title', 'Fill up')
@section('body')
    @include('layouts/navbar')
    <div class="row">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>
    <div class="form_wrap container">
        <center>
            <h1 style="font-weight: bold" class="mb-5">Add Vechicle</h1>
        </center>

        <form method="POST" action="{{ route('submit-form-post') }}">
            @csrf
            <div class="row">
                <div class="col-md-6 px-4 py-2">
                    @if (Auth::check() && Auth::user()->role_name == 'user')
                        <h3 class="mb-4">
                            <u>Your Details</u>
                        </h3>
                        <div class="form_wrap">
                            <p><label for="customer_id" class="my-2">Customer_id:</label> <b>{{ Auth::user()->id }}</b>
                            </p>
                            <p> <label for="full-name" class="my-2">Client Full Name:</label> <b>
                                    {{ Auth::user()->name }}</b>
                            </p>
                            <p> <label for="email" class="my-2">Email:</label> <b>{{ Auth::user()->email }}</b></p>
                        </div>
                    @endif
                </div>

                <div class="col-md-6 px-4 py-2">
                    <label for="vehicle-type" class="my-2">Vehicle Type:</label>
                    <div class="input_wrap">
                        <input class="nothing" type="radio" name="vehicle-type" value="Bike" required>Bike <br>
                        <input class="nothing" type="radio" name="vehicle-type" value="Scooty">Scooty
                    </div>

                    <label for="vehicle-name"class="my-2">Vehicle Name:</label>
                    <input type="text" name="vehicle-name" id="vehicle-name" required>

                    <label for="vehicle-lot-no" class="my-2">Vehicle Lot Number:</label>
                    <input type="tel" name="vehicle-lot-num" id="vehicle-lot-num" required>


                    <div class="row mt-4 flex-md-row-reverse">
                        <a href="{{ route('home') }}" class="col-md-2">
                            <button class="btn btn-danger px-4" type='button'>
                                Back
                            </button>
                        </a>
                        <button type="submit" class="btn btn-primary col-md-2">Add</button>
                    </div>

                </div>
            </div>
        </form>
    </div>

@endsection

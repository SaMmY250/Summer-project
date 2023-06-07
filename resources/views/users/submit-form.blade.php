@extends('layouts/main')
@section('title', 'Fill up')
@section('body')
    @include('layouts/navbar')
    <div class="form_wrap container">
        <form method="POST" action="{{ route('submit-form-post') }}">
            @csrf
            <div class="row">
                <div class="col-md-6 px-4 py-2">
                    @if (Auth::check() && Auth::user()->role_name == 'user')
                        <p><label for="customer_id" class="my-2">Customer_id:</label> <b>{{ Auth::user()->id }}</b></p>
                        <p> <label for="full-name" class="my-2">Client Full Name:</label> <b> {{ Auth::user()->name }}</b>
                        </p>
                        <p> <label for="email" class="my-2">Email:</label> <b>{{ Auth::user()->email }}</b></p>
                    @endif


                    {{-- <label for="contact" class="my-2">Contact Number:</label>
                    <input type="tel" name="contact" id="contact" required> --}}

                    <label for="vehicle-type" class="my-2">Vehicle Type:</label>
                    <div class="input_wrap">
                        <input class="nothing" type="radio" name="vehicle-type" value="Bike" required>Bike <br>
                        <input class="nothing" type="radio" name="vehicle-type" value="Scooty">Scooty
                    </div>

                    <label for="request-type" class="my-2">Request Type:</label>
                    <div class="input-warp">
                        <input type="radio" class="nothing" name="request-type" value="home pickup">Home pickup <br>
                        <input type="radio" class="nothing" name="request-type" value="meet">Meet <br>
                    </div>

                </div>

                <div class="col-md-6 px-4 py-2">
                    <label for="vehicle-name"class="my-2">Vehicle Name:</label>
                    <input type="text" name="vehicle-name" id="vehicle-name" required>

                    <label for="vehicle-lot-no" class="my-2">Vehicle Lot Number:</label>
                    <input type="tel" name="vehicle-lot-num" id="vehicle-lot-num" required>

                    <label for="services" class="my-2">Services:</label><br>
                    <div class="input-warp">
                        <input type="checkbox"class="nothing" name="service[]" value="Engine Service">Engine Service<br>
                        <input type="checkbox"class="nothing" name="service[]" value="bike wash">Bike Wash<br>
                        <input type="checkbox"class="nothing" name="service[]" value="tire replacement">Tire Replacement<br>
                        <input type="checkbox"class="nothing" name="service[]" value="oil change">Oil Change<br>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                    {{-- <button id="popupButton" class="btn btn-info mt-1" type='button'>Search</button> --}}

                </div>
            </div>
        </form>
    </div>

@endsection

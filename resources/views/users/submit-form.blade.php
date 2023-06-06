@extends('layouts/main')
@section('title', 'Fill up')
@section('body')
    @include('layouts/navbar')
    <div class="form_wrap container">
        <form method="POST" action="{{ route('submit-form-post') }}">
            @csrf
            <div class="row">
                <div class="col-md-6 px-4 py-2">
                    <label for="vehicle-type" class="my-2">Vehicle Type:</label>
                    <div class="input_wrap">
                        <input class="nothing" type="radio" name="vehicle-type" value="Bike" required>Bike <br>
                        <input class="nothing" type="radio" name="vehicle-type" value="Scooty">Scooty
                    </div>

                    <label for="full-name" class="my-2">Client Full Name:</label>
                    <input type="text" name="full-name" id="full-name" required>

                    <label for="contact" class="my-2">Contact Number:</label>
                    <input type="tel" name="contact" id="contact" required>

                    <label for="email" class="my-2">Email:</label>
                    <input type="email" name="email" id="email" required>

                    <label for="customer_id" class="my-2">Customer_id:</label>
                    <input type="number" name="customer_id" id="customer_id" required>
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

                    <label for="request-type" class="my-2">Request Type:</label>
                    <div class="input-warp">
                        <input type="radio" class="nothing" name="request-type" value="emergency">Emergency <br>
                        <input type="radio" class="nothing" name="request-type" value="scheduled">Scheduled <br>
                        <input type="radio" class="nothing" name="request-type" value="maintenance">Maintenance <br>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary mt-1">Submit</button>
                    {{-- <button id="popupButton" class="btn btn-info mt-1" type='button'>Search</button> --}}

                </div>
            </div>
        </form>
    </div>

@endsection

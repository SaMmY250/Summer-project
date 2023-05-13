@extends('layouts/main')
@section('title', 'Fill up')
@section('body')
    @include('layouts/navbar')
    <div class="container form_wrap">
        <form method="POST" action="{{ route('submit-form-post') }}">
            @csrf
            <label for="vehicle-type">Vehicle Type:</label>
            <select name="request-type" id="request-type" required>
                <option value="Bike">Bike</option>
                <option value="Scooty">Scooty</option>
                 </select><br>

            <label for="full-name">Client Full Name:</label>
            <input type="text" name="full-name" id="full-name" required>

            <label for="contact">Contact Number:</label>
            <input type="tel" name="contact" id="contact" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="vehicle-name">Vehicle Name:</label>
            <input type="text" name="vehicle-name" id="vehicle-name" required>

            <label for="vehicle-lot-no">Vehicle Lot Number:</label>
            <input type="tel" name="vehicle-lot-num" id="vehicle-lot-num" required>

            <label for="services">Services:<br></label>
                <input type="checkbox" name="service[]" value="oil_change">Oil Change<br>
                <input type="checkbox" name="service[]" value="engine_service">Engine Service<br>
                <input type="checkbox" name="service[]" value="bike_wash">Bike Wash<br>
                <input type="checkbox" name="service[]" value="tire_replacement">Tire Replacement<br>

            <label for="request-type">Request Type:</label>
            <select name="request-type" id="request-type" required>
                <option value="emergency">Emergency</option>
                <option value="scheduled">Scheduled</option>
                <option value="maintenance">Maintenance</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </div>

@endsection

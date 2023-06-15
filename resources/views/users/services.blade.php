@extends('layouts/main')
@section('title', 'Service')
@section('body')
    @include('layouts/navbar')
    <div class="container card ">
        <div class="row">
            <h1>Services</h1>
            <div class="col-md-4 mt-2">
                <h3>Select Your Vehicle</h3>

                <div class="p-sm-2">
                    <div>
                        <label for="vehicle-name"class="my-2"><b>Vehicle Name:</b></label>
                        <select name="vehicle_name" id="vehicle_name" class="form-select">
                            <option selected>Open this select menu</option>
                            @foreach ($service->getDetail() as $services)
                                <option value="{{ $services->vehicle_name }}">{{ $services->vehicle_name }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-3">
                        <label for="vehicle-lot-no" class="my-2"><b>Vehicle Lot Number:</b></label>

                    </div>
                </div>



            </div>

            <div class="col-md-6">
            </div>
        </div>
    </div>
@endsection

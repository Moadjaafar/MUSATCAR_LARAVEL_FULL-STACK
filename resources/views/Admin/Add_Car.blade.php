@extends('Admin.layouts.template')
@section('pagetitle')
    Admin Dashboard
@endsection
@section('content')
    <div class="container">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">ADD CARS</h5>
                    <small class="text-muted float-end">Car Info</small>
                </div>
                <div class="card-body">
                    
                    <form action="{{route('create_car')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Car Marke</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="marke_id" name="marke_id">
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{$item->Marke_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Car Model</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="model" id="model" placeholder="M4" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Seats</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="Seats_nbr" name="Seats_nbr">
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Drive</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="Drive_type" name="Drive_type">
                                    <option value="4X2">4X2</option>
                                    <option value="4X4">4X4</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Transmission</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="Transmission_type" name="Transmission_type">
                                    <option value="Automatic">Automatic</option>
                                    <option value="Manual">Manual</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Car Year</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="year" id="Price" placeholder="2020" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Car Color</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="color" id="Price" placeholder="red" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Car price per day</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="price_per_day" id="Price" placeholder="200" />
                            </div>
                        </div> 

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Car Availability</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="availability" name="availability">
                                    <option value="Available" selected>Available Now</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="car_images">Car Title Images</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="car_images_First" id="car_images_First" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="car_images">Car Images</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="car_images[]" id="car_images" multiple />
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">ADD CAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
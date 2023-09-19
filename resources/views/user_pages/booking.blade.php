@extends('user_pages.layouts.Home_page')
@section('content')
<div class="no-bottom no-top zebra" id="content">
    <div id="top"></div>
    
    <!-- section begin -->
    <section id="subheader" class="jarallax text-light">
        <img src="{{asset('Home/assets/images/background/2.jpg')}}" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Vehicle Fleet</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
    </section>
    <!-- section close -->

    <section id="section-car-details">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div id="slider-carousel" class="owl-carousel">
                        <div class="item">
                            <img src="{{ asset('storage/'.$Cars_info->car_images_First) }}" alt="">
                        </div>
                        @foreach ($images as $item)
                            <div class="item">
                                <img src="{{ asset('storage/'.$item) }}" alt="">
                            </div>
                        @endforeach  
                    </div>
                </div>

                <div class="col-lg-3">
                    <h3>{{ $Cars_info->marke_name . ' ' . $Cars_info->model }}</h3>
                    <div class="spacer-10"></div>

                    <h4>Specifications</h4>
                    <div class="de-spec">
                        <div class="d-row">
                            <span class="d-title">Availability</span>
                            <span class="d-value">Available Now</span>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Seat</span>
                            <span class="d-value">{{ $Cars_info->Seats_nbr }}</span>
                        </div>
                        <div class="d-row">
                            <span class="d-title">color</span>
                            <span class="d-value">{{ $Cars_info->color }}</span>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Year</span>
                            <span class="d-value">{{ $Cars_info->year }}</span>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Drive</span>
                            <span class="d-value">{{ $Cars_info->Drive_type }}</span>
                        </div>
                        <div class="d-row">
                            <span class="d-title">Transmission</span>
                            <span class="d-value">{{ $Cars_info->Transmission_type }}</span>
                        </div>
                    </div>

                    <div class="spacer-single"></div>

                    <h4>Features</h4>
                    <ul class="ul-style-2">
                        <li>Bluetooth</li>
                        <li>Multimedia Player</li>
                        <li>Central Lock</li>
                        <li>Sunroof</li>
                    </ul>
                </div>

                <div class="col-lg-3">
                    <div class="de-price text-center">
                        Daily rate
                        <h3>{{ $Cars_info->price_per_day }} DH</h3>
                    </div>
                    <div class="spacer-30"></div>
                    <div class="de-box mb25">
                        <form action="{{route('Book_Car_date')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h4>Booking this car</h4>
                            <input type="hidden" name="car_id" value="{{ $Cars_info->id }}" placeholder="Enter your full name" id="autocomplete" autocomplete="off" class="form-control" >

                            <div class="spacer-20"></div>

                            <div class="row">
                                <div class="col-lg-12 mb20">
                                    <h5>Full Name</h5>
                                    <input type="text" name="user_name" placeholder="Enter your full name" id="autocomplete" autocomplete="off" class="form-control" required>

                                    <div class="jls-address-preview jls-address-preview--hidden">
                                        <div class="jls-address-preview__header">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 mb20">
                                    <h5>Phone Number</h5>
                                    <input type="text" name="User_phone" placeholder="064644739" id="autocomplete2" autocomplete="off" class="form-control" required>

                                    <div class="jls-address-preview jls-address-preview--hidden">
                                        <div class="jls-address-preview__header">
                                        </div>
                                    </div>
                                </div>
                                @php
                                $currentDateTime = date("Y-m-d H:i:s");

                                @endphp
                                <div class="col-lg-12 mb20">
                                    <h5>Pick Up Date & Time</h5>
                                    <div class="date-time-field">
                                        <input type="text" id="date-picker" name="pickup_date" value="{{$currentDateTime}}" required>
                                        <select name="pickup_Time" id="pickup-time">
                                            <option selected disabled value="Select time">Time</option>
                                            <option value="00:00">00:00</option>
                                            <option value="00:30">00:30</option>
                                            <option value="01:00">01:00</option>
                                            <option value="01:30">01:30</option>
                                            <option value="02:00">02:00</option>
                                            <option value="02:30">02:30</option>
                                            <option value="03:00">03:00</option>
                                            <option value="03:30">03:30</option>
                                            <option value="04:00">04:00</option>
                                            <option value="04:30">04:30</option>
                                            <option value="05:00">05:00</option>
                                            <option value="05:30">05:30</option>
                                            <option value="06:00">06:00</option>
                                            <option value="06:30">06:30</option>
                                            <option value="07:00">07:00</option>
                                            <option value="07:30">07:30</option>
                                            <option value="08:00">08:00</option>
                                            <option value="08:30">08:30</option>
                                            <option value="09:00">09:00</option>
                                            <option value="09:30">09:30</option>
                                            <option value="10:00">10:00</option>
                                            <option value="10:30">10:30</option>
                                            <option value="11:00">11:00</option>
                                            <option value="11:30">11:30</option>
                                            <option value="12:00">12:00</option>
                                            <option value="12:30">12:30</option>
                                            <option value="13:00">13:00</option>
                                            <option value="13:30">13:30</option>
                                            <option value="14:00">14:00</option>
                                            <option value="14:30">14:30</option>
                                            <option value="15:00">15:00</option>
                                            <option value="15:30">15:30</option>
                                            <option value="16:00">16:00</option>
                                            <option value="16:30">16:30</option>
                                            <option value="17:00">17:00</option>
                                            <option value="17:30">17:30</option>
                                            <option value="18:00">18:00</option>
                                            <option value="18:30">18:30</option>
                                            <option value="19:00">19:00</option>
                                            <option value="19:30">19:30</option>
                                            <option value="20:00">20:00</option>
                                            <option value="20:30">20:30</option>
                                            <option value="21:00">21:00</option>
                                            <option value="21:30">21:30</option>
                                            <option value="22:00">22:00</option>
                                            <option value="22:30">22:30</option>
                                            <option value="23:00">23:00</option>
                                            <option value="23:30">23:30</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 mb20">
                                    <h5>Return Date & Time</h5>

                                    <div class="date-time-field">
                                        <input type="text" id="date-picker-2" name="return_date" value="{{$currentDateTime}}" required>
                                        <select name="return_Time" id="collection-time">
                                            <option selected disabled value="Select time">Time</option>
                                            <option value="00:00">00:00</option>
                                            <option value="00:30">00:30</option>
                                            <option value="01:00">01:00</option>
                                            <option value="01:30">01:30</option>
                                            <option value="02:00">02:00</option>
                                            <option value="02:30">02:30</option>
                                            <option value="03:00">03:00</option>
                                            <option value="03:30">03:30</option>
                                            <option value="04:00">04:00</option>
                                            <option value="04:30">04:30</option>
                                            <option value="05:00">05:00</option>
                                            <option value="05:30">05:30</option>
                                            <option value="06:00">06:00</option>
                                            <option value="06:30">06:30</option>
                                            <option value="07:00">07:00</option>
                                            <option value="07:30">07:30</option>
                                            <option value="08:00">08:00</option>
                                            <option value="08:30">08:30</option>
                                            <option value="09:00">09:00</option>
                                            <option value="09:30">09:30</option>
                                            <option value="10:00">10:00</option>
                                            <option value="10:30">10:30</option>
                                            <option value="11:00">11:00</option>
                                            <option value="11:30">11:30</option>
                                            <option value="12:00">12:00</option>
                                            <option value="12:30">12:30</option>
                                            <option value="13:00">13:00</option>
                                            <option value="13:30">13:30</option>
                                            <option value="14:00">14:00</option>
                                            <option value="14:30">14:30</option>
                                            <option value="15:00">15:00</option>
                                            <option value="15:30">15:30</option>
                                            <option value="16:00">16:00</option>
                                            <option value="16:30">16:30</option>
                                            <option value="17:00">17:00</option>
                                            <option value="17:30">17:30</option>
                                            <option value="18:00">18:00</option>
                                            <option value="18:30">18:30</option>
                                            <option value="19:00">19:00</option>
                                            <option value="19:30">19:30</option>
                                            <option value="20:00">20:00</option>
                                            <option value="20:30">20:30</option>
                                            <option value="21:00">21:00</option>
                                            <option value="21:30">21:30</option>
                                            <option value="22:00">22:00</option>
                                            <option value="22:30">22:30</option>
                                            <option value="23:00">23:00</option>
                                            <option value="23:30">23:30</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <button type='submit' class="btn-main btn-fullwidth">Book Now</button>

                            
                        </form>
                    </div>

                    
                </div>                
            </div>
        </div>
    </section> 
</div>
@endsection
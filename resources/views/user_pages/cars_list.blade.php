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
                            <h1>Cars</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
    </section>
    <!-- section close -->

    <section id="section-cars">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <form action="{{route('Search_for_cars')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="item_filter_group">
                            <h4>Car Seats</h4>
                            <div class="de_form">
                                <div class="de_checkbox">
                                    <input id="car_seat_1" name="car_seat" type="checkbox" value="2">
                                    <label for="car_seat_1">2 seats</label>
                                </div>

                                <div class="de_checkbox">
                                    <input id="car_seat_2" name="car_seat" type="checkbox" value="4">
                                    <label for="car_seat_2">4 seats</label>
                                </div>

                                <div class="de_checkbox">
                                    <input id="car_seat_3" name="car_seat" type="checkbox" value="6">
                                    <label for="car_seat_3">6 seats</label>
                                </div>

                                <div class="de_checkbox">
                                    <input id="car_seat_4" name="car_seat" type="checkbox" value="7">
                                    <label for="car_seat_4">6+ seats</label>
                                </div>
                            </div>
                        </div>

                        <div class="item_filter_group">
                            <h4>Price ($)</h4>
                            <div class="price-input">
                                <div class="field">
                                <span>Min</span>
                                <input type="number" class="input-min" value="0">
                                </div>
                                <div class="field">
                                <span>Max</span>
                                <input type="number" class="input-max" value="2000">
                                </div>
                            </div>
                            <div class="slider">
                                <div class="progress"></div>
                            </div>
                            <div class="range-input">
                                <input type="range" class="range-min" min="0" name="lower_price" max="2000" value="0" step="1">
                                <input type="range" class="range-max" min="0" name="highe_price" max="2000" value="2000" step="1">
                            </div>
                        </div>
                        <button type="submit" class="btn-main w-100">SEARCH</button>

                    </form>
                </div>

                <div class="col-lg-9">
                    <div class="row">
                        @foreach ($Cars as $item)
                        @php
                        $images_src =\App\Models\CarImage::where('car_id', $item->id)->value('image_path');
                        @endphp
                        <div class="col-lg-12">
                            <div class="de-item-list mb30">
                                <div class="d-img">
                                    <img src="{{ asset('storage/'.$item->car_images_First) }}" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4>{{ $item->marke_name . ' ' . $item->model }}</h4>
                                        <div class="d-atr-group">
                                            <ul class="d-atr">
                                                <li><span>Seats:</span>{{$item->Seats_nbr}}</li>
                                                <li><span>Color:</span>{{$item->color}}</li>
                                                <li><span>Doors:</span>4</li>
                                                <li><span>Transmission:</span>{{$item->Transmission_type}}</li>
                                                <li><span>Year:</span>{{$item->year}}</li>
                                                <li><span>Availability:</span>{{$item->availability}}</li>
                                                <li><span>Drive:</span>{{$item->Drive_type}}</li>
                                                <li><span>Model:</span>{{$item->model}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-price">
                                    Daily rate from <span>{{$item->price_per_day}} DH</span>
                                    <a class="btn-main" href="{{route('Cars_info',$item->id)}}">Rent Now</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        @endforeach
                        {{ $Cars->links('vendor.pagination.carslistpaginator') }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
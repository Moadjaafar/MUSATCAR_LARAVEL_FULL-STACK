@extends('user_pages.layouts.Home_page')
@section('content')
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section id="section-hero" aria-label="section" class="full-height vertical-center" data-bgimage="url(images/background/7.jpg) bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="spacer-double sm-hide"></div>
                <div class="col-lg-6 animate__animated animate__backInLeft">
                    <h4><span class="id-color">Plan your trip now</span></h4>
                    <div class="spacer-10"></div>
                    <h1>Explore the world with Dakhla Rent cars</h1>
                    <p class="lead">Choose us for your car rental needs, and let us be your partner in creating unforgettable memories in Dakhla.</p>

                    <a class="btn-main animation" href="{{route('Cars_List')}}">Choose a Car</a>&nbsp;&nbsp;&nbsp;
                </div>

                <div class="col-lg-6 animate__animated animate__backInRight">
                    <img src="{{asset('Home/assets/images/misc/carrr-remove.png')}}" class="img-fluid animation" alt="">
                </div>
                
            </div>
        </div>
    </section>

    <section id="section-cars" class="no-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2>Our Impressive Fleet of Vehicles</h2>
                    <p>Experience comfort and convenience like never before with our diverse range of vehicles.</p>
                    <div class="spacer-20"></div>
                </div>

                <div class="clearfix"></div>

                <div id="items-carousel" class="owl-carousel wow fadeIn">
                    @foreach ($Cars as $item)
                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="{{ asset('storage/'.$item->car_images_First) }}" style="height: 260px;" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>{{ $item->marke_name . ' ' . $item->model }}</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>74</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="{{asset('Home/assets/images/icons/1.svg')}}" alt="">{{$item->Seats_nbr}}</span>
                                        <span class="d-atr"><img src="{{asset('Home/assets/images/icons/3.svg')}}" alt="">4</span>
                                        <span class="d-atr"><img src="{{asset('Home/assets/images/icons/4.svg')}}" alt="">{{$item->year}}</span>
                                    </div>
                                    
                                    <div class="d-price">
                                        Daily rate from <span>{{$item->price_per_day}} DH</span>
                                        <a class="btn-main" href="{{route('Cars_info',$item->id)}}">Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </section>

    <section id="section-img-with-tab" data-bgcolor="#f8f8f8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 offset-lg-7">
                    
                    <h2>Only Quality For Clients</h2>
                    <div class="spacer-20"></div>
                    
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Luxury</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Comfort</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Prestige</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><p>Indulge in the epitome of opulence with our luxury vehicles. Designed to exceed even the most discerning expectations, our luxury cars are a fusion of elegance and performance. Feel the power of precision engineering as you glide through the streets in a vehicle that turns heads and commands attention. Experience a new level of sophistication as you revel in the finest materials, cutting-edge technology, and unparalleled comfort. Our luxury fleet is dedicated to delivering an experience that transcends the ordinary, ensuring that every moment spent in our vehicles is nothing short of extraordinary.</p></div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><p>Your comfort is our utmost priority. Our comfort-focused vehicles are thoughtfully designed to make every journey a relaxing and enjoyable experience. Sink into plush seats and revel in the spacious interiors that offer ample legroom and headspace. Whether you're navigating the city or embarking on a cross-country adventure, our comfort-driven vehicles ensure that you arrive at your destination feeling refreshed and rejuvenated. Discover the joy of smooth rides and quiet interiors that provide the perfect setting for conversations, contemplation, or simply unwinding as you cruise along the roads.</p></div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"><p>Elevate your presence with our prestigious fleet of vehicles that exude class and sophistication. Step into a world of distinction where each vehicle is a testament to unmatched craftsmanship and attention to detail. Our prestigious cars are more than just transportation; they are a statement of your impeccable taste. With exquisite designs and refined aesthetics, these vehicles are perfect for making a lasting impression at every turn. Whether you're attending a special event or making a grand entrance, our prestigious vehicles are the embodiment of prestige, elegance, and the art of making an entrance.</p></div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="image-container col-md-6 pull-right" data-bgimage="url(Home/assets/images/background/5.jpg) center"></div>
    </section>

    <section>
        <div class="container">
            <div class="row">
            <div class="col-lg-3">
                <h2>Explore the world with comfortable car</h2>
                <div class="spacer-20"></div>
            </div>
            <div class="col-md-3">
                <i class="fa fa-trophy de-icon mb20"></i>
                <h4>First Class Services</h4>
                <p>Placing your comfort as our top priority, all in the pursuit of earning your trust.</p>
            </div>
            <div class="col-md-3">
                <i class="fa fa-road de-icon mb20"></i>
                <h4>24/7 road assistance</h4>
                <p>Reliable 24/7 Roadside Assistance and provide you with all the help you will need.
                </p>
            </div>
            <div class="col-md-3">
                <i class="fa fa-map-pin de-icon mb20"></i>
                <h4>Free Pick-Up & Drop-Off</h4>
                <p>Complimentary Pick-Up and Drop-Off Services, at any time any place</p>
            </div>
        </div>
        </div>
    </section>

    <section id="section-testimonials" class="no-top no-bottom">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="de-image-text">
                        <div class="d-text">
                            <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                            <h4>Excellent Service! Car Rent Service!</h4>
                            <blockquote>
                                I have been using MUSATCAR for my Tips &amp; Trick needs for over 5 years now. I have never had any problems with their service. Their customer support is always responsive and helpful. I would recommend Rentaly to anyone looking for a reliable Tips &amp; Trick provider.
                                <span class="by">Stepanie Hutchkiss</span>
                            </blockquote>
                        </div> 
                        <img src="{{asset('Home/assets/images/testimonial/1.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="de-image-text">
                        <div class="d-text">
                            <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                            <h4>Excellent Service! Car Rent Service!</h4>
                            <blockquote>
                                We have been using MUSATCAR for our trips needs for several years now and have always been happy with their service. Their customer support is Excellent Service! and they are always available to help with any issues we have. Their prices are also very competitive.
                                <span class="by">Jovan Reels</span>
                            </blockquote>
                        </div>
                        <img src="{{asset('Home/assets/images/testimonial/2.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="de-image-text">
                        <div class="d-text">
                            <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                            <h4>Excellent Service! Car Rent Service!</h4>
                            <blockquote>
                                Endorsed by industry experts, MUSATCAR is the Tips &amp; Trick solution you can trust. With years of experience in the field, we provide fast, reliable and secure Tips &amp; Trick services.
                                <span class="by">Kanesha Keyton</span>
                            </blockquote>
                        </div>
                        <img src="{{asset('Home/assets/images/testimonial/3.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="explore">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2>Enchanting Destinations to Explore in Dakhla.</h2>
                    <p>Discover the captivating allure of Dakhla,As you step into this coastal paradise, you'll find yourself
                     immersed in a world of natural beauty, rich culture, and unforgettable experiences.</p>
                    <div class="spacer-20"></div>
                </div>
                
                <div class="col-lg-4 mb10">
                            <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <div class="date-box">
                                                <div class="m">10</div>
                                                <div class="d">MAR</div>
                                            </div>
                                            <img alt="" src="{{asset('Home/assets/images/news/Dakhla1.jpg')}}" class="lazy">
                                        </div>
                                        <div class="post-text">                                                    
                                            <h4><a href="news-single.html">Deir el-Hagar<span></span></a></h4>
                                            <p>Nestled within the enchanting landscapes of Dakhla, Morocco, lies the remarkable archaeological site of Deir el-Hagar. Transport yourself back in time as you venture into this hidden gem, where ancient ruins whisper tales of bygone eras and civilizations.</p>
                                            <a class="btn-main" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                        <div class="col-lg-4 mb10">
                            <div class="bloglist s2 item">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <div class="date-box">
                                                <div class="m">12</div>
                                                <div class="d">MAR</div>
                                            </div>
                                            <img alt="" src="{{asset('Home/assets/images/news/Dakhla2.jpg')}}" class="lazy">
                                        </div>
                                        <div class="post-text">                                                    
                                            <h4><a href="news-single.html">PK25 Beach:Tranquility Meets Nature's in Dakhla<span></span></a></h4>
                                            <p>PK25 Beach is a testament to the unspoiled beauty of Dakhla's coastal landscapes. The pristine sands stretch along the shoreline, where crystal-clear waters meet the horizon, creating a stunning backdrop that soothes the soul and ignites a sense of wonder.</p>
                                            <a class="btn-main" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                <div class="col-lg-4 mb10">
                <div class="bloglist s2 item">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="date-box">
                                    <div class="m">14</div>
                                    <div class="d">MAR</div>
                                </div>
                                <img alt="" src="{{asset('Home/assets/images/news/Dakhla3.jpg')}}" class="lazy">
                            </div>
                            <div class="post-text">                                                    
                                <h4><a href="news-single.html">Dakhla Quad Ride: Embark on a Desert Adventure<span></span></a></h4>
                                <p>Brace yourself for an adrenaline-fueled journey as you take control of your own quad bike. Feel the power beneath you as you navigate the rolling dunes, conquer sandy trails, and weave through the vast desert expanse.</p>
                                <a class="btn-main" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-fun-facts" class="bg-color text-light">
        <div class="container">
            <div class="row g-custom-x force-text-center">
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="de_count wow fadeInUp">
                        <h3 class="timer" data-to="15425" data-speed="3000">0</h3>
                        Trips Powered
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="de_count wow fadeInUp">
                        <h3 class="timer" data-to="8745" data-speed="3000">0</h3>
                        Happy Customers
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="de_count wow fadeInUp">
                        <h3 class="timer" data-to="235" data-speed="3000">0</h3>
                        Fleets Vehicle
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="de_count wow fadeInUp">
                        <h3 class="timer" data-to="5" data-speed="3000">0</h3>
                        Years Experience
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
</div>

@endsection

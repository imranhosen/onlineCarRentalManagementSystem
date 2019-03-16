@extends('front.master')

@section('title')
    Home
@endsection

@section('image-slider')

    <div id="slider" class="nivoSlider  flexslider index_slider">


        <img src="{{ asset('/front/') }}/images/slider/slide_5.jpg" class="img-responsive" title="#htmlcaption1" data-thumb="assets/images/slider/slide_5jpg" alt="" />
        <img src="{{ asset('/front/') }}/images/slider/slide_6.jpg" class="img-responsive" title="#htmlcaption2" data-thumb="assets/images/slider/slide_6jpg" alt="" />
        <img src="{{ asset('/front/') }}/images/slider/slide_7.jpg" class="img-responsive" title="#htmlcaption3" data-thumb="assets/images/slider/slide_7jpg" alt="" />
        <img src="{{ asset('/front/') }}/images/slider/slide_8.jpg" class="img-responsive" title="#htmlcaption4" data-thumb="assets/images/slider/slide_8jpg" alt="" />



    </div>

    <div id="htmlcaption1" class="nivo-caption">
        <div class="nivo-caption__inner">
            <div class="text">
                <h1 class="showtext showtext__h1">Trusted <br>by 6 Million<br> Customers<br> &amp; Counting</h1>
                <span class="showtext showtext__link"><a href="#">Start your travel planning here!</a></span>
            </div>
        </div>
    </div>
    <div id="htmlcaption2" class="nivo-caption">
        <div class="nivo-caption__inner left-side">
            <div class="text">
                <h1 class="showtext showtext__h1">Treat Yourself:<br> Book a Luxury<br> Car Rental</h1>
                <span class="showtext showtext__link"><a href="#">Luxury Car Rental &amp; Chauffeured Cars</a></span>
            </div>
        </div>
    </div>
    <div id="htmlcaption3" class="nivo-caption">
        <div class="nivo-caption__inner">
            <div class="text">
                <h1 class="showtext showtext__h1">Pick up your<br> Luxury Car<br>  Rental for less!</h1>
                <span class="showtext showtext__link"><a href="#">Rent a Car and Save Up to 50%</a></span>
            </div>
        </div>
    </div>
    <div id="htmlcaption4" class="nivo-caption">
        <div class="nivo-caption__inner">
            <div class="text">
                <h1 class="showtext showtext__h1">Trusted <br>by 5 Million<br> Customers<br> &amp; Counting</h1>
                <span class="showtext showtext__link"><a href="#">Start your travel planning here!</a></span>
            </div>
        </div>
    </div>

@endsection

{{--@section('book-car-here')--}}

    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-12">--}}
                {{--@foreach($cars as $car)--}}
                {{--<form class="book-form" action="{{url('/car/add-car')}}" method="POST" enctype="multipart/form-data">--}}
                {{--<form id="book-form" class="book-form" action="#">--}}
                    {{--{{csrf_field()}}--}}
							{{--<span class="book-form__title">--}}
								{{--Book Now--}}
								{{--<small>Best Price Online</small>--}}
							{{--</span>--}}
                    {{--<br class="book-form__block-select">--}}
                        {{--<div class="inner-block">--}}
                            {{--<div class="book-form__text">Pick up Location</div>--}}
                            {{--<select name="location">--}}
                                {{--<option disabled>Location</option>--}}
                                {{--<option value="Dhaka">Dhaka</option>--}}
                                {{--<option selected value="Chittagong">Chittagong</option>--}}
                                {{--<option value="Comilla">Comilla</option>--}}
                                {{--<option value="Noakhali">Noakhali</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                        {{--<div class="inner-block second-block">--}}
                            {{--<div class="book-form__text">Pick up Date/Time</div>--}}
                            {{--<select name="datetime">--}}
                                {{--<option selected value="Jan">Jan</option>--}}
                                {{--<option value="February">Feb</option>--}}
                                {{--<option value="March">Mar</option>--}}
                                {{--<option value="April">Apr</option>--}}
                                {{--<option value="May">May</option>--}}
                                {{--<option value="June">Jun</option>--}}
                                {{--<option value="Jule">Jul</option>--}}
                                {{--<option value="August">Aug</option>--}}
                                {{--<option value="September">Sept</option>--}}
                                {{--<option value="October">Oct</option>--}}
                                {{--<option value="November">Nov</option>--}}
                                {{--<option value="December">Dec</option>--}}
                            {{--</select>--}}
                            {{--<select name="day">--}}
                                {{--<option value="1">1</option>--}}
                                {{--<option value="2">2</option>--}}
                                {{--<option value="3">3</option>--}}
                                {{--<option value="4">4</option>--}}
                                {{--<option value="5">5</option>--}}
                                {{--<option value="6">6</option>--}}
                                {{--<option value="7">7</option>--}}
                                {{--<option value="8">8</option>--}}
                                {{--<option value="9">9</option>--}}
                                {{--<option value="10">10</option>--}}
                                {{--<option value="11">11</option>--}}
                                {{--<option value="12">12</option>--}}
                                {{--<option value="13">13</option>--}}
                                {{--<option value="14">14</option>--}}
                                {{--<option value="15">15</option>--}}
                                {{--<option value="16">16</option>--}}
                                {{--<option value="17">17</option>--}}
                                {{--<option value="18">18</option>--}}
                                {{--<option value="19">19</option>--}}
                                {{--<option value="20">20</option>--}}
                                {{--<option value="21">21</option>--}}
                                {{--<option value="22">22</option>--}}
                                {{--<option value="23">23</option>--}}
                                {{--<option value="24">24</option>--}}
                                {{--<option value="25">25</option>--}}
                                {{--<option value="26">26</option>--}}
                                {{--<option value="27">27</option>--}}
                                {{--<option value="28">28</option>--}}
                                {{--<option value="29">29</option>--}}
                                {{--<option value="30">30</option>--}}
                                {{--<option value="31">31</option>--}}
                            {{--</select>--}}
                            {{--<select name="time">--}}
                                {{--<option value="08:00 AM">08:00 AM</option>--}}
                                {{--<option value="09:00 AM">09:00 AM</option>--}}
                                {{--<option value="10:00 AM">10:00 AM</option>--}}
                                {{--<option value="11:00 AM">08:00 AM</option>--}}
                                {{--<option value="12:00 PM">12:00 PM</option>--}}
                                {{--<option value="13:00 PM">13:00 PM</option>--}}
                                {{--<option value="14:00 PM">14:00 PM</option>--}}
                                {{--<option value="15:00 PM">15:00 PM</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--<br>--}}
                    {{--@foreach($cars as $car)--}}
                    {{--<div class="book-form__btn">--}}

                        {{--@if(Session::get('customerId'))--}}
                            {{--<a href="{{ url('/booking-info/{id}') }}" class="btn btn-primary btn-block "><h2>Book Now</h2></a>--}}
                        {{--@else--}}
                            {{--<a href="{{ url('/booking') }}" class="btn btn-primary btn-block  "><h2>Book Now</h2></a>--}}
                        {{--@endif--}}

                        {{--<input type="submit" class="btn" data-remodal-target="modal" value="BOOK NOW">--}}
                    {{--</div>--}}

                {{--</form>--}}
                    {{--@endforeach--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}

@section('content')
    <figure class="thumbnail move_img wow slideInLeft" data-wow-delay="0.5s"></figure>
    <div class="row">
        <div class="col-sm-12 col-lg-6 col-lg-push-6">
            <h1>Welcome</h1>
            <p>Hiring a car just got easier with the reliable service of Car Rental Service! Having covered all the 50 states in America, we offer the finest choice of vehicles ranging from economy to luxury.</p>
            <p>We have tied up with renowned car rental brands so that we can provide our customers with the most economic car rental deals along with world class customer service. </p>
            <ul class="list__marker">
                <li>Best price guarantee</li>
                <li>No cancellation or amendment fees</li>
                <li>No hidden extras to pay - theft and damage cover included</li>
            </ul>
            <a href="{{ url('/service') }}" class="btn">Read more</a>
        </div>
    </div>

@endsection

@section('container')
    <div class="container">
    <div class="box-list-posts swiper-container-services swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="post-column">
                    <figure class="thumbnail"><img src="{{ asset('/front/') }}/images/bus-stop.jpg" alt=""></figure>
                    <div class="post-column__content">
                        <h3>Nearest<br> Bus Stop Deals</h3>
                        <span class="text-link">Budget Prices for Long <br>Term Rentals</span>
                        <a href="{{ url('/service') }}" class="btn btn__marker"><i class="icon-arrows"></i></a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="post-column">
                    <figure class="thumbnail"><img src="{{ asset('/front/') }}/images/online-reservation.jpg" alt=""></figure>
                    <div class="post-column__content">
                        <h3>Online Reservations</h3>
                        <span class="text-link">Search Prices and <br>Special Offers</span>
                        <a href="{{ url('/service') }}" class="btn btn__marker"><i class="icon-arrows"></i></a>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="post-column">
                    <figure class="thumbnail"><img src="{{ asset('/front/') }}/images/road-assistant.jpg" alt=""></figure>
                    <div class="post-column__content">
                        <h3>24/7 Road Assistance</h3>
                        <span class="text-link">Road Assistance &amp; Car Replacement</span>
                        <a href="{{ url('/service') }}" class="btn btn__marker"><i class="icon-arrows"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination swiper-pagination-services"></div>
    </div>
    </div>

@endsection

@section('container-2')

    <div class="row info-box">
        <div class="col-xs-12">
            <article class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                <h1>Start your travel planning here</h1>
                <span class="text-link">Drive away with more money in your pockets and more time on your itinerary.</span>
                <a href="{{ url('/fleet') }}" class="btn" >BOOK NOW</a>
                <a href="{{ url('/contact') }}" class="btn invert">EMAIL US</a>
             </article>
        </div>
    </div>

@endsection

@section('fleet')

        <div class="carousel-models_fullwidth__inner">
        <h1>Our Fleet</h1>
        <span class="text-link">Great Rental Car Selection. Unbeatable Deals.</span>
        <div class="swiper-container-models swiper-container">
            <div class="swiper-wrapper">
                @foreach($cars as $car)
                <div class="model-info swiper-slide">
                    <figure class="thumbnail"><a href="details.html"><img src="{{ asset($car->car_image) }}" alt=""></a></figure>
                    <div class="model-info__content">
                        <h3>{{ $car->car_name }}</h3>
                        {{--<p>To be clear, the Santa Fe Sport is a 5-passenger SUV with two rows of seating, but I am testing the regular Santa Fe that is larger and has three rows of seating.</p>--}}
                        {{--<p>{{ $car->car_description }}</p>--}}
                        <span class="cost">From <strong>Tk: {{ $car->car_price }}</strong> per day</span>
                        {{--<span class="btn btn-model" data-remodal-target="modal">book now</span>--}}

                        <div class="book-form__btn">
                            <a href="{{url('/car-details/'.$car->id)}}" class="btn btn-primary btn-block"><h8 class="text-info"> Details </h8></a>

                        </div>
                    </br>

                        <div class="book-form__btn">
                            @if(Session::get('customerId'))
                                <a href="{{ url('/booking-info/'.$car->id) }}" class=" btn btn-primary btn-block btn-model"><h2>Book Now</h2></a>
                            @else
                                <a href="{{ url('/booking') }}" class=" btn btn-success btn-block btn-model"><h2>Book Now</h2></a>
                            @endif
                            {{--<input type="submit" class="btn" data-remodal-target="modal" value="BOOK NOW">--}}
                        </div>
                    </div>
                </div>


                @endforeach



            </div><!-- // swiper-container-car  -->

        </div>



        <div class="swiper-pagination-models"></div>
        <div class="navigation_block">
            <span class="swiper-button-next"><i class="icon-left-arrow2"></i></span>
            <span class="swiper-button-prev"><i class="icon-left-arrow"></i></span>
        </div>
    </div>


@endsection

{{--@section('Featured-Services')--}}

    {{--<h1>Featured Services</h1>--}}
    {{--<span class="text-link">More than just a car rental company</span>--}}
    {{--<div class="swiper-container-column swiper-container-column-first swiper-container">--}}
        {{--<div class="swiper-wrapper">--}}
            {{--<div class="swiper-slide odd-line">--}}
                {{--<div class="service-block">--}}
                    {{--<figure class="thumbnail"><a href="services-post.html"><img src="assets/images/service_img_1.jpg" alt=""></a></figure>--}}
                    {{--<div class="service-block__content">--}}
                        {{--<h3>24 Hour Airport Services</h3>--}}
                        {{--<p>The best and biggest airport transfer company in the city, Airport Transfers is here to provide you with the best one-stop transportation service with minimal fuss and maximum comfort.</p>--}}
                        {{--<a href="services-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="swiper-slide even-line">--}}
                {{--<div class="service-block">--}}
                    {{--<figure class="thumbnail"><a href="services-post.html"><img src="assets/images/service_img_2.jpg" alt=""></a></figure>--}}
                    {{--<div class="service-block__content">--}}
                        {{--<h3 >Corporate Meetings &amp; Events</h3>--}}
                        {{--<p>Does your company have employees or clients who frequently rent in the Los Angeles area? Setting up a corporate account allowsus to pre-deliver vehicles to hotels, offices, residences.</p>--}}
                        {{--<a href="services-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="swiper-slide odd-line">--}}
                {{--<div class="service-block">--}}
                    {{--<figure class="thumbnail"><a href="services-post.html"><img src="assets/images/service_img_3.jpg" alt=""></a></figure>--}}
                    {{--<div class="service-block__content">--}}
                        {{--<h3>Business Travel</h3>--}}
                        {{--<p>We offer professional drivers who can chauffeur you to any destination you choose. Or ask for a type of tour or drive you are in the mood for and let us do the rest. </p>--}}
                        {{--<a href="services-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="swiper-slide even-line">--}}
                {{--<div class="service-block">--}}
                    {{--<figure class="thumbnail"><a href="services-post.html"><img src="assets/images/service_img_4.jpg" alt=""></a></figure>--}}
                    {{--<div class="service-block__content">--}}
                        {{--<h3>Private Tours</h3>--}}
                        {{--<p>Huge discounts. Free Delivery and Pickup. Free Car washes. Free upgrades. Free maintenance.  We offer amazing deals on car rental rates. Give us a call we make it easy and affordable.</p>--}}
                        {{--<a href="services-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="swiper-pagination swiper-pagination-services-second"></div>--}}
    {{--<a href="services.html" class="btn">MORE SERVICES</a>--}}

{{--@endsection--}}

@section('clients')


        <h1>Clients Say</h1>
        <span class="text-link">What our clients say about us</span>
        <div class="swiper-container-blockquote swiper-container">
            <div class="swiper-wrapper">
                @foreach($comments as $comment)
                <div class="swiper-slide">
                    <article class="block_tesimonial">
                        <blockquote>
                            <div class="inner_blockquote">
                                <div class="wrapper">
                                    <p>{{ $comment->comentator_comment }}</p>
                                    <span class="author_info">
												<img src="assets/images/author_img.png" alt="">
												<span class="name"><a href="#">{{ $comment->comentator_name }}</a></span>
												<span class="position">Regular Customer</span>
											</span>
                                </div>
                            </div>
                        </blockquote>
                    </article>
                </div>
                @endforeach
                {{--<div class="swiper-slide">--}}
                    {{--<article class="block_tesimonial">--}}
                        {{--<blockquote>--}}
                            {{--<div class="inner_blockquote">--}}
                                {{--<div class="wrapper">--}}
                                    {{--<p>This is the second time this year that I have rented a Rental Cars direct vehicle and the cars were both virtually brand new. Awesome cars and very kind, helpful staff. Thank you!</p>--}}
                                    {{--<span class="author_info">--}}
												{{--<img src="assets/images/author_img_1.png" alt="">--}}
												{{--<span class="name"><a href="#">Donald Alford</a></span>--}}
												{{--<span class="position">Regular Customer</span>--}}
											{{--</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</blockquote>--}}

                    {{--</article>--}}
                {{--</div>--}}
                {{--<div class="swiper-slide">--}}
                    {{--<article class="block_tesimonial">--}}
                        {{--<blockquote>--}}
                            {{--<div class="inner_blockquote">--}}
                                {{--<div class="wrapper">--}}
                                    {{--<p>Great Service, Absolutely Terrific staff, extremely professional!!! This was my first ever Car Renting experience, Awesome!!</p>--}}
                                    {{--<span class="author_info">--}}
												{{--<img src="assets/images/author_img_2.png" alt="">--}}
												{{--<span class="name"><a href="#">James Knudsen</a></span>--}}
												{{--<span class="position">Regular Customer</span>--}}
											{{--</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</blockquote>--}}
                    {{--</article>--}}
                {{--</div>--}}
                {{--<div class="swiper-slide">--}}
                    {{--<article class="block_tesimonial">--}}
                        {{--<blockquote>--}}
                            {{--<div class="inner_blockquote">--}}
                                {{--<div class="wrapper">--}}
                                    {{--<p>Im really impressed with your staff at all moosa branch, patricia. She has sevice minded, be attentive, proactive. I think you have a very value staff with you.</p>--}}
                                    {{--<span class="author_info">--}}
												{{--<img src="assets/images/author_img_3.png" alt="">--}}
												{{--<span class="name"><a href="#">Bruce Justice</a></span>--}}
												{{--<span class="position">Regular Customer</span>--}}
											{{--</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</blockquote>--}}
                    {{--</article>--}}
                {{--</div>--}}
            </div>
        </div>
        <div class="swiper-pagination swiper-pagination-blockquote"></div>
        <span class="swiper-button-next1"><i class="icon-left-arrow2"></i></span>
        <span class="swiper-button-prev1"><i class="icon-left-arrow"></i></span>


@endsection

{{--@section('blog')--}}
    {{--<div class="container">--}}
    {{--<h1>From the Blog</h1>--}}
    {{--<span class="text-link">Our latest news and events</span>--}}
    {{--<div class="swiper-container swiper-container-blog">--}}

        {{--<div class="swiper-wrapper">--}}
            {{--@foreach($blogs as $blog)--}}
            {{--<div class="swiper-slide post-item">--}}
                {{--<div class="post-item__inner">--}}
                    {{--<figure class="thumbnail">--}}
                        {{--<img src="{{ asset('/front/') }}/images/item_img-1.jpg" alt="">--}}
                    {{--</figure>--}}
                    {{--<div class="post-item__content">--}}
                        {{--<span class="date">10 February, 2017</span>--}}
                        {{--<h4>Finding Cheap Rental Cars</h4>--}}
                        {{--<h4>{{ $blog->blog_title }}</h4>--}}
                        {{--<a href="single-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--@endforeach--}}


            {{--<div class="swiper-slide post-item">--}}
                {{--<div class="post-item__inner">--}}
                    {{--<figure class="thumbnail">--}}
                        {{--<img src="{{ asset('/front/') }}/images/item_img-2.jpg" alt="">--}}
                    {{--</figure>--}}
                    {{--<div class="post-item__content">--}}
                        {{--<span class="date">11 February, 2017</span>--}}
                        {{--<h4>19 ways to save money on rental cars</h4>--}}
                        {{--<a href="single-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="swiper-slide post-item">--}}
                {{--<div class="post-item__inner">--}}
                    {{--<figure class="thumbnail">--}}
                        {{--<img src="{{ asset('/front/') }}/images/item_img-3.jpg" alt="">--}}
                    {{--</figure>--}}
                    {{--<div class="post-item__content">--}}
                        {{--<span class="date">12 February, 2017</span>--}}
                        {{--<h4>Finding Cheap Rental Cars</h4>--}}
                        {{--<a href="single-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="swiper-slide post-item">--}}
                {{--<div class="post-item__inner">--}}
                    {{--<figure class="thumbnail">--}}
                        {{--<img src="{{ asset('/front/') }}/images/item_img-1.jpg" alt="">--}}
                    {{--</figure>--}}
                    {{--<div class="post-item__content">--}}
                        {{--<span class="date">10 February, 2017</span>--}}
                        {{--<h4>Finding Cheap Rental Cars</h4>--}}
                        {{--<a href="single-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="swiper-slide post-item">--}}
                {{--<div class="post-item__inner">--}}
                    {{--<figure class="thumbnail">--}}
                        {{--<img src="{{ asset('/front/') }}/images/item_img-2.jpg" alt="">--}}
                    {{--</figure>--}}
                    {{--<div class="post-item__content">--}}
                        {{--<span class="date">11 February, 2017</span>--}}
                        {{--<h4>19 ways to save money on rental cars</h4>--}}
                        {{--<a href="single-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="swiper-slide post-item">--}}
                {{--<div class="post-item__inner">--}}
                    {{--<figure class="thumbnail">--}}
                        {{--<img src="{{ asset('/front/') }}/images/item_img-3.jpg" alt="">--}}
                    {{--</figure>--}}
                    {{--<div class="post-item__content">--}}
                        {{--<span class="date">12 February, 2017</span>--}}
                        {{--<h4>Finding Cheap Rental Cars</h4>--}}
                        {{--<a href="single-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="swiper-pagination swiper-pagination-blog"></div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<span class="swiper-button-next2 swiper-button-next"><i class="icon-left-arrow2"></i></span>--}}
    {{--<span class="swiper-button-prev2 swiper-button-prev"><i class="icon-left-arrow"></i></span>--}}

{{--@endsection--}}

@section('container-3')

    <div class="row">
        <div class="col-sm-12">
            <div class="phone-box wow zoomIn">
                <h1>Join Us and Save on Car Rentals!</h1>
                <span class="text-link">Great offers for cheap car rental, daily, weekly long term rentals</span>
                <h3 class="phone-box__number">Call Now: <span><i class="icon-telephone"></i> 01749207035</span></h3>
            </div>
        </div>
    </div>

@endsection

@section('car-hire')

    <div class="car-info-box__description">
        <div class="desc-inner">
            <h1>Car Hire</h1>
            <span class="text-link">Search for the best deals on rental cars</span>
            <p>Find cheap car hire fast and hit the road happy with Rental Cars. Search the world’s top car hire companies. Instantly compare prices. Then book direct with the car rental company of your choice. It’s so easy.  We search thousands of destinations and compare thousands of car hire deals to help you find your perfect drive at a low price. </p>
        </div>
    </div>
    <figure class="car-info-box__thumb has-second-img">
        <img src="{{ asset('/front/') }}/images/car-hire-1.jpg" alt="" class="first-fade">
        <img src="{{ asset('/front/') }}/images/car-hire-2.jpg" alt="" class="second-fade">
    </figure>

@endsection
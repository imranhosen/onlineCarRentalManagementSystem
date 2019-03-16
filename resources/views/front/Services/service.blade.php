@extends('front.master')

@section('title')

    Service

@endsection

@section('content')

    <main id="page-content">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs__title">Our Services</div>
                        <div class="breadcrumbs__items">
                            <div class="breadcrumbs__wrap">
                                <div class="breadcrumbs__item">
                                    <a href="index.html" class="breadcrumbs__item-link">Home</a> <span>/</span> <a href="{{ url('/service') }}" class="breadcrumbs__item-link">Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Breadcrumbs  -->
        <section class="service-info-box">


            <div class="swiper-container-column swiper-container-column-second swiper-container">

                <div class="swiper-wrapper">
                    @foreach($services as $service)
                        <div class="swiper-slide odd-line">
                        <div class="service-block">
                            <figure class="thumbnail"><span><a href="services-post.html"><img src="{{ asset($service->car_image) }}" alt=""></a></span></figure>
                            <div class="service-block__content">
                                <h3>{{ $service->service_name }}</h3>
                                <p>{{ $service->service_short_description }}</p>
                                <a href="{{ url('/service/service-details/'.$service->id) }}" class="btn btn__marker"><i class="icon-arrows"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{--<div class="swiper-slide even-line">--}}
                        {{--<div class="service-block">--}}
                            {{--<figure class="thumbnail"><span><a href="services-post.html"><img src="{{ asset('/front/') }}/images/service_img_2.jpg" alt=""></a></span></figure>--}}
                            {{--<div class="service-block__content">--}}
                                {{--<h3>Corporate Meetings &amp; Events</h3>--}}
                                {{--<p>Does your company have employees or clients who frequently rent in the Los Angeles area? Setting up a corporate account allowsus to pre-deliver vehicles to hotels, offices, residences.</p>--}}
                                {{--<a href="services-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="swiper-slide odd-line">--}}
                        {{--<div class="service-block">--}}
                            {{--<figure class="thumbnail"><span><a href="services-post.html"><img src="{{ asset('/front/') }}/images/service_img_3.jpg" alt=""></a></span></figure>--}}
                            {{--<div class="service-block__content">--}}
                                {{--<h3>Business Travel</h3>--}}
                                {{--<p>We offer professional drivers who can chauffeur you to any destination you choose. Or ask for a type of tour or drive you are in the mood for and let us do the rest. </p>--}}
                                {{--<a href="services-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="swiper-slide odd-line">--}}
                        {{--<div class="service-block">--}}
                            {{--<figure class="thumbnail"><span><a href="services-post.html"><img src="{{ asset('/front/') }}/images/service_img_4.jpg" alt=""></a></span></figure>--}}
                            {{--<div class="service-block__content">--}}
                                {{--<h3>Private Tours</h3>--}}
                                {{--<p>Huge discounts. Free Delivery and Pickup. Free Car washes. Free upgrades. Free maintenance.  We offer amazing deals on car rental rates. Give us a call we make it easy and affordable.</p>--}}
                                {{--<a href="services-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="swiper-slide even-line">--}}
                        {{--<div class="service-block">--}}
                            {{--<figure class="thumbnail"><span><a href="services-post.html"><img src="{{ asset('/front/') }}/images/service_img_5.jpg" alt=""></a></span></figure>--}}
                            {{--<div class="service-block__content">--}}
                                {{--<h3>To My Door</h3>--}}
                                {{--<p>Sometimes there just aren’t enough hours in the day. So, why would you want to spend an hour travelling across town to pick up a hire car?</p>--}}
                                {{--<a href="services-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="swiper-slide odd-line">--}}
                        {{--<div class="service-block">--}}
                            {{--<figure class="thumbnail"><span><a href="services-post.html"><img src="{{ asset('/front/') }}/images/service_img_6.jpg" alt=""></a></span></figure>--}}
                            {{--<div class="service-block__content">--}}
                                {{--<h3>Private Tours</h3>--}}
                                {{--<p>If you’ve got a busy trip ahead and you simply want to get straight behind the wheel when you arrive to pick up your rental car, you’re in luck. Online Check-in is designed to get you out on the road as soon as possible, and the best part is…  it’s a free service.</p>--}}
                                {{--<a href="services-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-column-main"></div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="phone-box">
                        <h1>Join Us and Save on Car Rentals!</h1>
                        <span class="text-link">Great offers for cheap car rental, daily, weekly long term rentals</span>
                        <h3 class="phone-box__number">Call Now: <span><i class="icon-telephone"></i> 1-800-123-4567</span></h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="services-box">
            <div class="container">
                <div class="box-list-posts swiper-container-services swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="post-column">
                                <figure class="thumbnail"><img src="{{ asset('/front/') }}/images/post-sm-img-1.jpg" alt=""></figure>
                                <div class="post-column__content">
                                    <h3>Nearest<br> Airport Deals</h3>
                                    <span class="text-link">Budget Prices for Long Term Rentals</span>
                                    <a href="#" class="btn btn__marker"><i class="icon-arrows"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="post-column">
                                <figure class="thumbnail"><img src="{{ asset('/front/') }}/images/post-sm-img-2.jpg" alt=""></figure>
                                <div class="post-column__content">
                                    <h3>Online Reservations</h3>
                                    <span class="text-link">Search Prices and Special Offers</span>
                                    <a href="#" class="btn btn__marker"><i class="icon-arrows"></i></a>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="post-column">
                                <figure class="thumbnail"><img src="{{ asset('/front/') }}/images/post-sm-img-3.jpg" alt=""></figure>
                                <div class="post-column__content">
                                    <h3>24/7 Road Assistance</h3>
                                    <span class="text-link">Road Assistance &amp; Car Replacement</span>
                                    <a href="#" class="btn btn__marker"><i class="icon-arrows"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-services"></div>
                </div>
                <!-- // box-list-posts  -->
            </div>
        </div>

    </main>

@endsection
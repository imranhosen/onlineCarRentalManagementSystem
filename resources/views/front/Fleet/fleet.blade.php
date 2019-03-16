@extends('front.master')

@section('title')

    Fleet

@endsection

@section('content')

    <main id="page-content">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs__title">Fleet</div>
                        <div class="breadcrumbs__items">
                            <div class="breadcrumbs__wrap">
                                <div class="breadcrumbs__item">
                                    <a href="index.html" class="breadcrumbs__item-link">Home</a> <span>/</span> <a href="fleet.html" class="breadcrumbs__item-link">Fleet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Breadcrumbs  -->
        <section class="carousel-models_fullwidth">

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
                                    <p>{{ $car->car_description }}</p>
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


        </section> <!-- // Full width carousel  -->


        <section class="isotop-box">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>Our Fleet</h1>
                        <!-- Filters -->
                        <div class="filters-by-category">
                            <ul class="option-set" data-option-key="filter">
                                <li><a href="#filter" data-option-value="*" class="selected">All</a></li>
                                <li><a href="#filter" data-option-value=".category1" class="">Executive Sedans</a></li>
                                <li><a href="#filter" data-option-value=".category2" class="">Luxury Sedans</a></li>
                                <li><a href="#filter" data-option-value=".category3" class="">Limousine</a></li>
                                <li><a href="#filter" data-option-value=".category4" class="">Sport Car</a></li>
                                <li><a href="#filter" data-option-value=".category5" class="">SUV</a></li>
                                <li><a href="#filter" data-option-value=".category6" class="">Passenger Van</a></li>
                                <li><a href="#filter" data-option-value=".category7" class="">Mini Bus</a></li>
                                <li><a href="#filter" data-option-value=".category8" class="">Motobike</a></li>
                                <li><a href="#filter" data-option-value=".category9" class="">Yacht</a></li>
                                <li><a href="#filter" data-option-value=".category10" class="">Helicopter</a></li>
                                <li><a href="#filter" data-option-value=".category11" class="">Airplane</a></li>
                            </ul>
                        </div>

                        <!-- //end Filters -->
                        <div class="gallery gallery-isotope" id="gallery">
                            <div class="gallery__item  category6 category7">
                                <figure class="gallery__item__image">
                                    <a class="hover" href="details.html">
                                        <img src="assets/images/gallery/gallery-img-thumb-01.jpg" alt="" />
                                        <i class="icon-arrow-down-sign-to-navigate2"></i>
                                    </a>
                                </figure>
                                <div class="gallery__item__content">
                                    <h6>Mercedes-Benz Van</h6>
                                    <span class="cost"><span><strong>500tk</strong>/hour</span><span><strong>2500tk</strong>/day</span></span>
                                    <u><a href="details.html" class="link-gallery">View Details</a></u>
                                    <span class="btn btn-mini" data-remodal-target="modal">Book now</span>
                                </div>
                            </div>
                            <div class="gallery__item category1 category2 category4">
                                <figure class="gallery__item__image">
                                    <a class="hover" href="details.html">
                                        <img src="assets/images/gallery/gallery-img-thumb-02.jpg" alt="" />
                                        <i class="icon-arrow-down-sign-to-navigate2"></i>
                                    </a>
                                </figure>
                                <div class="gallery__item__content">
                                    <h6>Porsche 911 Carrera</h6>
                                    <span class="cost"><span><strong>300tk</strong>/hour</span><span><strong>1500tk</strong>/day</span></span>
                                    <u><a href="details.html" class="link-gallery">View Details</a></u>
                                    <span class="btn btn-mini" data-remodal-target="modal">Book now</span>
                                </div>
                            </div>
                            <div class="gallery__item category1 category4  category5">
                                <figure class="gallery__item__image">
                                    <a class="hover" href="details.html">
                                        <img src="assets/images/gallery/gallery-img-thumb-03.jpg" alt="" />
                                        <i class="icon-arrow-down-sign-to-navigate2"></i>
                                    </a>
                                </figure>
                                <div class="gallery__item__content">
                                    <h6>Hyundai Santa Fe</h6>
                                    <span class="cost"><span><strong>200tk</strong>/hour</span><span><strong>1000tk</strong>/day</span></span>
                                    <u><a href="details.html" class="link-gallery">View Details</a></u>
                                    <span class="btn btn-mini" data-remodal-target="modal">Book now</span>
                                </div>

                            </div>
                            <div class="gallery__item category2 category4">
                                <figure class="gallery__item__image">
                                    <a class="hover" href="details.html">
                                        <img src="{{ asset('/front/') }}/images/gallery/gallery-img-thumb-04.jpg" alt="" />
                                        <i class="icon-arrow-down-sign-to-navigate2"></i>
                                    </a>
                                </figure>
                                <div class="gallery__item__content">
                                    <h6>Jaguar F-Type S</h6>
                                    <span class="cost"><span><strong>150tk</strong>/hour</span><span><strong>750tk</strong>/day</span></span>
                                    <u><a href="details.html" class="link-gallery">View Details</a></u>
                                    <span class="btn btn-mini" data-remodal-target="modal">Book now</span>
                                </div>
                            </div>
                            <div class="gallery__item category2 category5">
                                <figure class="gallery__item__image">
                                    <a class="hover" href="details.html">
                                        <img src="{{ asset('/front/') }}/images/gallery/gallery-img-thumb-05.jpg" alt="" />
                                        <i class="icon-arrow-down-sign-to-navigate2"></i>
                                    </a>
                                </figure>
                                <div class="gallery__item__content">
                                    <h6>Hyundai i30</h6>
                                    <span class="cost"><span><strong>150tk</strong>/hour</span><span><strong>850tk</strong>/day</span></span>
                                    <u><a href="details.html" class="link-gallery">View Details</a></u>
                                    <span class="btn btn-mini" data-remodal-target="modal">Book now</span>
                                </div>
                            </div>
                            <div class="gallery__item category6 category5">
                                <figure class="gallery__item__image">
                                    <a class="hover" href="details.html">
                                        <img src="{{ asset('/front/') }}/images/gallery/gallery-img-thumb-06.jpg" alt="" />
                                        <i class="icon-arrow-down-sign-to-navigate2"></i>
                                    </a>
                                </figure>
                                <div class="gallery__item__content">
                                    <h6>Ford Edge</h6>
                                    <span class="cost"><span><strong>215tk</strong>/hour</span><span><strong>1500tk</strong>/day</span></span>
                                    <u><a href="details.html" class="link-gallery">View Details</a></u>
                                    <span class="btn btn-mini" data-remodal-target="modal">Book now</span>
                                </div>
                            </div>
                        </div>

                        <div class="pagination">
                            <ul>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- //row -->
            </div> <!-- //Container -->
        </section>

        <section class="car-info-box img-left">
            <div class="car-info-box__description">
                <div class="desc-inner">
                    <h1>Luxury Cars</h1>
                    <span class="text-link">No booking fees! No markups!</span>
                    <p>Search through Rental Cars renowned luxury car rental brands, rent to self-drive in the USA. Delivery at your location across Car Rentals, and Sharjah Car Rentals now available. Through OneClickDrive, you can also hire a BMW, Audi, Jaguar, Range Rover, Lexus or Mercedes with a professional driver chauffeur service. </p>
                </div>
            </div>
            <figure class="car-info-box__thumb has-second-img">
                <img src="{{ asset('/front/') }}/images/car_hire1.jpg" alt="" class="first-fade">
                <img src="{{ asset('/front/') }}/images/car_hire2.jpg" alt="" class="second-fade">
            </figure>
        </section>


@endsection
@extends('front.master')

@section('title')

    Service1

@endsection

@section('content')

    <main id="page-content">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs__title">Services</div>
                        <div class="breadcrumbs__items">
                            <div class="breadcrumbs__wrap">
                                <div class="breadcrumbs__item">
                                    <a href="index.html" class="breadcrumbs__item-link">Home</a> <span>/</span> <a href="services.html" class="breadcrumbs__item-link">About Us</a> <span>/</span> <a href="services-post.html" class="breadcrumbs__item-link"> 24 Hour Airport  Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Breadcrumbs  -->
        <div class="container">
            <div class="row">
                @foreach($servicedetails as $servicedetail)
                <div class="col-xs-12">
                    <article class="services-post">
                        <figure class="thumbnail"><img src="{{ asset($servicedetail->car_image) }}" alt=""></figure>
                        <div class="services-post__desc">
                            <h2>{{ $servicedetail->service_name }}</h2>
                            <p>{{ $servicedetail->service_short_description }}</p>
                            <p>{{ $servicedetail->service_long_description }}</p>
                            <a href="{{ url('/rate') }}" class="btn">See Our Price</a>
                        </div>
                    </article>
                </div>
                @endforeach
                {{--<div class="col-xs-12 col-sm-6 col-md-4">--}}
                    {{--<figure class="thumbnail banner-thumb">--}}
                        {{--<a href="#"><img src="assets/images/banner-1.jpg" alt=""></a>--}}
                    {{--</figure>--}}
                {{--</div>--}}
                {{--<div class="col-xs-12 col-sm-6 col-md-4">--}}
                    {{--<figure class="thumbnail banner-thumb">--}}
                        {{--<a href="#"><img src="assets/images/banner-2.jpg" alt=""></a>--}}
                    {{--</figure>--}}
                {{--</div>--}}
                {{--<div class="col-xs-12 col-sm-6 col-md-4">--}}
                    {{--<figure class="thumbnail banner-thumb">--}}
                        {{--<a href="#"><img src="assets/images/banner-3.jpg" alt=""></a>--}}
                    {{--</figure>--}}
                {{--</div>--}}
            </div>
        </div>
    </main>

@endsection
@extends('front.master')
@section('title')

    Our Drivers

@endsection

@section('content')

    <main id="page-content">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs__title">Our Drivers</div>
                        <div class="breadcrumbs__items">
                            <div class="breadcrumbs__wrap">
                                <div class="breadcrumbs__item">
                                    <a href="index.html" class="breadcrumbs__item-link">Home</a> <span>/</span> <a href="ourdrivers.html" class="breadcrumbs__item-link">Our drivers</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Breadcrumbs  -->
        <section class="our-team-box">
            <div class="container">
                <div class="row">
                    @foreach($drivers as $driver)
                    <div class="col-xs-6 col-md-4">
                        <div class="block-team__item">
                            <figure class="thumbnail">
                                <img src="{{ asset($driver->driver_image) }}" alt="">
                            </figure>
                            <div class="block-team__desc">
                                <h3><a href="#">{{ $driver->driver_name }}</a></h3>
                                <span class="position">{{ $driver->driver_type }}</span>
                                <p>{{ $driver->driver_description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{--<div class="col-xs-6 col-md-4">--}}
                        {{--<div class="block-team__item">--}}
                            {{--<figure class="thumbnail">--}}
                                {{--<img src="assets/images/team_thumb-2.jpg" alt="">--}}
                            {{--</figure>--}}
                            {{--<div class="block-team__desc">--}}
                                {{--<h3><a href="#">Justin Groh</a></h3>--}}
                                {{--<span class="position">Airport transfer driver</span>--}}
                                {{--<p>Huge discounts. Free Delivery and Pickup. Free Car washes. Free upgrades.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-6 col-md-4">--}}
                        {{--<div class="block-team__item">--}}
                            {{--<figure class="thumbnail">--}}
                                {{--<img src="assets/images/team_thumb-3.jpg" alt="">--}}
                            {{--</figure>--}}
                            {{--<div class="block-team__desc">--}}
                                {{--<h3><a href="#">Anthony Grant</a></h3>--}}
                                {{--<span class="position">Business travel driver</span>--}}
                                {{--<p>Huge discounts. Free Delivery and Pickup. Free Car washes. Free upgrades.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-6 col-md-4">--}}
                        {{--<div class="block-team__item">--}}
                            {{--<figure class="thumbnail">--}}
                                {{--<img src="assets/images/team_thumb-4.jpg" alt="">--}}
                            {{--</figure>--}}
                            {{--<div class="block-team__desc">--}}
                                {{--<h3><a href="#">Ronnie Key</a></h3>--}}
                                {{--<span class="position">Limousine driver</span>--}}
                                {{--<p>Huge discounts. Free Delivery and Pickup. Free Car washes. Free upgrades.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-6 col-md-4">--}}
                        {{--<div class="block-team__item">--}}
                            {{--<figure class="thumbnail">--}}
                                {{--<img src="assets/images/team_thumb-5.jpg" alt="">--}}
                            {{--</figure>--}}
                            {{--<div class="block-team__desc">--}}
                                {{--<h3><a href="#">Michael Holmes</a></h3>--}}
                                {{--<span class="position">Airport transfer driver</span>--}}
                                {{--<p>Huge discounts. Free Delivery and Pickup. Free Car washes. Free upgrades.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-6 col-md-4">--}}
                        {{--<div class="block-team__item">--}}
                            {{--<figure class="thumbnail">--}}
                                {{--<img src="assets/images/team_thumb-6.jpg" alt="">--}}
                            {{--</figure>--}}
                            {{--<div class="block-team__desc">--}}
                                {{--<h3><a href="#">Luis Jones</a></h3>--}}
                                {{--<span class="position">Business travel driver</span>--}}
                                {{--<p>Huge discounts. Free Delivery and Pickup. Free Car washes. Free upgrades.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-6 col-md-4">--}}
                        {{--<div class="block-team__item">--}}
                            {{--<figure class="thumbnail">--}}
                                {{--<img src="assets/images/team_thumb-7.jpg" alt="">--}}
                            {{--</figure>--}}
                            {{--<div class="block-team__desc">--}}
                                {{--<h3><a href="#">James Spotts</a></h3>--}}
                                {{--<span class="position">Limousine driver</span>--}}
                                {{--<p>Huge discounts. Free Delivery and Pickup. Free Car washes. Free upgrades.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-6 col-md-4">--}}
                        {{--<div class="block-team__item">--}}
                            {{--<figure class="thumbnail">--}}
                                {{--<img src="assets/images/team_thumb-8.jpg" alt="">--}}
                            {{--</figure>--}}
                            {{--<div class="block-team__desc">--}}
                                {{--<h3><a href="#">Jose Glenn</a></h3>--}}
                                {{--<span class="position">Airport transfer driver</span>--}}
                                {{--<p>Huge discounts. Free Delivery and Pickup. Free Car washes. Free upgrades.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-6 col-md-4">--}}
                        {{--<div class="block-team__item">--}}
                            {{--<figure class="thumbnail">--}}
                                {{--<img src="assets/images/team_thumb-9.jpg" alt="">--}}
                            {{--</figure>--}}
                            {{--<div class="block-team__desc">--}}
                                {{--<h3><a href="#">Timmy Weller</a></h3>--}}
                                {{--<span class="position">Business travel driver</span>--}}
                                {{--<p>Huge discounts. Free Delivery and Pickup. Free Car washes. Free upgrades.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="col-xs-12">
                        <div class="pagination">
                            <ul>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
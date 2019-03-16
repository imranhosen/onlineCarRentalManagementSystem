@extends('front.master')



@section('title')

    About

@endsection

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="text-block">
                <h1>Company Overview</h1>
                <span class="text-link">Rental Cars is one of the leading  car rental companies in BANGLADESH</span>
                <p>Rent a car in BANGLADESH and benefit from low prices, professional service and a great range of comfortable new vehicles. And with our car rental stations in BANGLADESH and across the world located exactly where you need them most – in city centers, airports and railway stations – you'll be hitting the road in no time, whether travelling for business or pleasure. Rent a car in BANGLADESH with Rental Cars today and find the perfect rental car or truck for your needs, while enjoying the added peace of mind that comes with a name you can trust. Rent a car with us It's easy to book your car rental in BANGLADESH with Rental Cars. Just use our simple three-step booking process to find your ideal rental in no time. </p>
                <p>We aim to keep things quick and easy for our customers while offering great every-day low prices car rental. That's why we were voted the "World’s Leading Leisure Car hire Company". So whether you're looking for a family rental, an eco-friendly vehicle or a van hire, pay us a visit at rental station and enjoy fast and friendly service. The Green Program Here at Renal Cars, we believe what’s good for the Earth is good for our drivers. That's why we work hard to understand the environmental impact of what we do. From this, we have wholeheartedly embraced a sustainable development program and are proud to be the first car rental company in BANGLADESH with certified ecological commitments.</p>
                <ul class="list__marker">
                    <li><a href="#">Best price guarantee</a></li>
                    <li><a href="#">No cancellation or amendment fees</a></li>
                    <li><a href="#">No hidden extras to pay - theft and damage cover included</a></li>
                </ul>
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

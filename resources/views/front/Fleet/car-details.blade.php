@extends('front.master')

@section('title')

   Car Details

@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="model-details-box">
                    <a href="{{ url('/fleet') }}" class="back-btn">Back to Vehicle Fleet</a>
                    @foreach($cardetails as $carr)
                    <div class="model-details-box__inner">
                        <div class="model-details-box__info">

                            <table class="details-car">
                                <tr>
                                    <th>{{ $carr->car_name }}</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td> <span class="cost">From <strong>Tk: {{ $carr->car_price }}</strong> per day</span></td>
                                </tr>
                                <tr>
                                    <td><p>{{ $carr->car_description }}</p></td>

                                </tr>

                            </table>
                            <div class="book-form__btn">
                                @if(Session::get('customerId'))
                                    <a href="{{ url('/booking-info/'.$carr->id) }}" class=" btn btn-primary btn-block btn-model"><h2>Book Now</h2></a>
                                @else
                                    <a href="{{ url('/booking') }}" class=" btn btn-success btn-block btn-model"><h2>Book Now</h2></a>
                                @endif
                                {{--<input type="submit" class="btn" data-remodal-target="modal" value="BOOK NOW">--}}
                            </div>

                        </div>
                        <div class="model-slider-wrapper">
                            <ul id="lightSlider" class="model-slider">
                                <li data-thumb="assets/images/model-thumb-1.jpg">
                                    <img src="{{ asset($carr->car_image) }}" alt="" />
                                </li>

                            </ul>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>



@endsection
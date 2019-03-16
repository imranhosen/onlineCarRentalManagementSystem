@extends('front.master')
@section('content')
    <div class="men">
        <div class="container">
            <div class="col-md-12 register">
                <h3 class="text-center text-success">Welcome {{ Session::get('customerName') }}. You have to give us car booking info to complete your  valuable booking. Thanks.</h3>
                <hr/>
                {{--<h1>{{ Session::get('message') }}</h1>--}}
            </div>



                {{--<th>{{ $carr->car_name }}</th>--}}




                <!-- // order-details-form  -->
                <form action="{{ url('/new-order') }}"  class="order-details-form" method="post" >
                    {{ csrf_field() }}
                    <div class="inner-form">

                        <h3>Booking Form</h3>
                        <div class="inner-form__elements">
                            <div class="inner-half">
                                <h5>New Reservation</h5>
                                <div class="location">
                                    <input type="text" name="location" placeholder="Your pickup location">
                                    <i class="icon-placeholder-for-map"></i>
                                </div>
                                {{--<div class="text-element stop-location">--}}
                                    {{--<a href="#" class="add" id="add-stop"><i class="icon-plus-black-symbol"></i> <span>Click here to add a stop</span></a>--}}
                                    {{--<a href="#" class="link-right">airports</a>--}}
                                {{--</div>--}}
                                <div class="location-drop-off">
                                    <input type="text" name="location_drop_off" placeholder="Enter drop-off location">
                                    <i class="icon-placeholder-for-map"></i>
                                </div>
                                <div class="text-element checkbox-div">
                                    <div class="wishes">
                                        <input type="checkbox" name="option1" value="a1"> I would like the driver to wait and take me back<br>
                                        <input type="checkbox" name="option2" value="a2"> I would like to go by the hours
                                    </div>
                                    {{--<a href="#" class="link-right">airports</a>--}}
                                </div>

                                <div class="inner-half__width">
                                    <div class="input-date">
                                        <input type="text" name="input_date" placeholder="Pick-up date">
                                        <i class="icon-calendar-with-a-clock-time-tools"></i>
                                    </div>
                                    <div class="input-time">
                                        <input type="text" name="input_time" placeholder="Pick-up time">
                                        <i class="icon-clock"></i>
                                    </div>
                                </div>
                                <div class="inner-half__width">
                                    <div class="input-date">
                                        <input type="text" name="input_date_2" placeholder="Drop-off date">
                                        <i class="icon-calendar-with-a-clock-time-tools"></i>
                                    </div>
                                    <div class="input-time">
                                        <input type="text" name="input_time_2" placeholder="Drop-off time">
                                        <i class="icon-clock"></i>
                                    </div>
                                </div>

                                <div class="select-vehicle">
                                    <label>Car Name</label>
                                    <select name="select_vehicle">
                                        @foreach($cardetails as $carr)
                                        <option value="{{ $carr->car_name }}">{{ $carr->car_name }}</option>
                                        @endforeach
                                        {{--<option value="2">2</option>--}}
                                        {{--<option value="3">3</option>--}}
                                        {{--<option value="4">4</option>--}}
                                    </select>
                                </div>

                                <div class="select-service">
                                    <label>Service Name</label>
                                    <select name="select_service">
                                        <option>--Select Service Name--</option>
                                        @foreach($services as $service)
                                        <option value="{{ $service->service_name }}">{{ $service->service_name }}</option>
                                        @endforeach
                                        <option value="none">None</option>
                                    </select>
                                </div>
                                <div class="select-driver">
                                    <label>Driver Name</label>
                                    <select name="select_driver">
                                        <option>--Select Driver Name--</option>
                                        @foreach($drivers as $driver)
                                            <option value="{{ $driver->driver_name }}">{{ $driver->driver_name }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="passengers-luggage">
                                    <div class="passengers">
                                        <span>Passengers*</span>
                                        <select name="passengers">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                    <div class="luggage">
                                        <span>Luggage*</span>
                                        <select name="luggage">
                                            <option value="0">0</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                    <div class="carseat">
                                        <span></span>
                                        <input type="checkbox" name="carseat" value="a2"> Car Seat
                                    </div>
                                </div>
                            </div>
                            <div class="inner-half">
                            <h5>Passenger's Contact Info</h5>
                            <div class="inner-half__width">
                            <div class="first-name">
                            <input type="text" name="first_name" placeholder="First Name*">
                            </div>
                            <div class="last-name">
                            <input type="text" name="last_name" placeholder="Last Name*">
                            </div>
                            </div>

                            <div class="inner-half__width">
                            <div class="your-phone">
                            <input type="number" name="mobile_number" placeholder="Your phone">
                            </div>
                            <div class="email">
                            <input type="email" name="email" placeholder="E-mail">
                            </div>
                            </div>
                            <div class="specialreguests">
                            <textarea name="specialreguests" placeholder="Special Requests"></textarea>
                            <span class="textarea-text">(Maximum characters: 250. You have 250 characters left)</span>
                            </div>
                            {{--<div class="payment">--}}
                            {{--<span>Payment</span>--}}
                            {{--<select name="your-phone">--}}
                            {{--<option value="Pay with Cash">Pay with Cash</option>--}}
                            {{--<option value="PayPal">PayPal</option>--}}
                            {{--<option value="1">1</option>--}}
                            {{--<option value="2">2</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            </div>
                        </div>

                            <input type="submit" value="Save Booking Info" class="btn btn-success btn-block">

                        {{--<button type="submit" class="btn">CONTINUE</button>--}}
                    </div>
                </form>


                <!-- // order-details-form  -->


        </div>
    </div>
@endsection
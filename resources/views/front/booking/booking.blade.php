@extends('front.master')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-2">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                <h1 class="panel-title ">Welcome to booking process. You have to login to complete your valuable booking. If you are not registered then please register first. Thanks.</h1>
                <hr/>
                <h1>{{ Session::get('message') }}</h1>
            </div>

            <div class="panel-body">
                <form role="form" action="{{ url('/customer-login') }}" method="POST">
                    {{ csrf_field() }}
                    <fieldset>
                    <div class="register-top-grid">
                        <h3 class="text-center text-info"><u>Login Form Here</u></h3>
                        <div>
                            <span class="text-success text-block text-primary">Email Address<label>*</label></span>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div>
                            <span class="text-success text-block text-primary">Password<label>*</label></span>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <br/>
                        <div class="col-xs-6">

                            <a><input type="submit" value="Login" class="btn btn-success btn-block btn-flat"></a>

                            <br/>
                            <br/>

                            <a href="{{url('/booking-register')}}" class="btn btn-success btn-block btn-flat"> <h8 class="text-white">Register </h8></a>

                        </div>
                        <div class="clearfix"> </div>
                    </div>
                        </fieldset>
                </form>
            </div>
                </div>
            </div>
        </div>
        </div>
            <br/>
            <hr/>
            <br/>
            {{--<div class="col-md-12 register">--}}
                {{--<br/><br/>--}}
                {{--<form action="{{ url('/new-customer') }}" method="POST">--}}
                    {{--{{ csrf_field() }}--}}
                    {{--<div class="register-top-grid">--}}
                        {{--<h1 class="text-center">Registration From Here</h1>--}}
                        {{--<br/><br/><br/>--}}
                        {{--<div>--}}
                            {{--<span>First Name<label>*</label></span>--}}
                            {{--<input type="text" name="first_name" class="form-control">--}}
                            {{--<span>{{ $errors->has('first_name') ? $errors->first('first_name') : ' ' }}</span>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<span>Last Name<label>*</label></span>--}}
                            {{--<input type="text" name="last_name" class="form-control">--}}
                            {{--<span>{{ $errors->has('last_name') ? $errors->first('last_name') : ' ' }}</span>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<span>Email Address<label>*</label></span>--}}
                            {{--<input type="email" name="email" class="form-control">--}}
                            {{--<span>{{ $errors->has('email') ? $errors->first('email') : ' ' }}</span>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<span>Password<label>*</label></span>--}}
                            {{--<input type="password" name="password" class="form-control">--}}
                            {{--<span>{{ $errors->has('password') ? $errors->first('password') : ' ' }}</span>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<span>Phone Number<label>*</label></span>--}}
                            {{--<input type="number" name="phone_number" class="form-control">--}}
                            {{--<span>{{ $errors->has('phone_number') ? $errors->first('phone_number') : ' ' }}</span>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<span>Address<label>*</label></span>--}}
                            {{--<textarea name="address" class="form-control"></textarea>--}}
                            {{--<span>{{ $errors->has('address') ? $errors->first('address') : ' ' }}</span>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<input type="submit" value="Register" class="btn btn-success">--}}
                            {{--<div class="clearfix"> </div>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix"> </div>--}}
                    {{--</div>--}}
                {{--</form>--}}
                {{--<div class="clearfix"> </div>--}}
            {{--</div>--}}


@endsection
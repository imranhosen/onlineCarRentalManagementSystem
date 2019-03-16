@extends('front.master')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-7 col-md-offset-2">
    <div class="panel-body">

    <form role="form" action="{{ url('/new-customer') }}" method="POST">
    {{ csrf_field() }}
        <fieldset>
    <div class="register-top-grid">
        <h3 class="text-center text-info"><u>Registration From Here</u></h3>
    <br/><br/><br/>
    <div>
    <span class="text-success text-block text-primary">First Name<label>*</label></span>
    <input type="text" name="first_name" class="form-control">
    <span>{{ $errors->has('first_name') ? $errors->first('first_name') : ' ' }}</span>
    </div>
    <div>
    <span class="text-success text-block text-primary">Last Name<label>*</label></span>
    <input type="text" name="last_name" class="form-control">
    <span>{{ $errors->has('last_name') ? $errors->first('last_name') : ' ' }}</span>
    </div>
    <div>
    <span class="text-success text-block text-primary">Email Address<label>*</label></span>
    <input type="email" name="email" class="form-control">
    <span>{{ $errors->has('email') ? $errors->first('email') : ' ' }}</span>
    </div>
    <div>
    <span class="text-success text-block text-primary">Password<label>*</label></span>
    <input type="password" name="password" class="form-control">
    <span>{{ $errors->has('password') ? $errors->first('password') : ' ' }}</span>
    </div>
    <div>
    <span class="text-success text-block text-primary">Phone Number<label>*</label></span>
    <input type="number" name="phone_number" class="form-control">
    <span>{{ $errors->has('phone_number') ? $errors->first('phone_number') : ' ' }}</span>
    </div>
    <div>
    <span class="text-success text-block text-primary">Address<label>*</label></span>
    <textarea name="address" class="form-control"></textarea>
    <span>{{ $errors->has('address') ? $errors->first('address') : ' ' }}</span>
    </div>
        <br/>
    <div>
    <input type="submit" value="Register" class="btn btn-success">
    <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
    </div>
        </fieldset>
    </form>
    <div class="clearfix"> </div>
    </div>
            </div>
        </div>
    </div>


@endsection
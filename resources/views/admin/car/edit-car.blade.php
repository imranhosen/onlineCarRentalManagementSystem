@extends('admin.master')
@section('content-top-title')
    Edit Car
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="well">
                @if($message=Session::get('message'))
                    <h2 class="text-center text-success">{{$message}}</h2>
                @endif
                <br>
                <form class="form-horizontal" action="{{url('/car/update-car')}}" method="POST" name="editCarForm">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label class="col-sm-3">Car Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="car_name" class="form-control" value="{{$car->car_name}}">
                            <input type="hidden" name="car_id" class="form-control" value="{{$car->id}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Car Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="car_description">{{$car->car_description}}</textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3">Publication Status</label>
                        <div class="col-sm-9">

                            <select class="form-control" name="publication_status">
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>


                        </div>
                    </div>


                    <div class="form-group">

                        <div class="col-sm-9 col-sm-offset-3">
                            <input type="submit" name="btn" class="btn btn-primary btn-block" value="Update Car Info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.forms['editCarForm'].elements['publication_status'].value='{{$car->publication_status}}';
    </script>
@endsection
@extends('admin.master')
@section('content-top-title')
    Edit Driver
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="well">
                @if($message=Session::get('message'))
                    <h2 class="text-center text-success">{{$message}}</h2>
                @endif
                <br>
                <form class="form-horizontal" action="{{url('/driver/update-driver')}}" method="POST" name="editDriverForm">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label class="col-sm-3">Driver Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="driver_name" class="form-control" value="{{$driver->driver_name}}">
                            <input type="hidden" name="driver_id" class="form-control" value="{{$driver->id}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">Drive Type</label>
                        <div class="col-sm-9">
                            <input type="text" name="driver_type" class="form-control" value="{{$driver->driver_type}}">
                            {{--<input type="hidden" name="driver_id" class="form-control" value="{{$driver->id}}">--}}
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-sm-3">Driver Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="driver_description">{{$driver->driver_description}}</textarea>
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
                            <input type="submit" name="btn" class="btn btn-primary btn-block" value="Update Driver Info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.forms['editDriverForm'].elements['publication_status'].value='{{$driver->publication_status}}';
    </script>
@endsection
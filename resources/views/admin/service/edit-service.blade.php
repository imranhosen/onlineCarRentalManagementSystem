@extends('admin.master')
@section('content-top-title')
    Edit Service
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="well">
                @if($message=Session::get('message'))
                    <h2 class="text-center text-success">{{$message}}</h2>
                @endif
                <br>
                <form class="form-horizontal" action="{{url('/service/update-service')}}" method="POST" name="editServiceForm">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label class="col-sm-3">Service Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="service_name" class="form-control" value="{{$service->service_name}}">
                            <input type="hidden" name="service_id" class="form-control" value="{{$service->id}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Service Short Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="service_short_description">{{$service->service_short_description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">Service Long Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="service_long_description">{{$service->service_long_description}}</textarea>
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
                            <input type="submit" name="btn" class="btn btn-primary btn-block" value="Update Service Info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.forms['editServiceForm'].elements['publication_status'].value='{{$service->publication_status}}';
    </script>
@endsection
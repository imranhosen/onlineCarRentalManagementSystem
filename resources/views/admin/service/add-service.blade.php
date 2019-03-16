@extends('admin.master')

@section('content')

</br>
<div class="row">
    <div class="col-sm-12">
        <div class="well">

            @if($message = Session::get('message'))
                <h2 class="text-center text-success">{{ $message }}</h2>
            @endif

            <form  class="form-horizontal" action="{{url('/service/new-service')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-sm-3">Service Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="service_name" class="form-control"/>
                    </div>

                </div>

                <div class="form-group">
                    <label class="col-sm-3">Service Short Description</label>
                    <div class="col-sm-9">
                        <textarea name="service_short_description" class="form-control"></textarea>
                    </div>

                </div>

                <div class="form-group">
                    <label class="col-sm-3">Service Long Description</label>
                    <div class="col-sm-9">
                        <textarea name="service_long_description" class="form-control"></textarea>
                    </div>

                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3">Car Image</label>
                    <div class="col-sm-9">
                        <input type="file" name="car_image" accept="image/*"/>
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
                        <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Service Info "/>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

</div>

@endsection
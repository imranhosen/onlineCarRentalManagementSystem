@extends('admin.master')

@section('content')

</br>
<div class="row">
    <div class="col-sm-12">
        <div class="well">

            @if($message = Session::get('message'))
                <h2 class="text-center text-success">{{ $message }}</h2>
            @endif

            <form  class="form-horizontal" action="{{url('/driver/new-driver')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-sm-3">Driver Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="driver_name" class="form-control"/>
                    </div>

                </div>

                <div class="form-group">
                    <label class="col-sm-3">Driver Type</label>
                    <div class="col-sm-9">
                        <input type="text" name="driver_type" class="form-control"/>
                    </div>

                </div>

                <div class="form-group">
                    <label class="col-sm-3">Driver Description</label>
                    <div class="col-sm-9">
                        <textarea name="driver_description" class="form-control"></textarea>
                    </div>

                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3">Driver Image</label>
                    <div class="col-sm-9">
                        <input type="file" name="driver_image" accept="image/*"/>
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
                        <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Driver Info "/>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

</div>

@endsection
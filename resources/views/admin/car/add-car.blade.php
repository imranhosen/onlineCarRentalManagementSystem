@extends('admin.master')
@section('content-top-title')
    Add Car
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="well">
                @if($message=Session::get('message'))
                    <h2 class="text-center text-success">{{$message}}</h2>
                @endif
                <br>
                <form class="form-horizontal" action="{{url('/car/add-car')}}" method="POST" enctype="multipart/form-data">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label class="col-sm-3">Car Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="car_name" class="form-control">
                            <input type="hidden" name="author_name" class="form-control" value="{{ Auth::user()->name }}">
                            {{--<span class="text-danger">{{$errors->has('blog_title') ? $errors->first('blog_title') : ''}}</span>--}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3">Category Name</label>
                        <div class="col-sm-9">
                            <select name="category_id" class="form-control">
                                <option>--Select Category Name--</option>
                                @foreach($publicationCategories as $publishedCategory)
                                    <option value="{{$publishedCategory->id}}">{{$publishedCategory->category_name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Car Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="car_description"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3">Car Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="car_image" accept="image/*"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3">Car Price</label>
                        <div class="col-sm-9">
                            <input type="number" name="car_price" class="form-control"/>
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
                            <input type="submit" name="btn" class="btn btn-primary btn-block" value="Save Car Info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
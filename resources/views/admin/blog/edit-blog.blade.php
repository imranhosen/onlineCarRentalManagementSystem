@extends('admin.master')
@section('content-top-title')
    Edit Blog
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="well">
                @if($message=Session::get('message'))
                    <h2 class="text-center text-success">{{$message}}</h2>
                @endif
                <br>
                <form class="form-horizontal" action="{{url('/blog/update-blog')}}" method="POST" name="editBlogForm">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label class="col-sm-3">Blog Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="blog_name" class="form-control" value="{{$blog->blog_name}}">
                            <input type="hidden" name="blog_id" class="form-control" value="{{$blog->id}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">Blog Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="blog_title" class="form-control" value="{{$blog->blog_title}}">

                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-sm-3">Blog Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="blog_description">{{$blog->blog_description}}</textarea>
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
                            <input type="submit" name="btn" class="btn btn-primary btn-block" value="Update Category Info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.forms['editBlogForm'].elements['publication_status'].value='{{$blog->publication_status}}';
    </script>
@endsection
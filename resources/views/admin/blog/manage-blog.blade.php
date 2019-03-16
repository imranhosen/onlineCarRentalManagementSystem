@extends('admin.master')

@section('title')
    Manage Blog
@endsection

@section('content-top-title')
    In Manage Blog
@endsection

@section('content')
    @if($message = Session::get('message'))
        <h3 class="text-center text-success">{{ $message }}</h3>
    @endif
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover text-center">
                    <tr class="text-info">
                        <th>Sl No</th>
                        <th>Blog Title</th>
                        <th>Author Name</th>
                        <th>Category Name</th>
                        <th>Blog Description</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    <?php $i = 1; ?>
                    @foreach($blogInfo as $blog)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $blog->blog_title }}</td>
                            <td>{{ $blog->author_name }}</td>
                            <td>{{ $blog->category_name }}</td>
                            <td>{{ $blog->blog_description }}</td>
                            <td>{{ $blog->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                            <td width="130px">
                                @if($blog->publication_status == 1)
                                    <a href="{{ url('/blog/unpublished-blog/'.$blog->id) }}" class="btn btn-success btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                @else
                                    <a href="{{ url('/blog/published-blog/'.$blog->id) }}" class="btn btn-warning btn-xs" title="Unpublished">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                @endif
                                <a href="{{ url('/blog/edit-blog/'.$blog->id) }}" class="btn btn-info btn-xs block" title="Edit">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{ url('/blog/delete-blog/'.$blog->id) }}" onclick="return confirm('Are you sure to delete this !!!');" class="btn btn-danger btn-xs" title="Delete">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
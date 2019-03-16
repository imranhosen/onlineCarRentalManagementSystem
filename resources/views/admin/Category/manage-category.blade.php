@extends('admin.master')
@section('content')
    <hr/>

    @if($message = Session::get('message'))
        <h2>{{ $message }}</h2>

    @endif
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Category Status</th>
                        <th>Action</th>

                    </tr>
                    @foreach($categories as $category)

                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>{{ $category->category_description }}</td>
                            <td>{{ $category->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td>
                                @if($category->publication_status == 1)
                                    <a href="{{ url('/Category/unpublished-category/'.$category->id) }}" class="btn btn-info btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>

                                @else
                                    <a href="{{ url('/Category/published-category/'.$category->id) }}" class="btn btn-warning btn-xs" title="Unpublished">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                @endif

                                <a href="{{ url('/Category/edit-category/'.$category->id) }}" class="btn btn-primary btn-xs" title="Edit">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>

                                <a href="{{ url('/Category/delete-category/'.$category->id) }}" onclick="return confirm('Are you sure to delete  it?')" class="btn btn-danger btn-xs" title="Delete">
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
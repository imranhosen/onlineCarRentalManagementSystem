@extends('admin.master')

@section('title')
    Manage Comment
@endsection

@section('content-top-title')
    In Manage Comment
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
                        <th>Comentator Name</th>
                        <th>Comentator Email</th>
                        <th>Comentator Comment</th>
                        <th>Action</th>
                    </tr>

                    <?php $i = 1; ?>
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $comment->comentator_name }}</td>
                            <td>{{ $comment->comentator_email }}</td>
                            <td>{{ $comment->comentator_comment }}</td>
                            {{--<td>{{ $driver->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>--}}
                            <td width="130px">
                                <a href="{{ url('/comment/delete-comment/'.$comment->id) }}" onclick="return confirm('Are you sure to delete this !!!');" class="btn btn-danger btn-xs" title="Delete">
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
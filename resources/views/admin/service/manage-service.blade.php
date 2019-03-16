@extends('admin.master')

@section('title')
    Manage Service
@endsection

@section('content-top-title')
    In Manage Service
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
                        <th>Service Name</th>
                        <th>Service Short Description</th>
                        <th>Service Long Description</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    <?php $i = 1; ?>
                    @foreach($serviceInfo as $service)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $service->service_name }}</td>
                            <td>{{ $service->service_short_description }}</td>
                            <td>{{ $service->service_long_description }}</td>
                            <td>{{ $service->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                            <td width="130px">
                                @if($service->publication_status == 1)
                                    <a href="{{ url('/service/unpublished-service/'.$service->id) }}" class="btn btn-success btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                @else
                                    <a href="{{ url('/service/published-service/'.$service->id) }}" class="btn btn-warning btn-xs" title="Unpublished">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                @endif
                                <a href="{{ url('/service/edit-service/'.$service->id) }}" class="btn btn-info btn-xs block" title="Edit">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{ url('/service/delete-service/'.$service->id) }}" onclick="return confirm('Are you sure to delete this !!!');" class="btn btn-danger btn-xs" title="Delete">
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
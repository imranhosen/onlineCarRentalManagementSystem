@extends('admin.master')

@section('title')
    Manage Driver
@endsection

@section('content-top-title')
    In Manage Driver
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
                        <th>Driver Name</th>
                        <th>Driver Type</th>
                        <th>Driver Description</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    <?php $i = 1; ?>
                    @foreach($driverInfo as $driver)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $driver->driver_name }}</td>
                            <td>{{ $driver->driver_type }}</td>
                            <td>{{ $driver->driver_description }}</td>
                            <td>{{ $driver->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                            <td width="130px">
                                @if($driver->publication_status == 1)
                                    <a href="{{ url('/driver/unpublished-driver/'.$driver->id) }}" class="btn btn-success btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                @else
                                    <a href="{{ url('/driver/published-driver/'.$driver->id) }}" class="btn btn-warning btn-xs" title="Unpublished">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                @endif
                                <a href="{{ url('/driver/edit-driver/'.$driver->id) }}" class="btn btn-info btn-xs block" title="Edit">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{ url('/driver/delete-driver/'.$driver->id) }}" onclick="return confirm('Are you sure to delete this !!!');" class="btn btn-danger btn-xs" title="Delete">
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
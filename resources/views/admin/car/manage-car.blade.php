@extends('admin.master')

@section('title')
    Manage Car
@endsection

@section('content-top-title')
    In Manage Car
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
                        <th>Car Name</th>
                        <th>Author Name</th>
                        <th>Category Name</th>
                        <th>Car Description</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    <?php $i = 1; ?>
                    @foreach($carInfo as $car)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $car->car_name }}</td>
                            <td>{{ $car->author_name }}</td>
                            <td>{{ $car->category_name }}</td>
                            <td>{{ $car->car_description }}</td>
                            <td>{{ $car->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                            <td width="130px">
                                @if($car->publication_status == 1)
                                    <a href="{{ url('/car/unpublished-car/'.$car->id) }}" class="btn btn-success btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                @else
                                    <a href="{{ url('/car/published-car/'.$car->id) }}" class="btn btn-warning btn-xs" title="Unpublished">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                @endif
                                <a href="{{ url('/car/edit-car/'.$car->id) }}" class="btn btn-info btn-xs block" title="Edit">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{ url('/car/delete-car/'.$car->id) }}" onclick="return confirm('Are you sure to delete this !!!');" class="btn btn-danger btn-xs" title="Delete">
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
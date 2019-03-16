@extends('admin.master')

@section('title')
    Manage Order
@endsection

@section('content-top-title')
    In Manage Order
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
                        <th>Pick Up Location</th>
                        <th>Drop Off Location</th>
                        <th>Pick Up Date and Time</th>
                        <th>Drop Off Date and Time</th>
                        <th>Car Name</th>
                        <th>Service Name</th>
                        <th>Driver Name</th>
                        <th>Total Passeger</th>
                        <th>Total Luggage</th>
                        <th>Mobile Number</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>

                    <?php $i = 1; ?>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $order->location }}</td>
                            <td>{{ $order->location_drop_off }}</td>
                            <td>{{ $order->input_date }}/{{ $order->input_time }}</td>
                            <td>{{ $order->input_date_2 }}/{{ $order->input_time_2 }}</td>
                            <td>{{ $order->select_vehicle }}</td>
                            <td>{{ $order->select_service }}</td>
                            <td>{{ $order->select_driver }}</td>
                            <td>{{ $order->passengers }}</td>
                            <td>{{ $order->luggage }}</td>
                            <td>{{ $order->mobile_number }}</td>
                            <td>{{ $order->email }}</td>
                            {{--<td>{{ $driver->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>--}}
                            <td width="130px">
                                {{--@if($driver->publication_status == 1)--}}
                                    {{--<a href="{{ url('/driver/unpublished-driver/'.$driver->id) }}" class="btn btn-success btn-xs" title="Published">--}}
                                        {{--<span class="glyphicon glyphicon-arrow-up"></span>--}}
                                    {{--</a>--}}
                                {{--@else--}}
                                    {{--<a href="{{ url('/driver/published-driver/'.$driver->id) }}" class="btn btn-warning btn-xs" title="Unpublished">--}}
                                        {{--<span class="glyphicon glyphicon-arrow-down"></span>--}}
                                    {{--</a>--}}
                                {{--@endif--}}
                                {{--<a href="{{ url('/driver/edit-driver/'.$driver->id) }}" class="btn btn-info btn-xs block" title="Edit">--}}
                                    {{--<span class="glyphicon glyphicon-edit"></span>--}}
                                {{--</a>--}}
                                <a href="{{ url('/order/delete-order/'.$order->id) }}" onclick="return confirm('Are you sure to delete this !!!');" class="btn btn-danger btn-xs" title="Delete">
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
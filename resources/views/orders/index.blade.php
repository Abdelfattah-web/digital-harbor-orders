@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center orders-form">
        <div class="col-md-12">
            <h2>Create New Order</h2>
            <hr>
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form method="POST" action="{{ route('orders.store') }}" >
                <!-- CSRF Field -->
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Order Name</label>
                    <input type="text" name="order_name" class="form-control" placeholder="Enter order name">
                </div>
                <div class="form-group">
                    <label >Select Status:</label>
                    <!-- store category id -->
                    <select name="statu_id" class="form-control">
                        @foreach ($status as $statu)
                            <option value="{{$statu->id}}"
                            {{ $statu->statu_id == $statu->id ? 'selected' : ''}}
                            >
                            {{$statu->name}}
                            </option>
                        @endforeach
                    </select>
                </div> 
                <button type="submit" class="btn btn-primary">Save order</button>
            </form>
            
        </div>
    </div>
    <hr>
    <div class="row table-orders">
        <div class="col-md-12">
            <table class="table table-bordered ">
                <thead class="table-primary ">
                    <tr>
                    <th scope="col">Order Name</th>
                    <th scope="col">Order Status</th>
                    <th scope="col">Order Date</th>
                    </tr>
                </thead>
                <tbody class="bg-white text-dark ">
                @if(count($orders) > 0)
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->order_name}}</td>
                        <td>{{$order->status->name}}</td>
                        <td>{{ date('d.m.Y', strtotime($order->created_at)) }}</td>
                    </tr>
                    @endforeach
                            @else
                            <tr>
                                <td colspan="4" class="text-center">No Orders at the moment.</td>
                            </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
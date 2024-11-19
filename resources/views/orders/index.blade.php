@extends('layouts.app')
@section('title','Orders')
@section('content')
    <div class="table-area">
        <div style="display: flex;">
        <form method="GET" action="{{ route('orders.index') }}">
            <input type="text" name="customer_name" placeholder="Search by customer name" value="{{ request('customer_name') }}">
            <select name="status" aria-placeholder="saas">
                <option hidden value="">not selected</option>
                <option 
                @if(request('status') =="0")
                    selected="selected"
                @endif
                value="0">Pending</option>
                <option 
                @if(request('status') =="1")
                    selected="selected"
                @endif
                value="1">In Progress</option>
                <option 
                @if(request('status') =="2")
                    selected="selected"
                @endif
                value="2">Completed</option>
            </select>
            <button type="submit">Filter</button>
            
    </form>    
    <a href="{{route('orders.index')}}"><button>Reset</button></a>

        </div>
    

    <table class="responsive-table table">
        <thead>
            <tr>
                <th>Order Number</th>
                <th>Customer Name</th>
                <th>Restaurant Name</th>
                <th>Driver Name</th>
                <th>Customer Rank</th>
                <th>Order Creation Time</th>
                <th>Order Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->customer->name }}</td>
                <td>{{ $order->restaurant->name }}</td>
                <td>{{ $order->driver->name ?? 'Unassigned' }}</td>
                <td>{{ $order->customer->order_no }}</td>
                <td>{{ $order->created_at }}</td>
                <td>{{ $order->price }}</td>
                <td>
                    <form method="POST" action="{{route('orders.assign',$order->id)}}">
                        @csrf
                        <button type="submit">Assign Driver</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
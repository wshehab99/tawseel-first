@extends('layouts.app')
@section('title','Stores')
@section('content')

    <a href="{{route('stores.create')}}">New store</a>

    <table class="responsive-table table">
        <thead>
            <tr>
                <th>Store Number</th>
                <th>Store Name</th>
                <th>Store Reservation Status</th>
                <th>Store Reservation Method</th>
                <th>Store Requires Products</th>
                <th>Store Activity Status</th>
                <th>Store Payment Method</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stores as $store)
            <tr>
                <td>{{ $store->id }}</td>
                <td>{{ $store->name }}</td>
                <td>{{ $store->reservation_status }}</td>
                <td>{{ $store->reservation_method }}</td>
                <td>{{ $store->requires_products }}</td>
                <td>{{ $store->activity_status }}</td>
                <td>{{ $store->store_payment_method }}</td>
                <td>
                    <a href="{{route('stores.edit',$store->id)}}">Edit</a>

                </td>
                <td>
                    <form action="{{route('stores.destroy',$store->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Delete</button>

                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
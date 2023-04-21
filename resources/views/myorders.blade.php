@extends('master')
@section('content')
    <div class="container-fluid cart_row">
        <div class="col-sm-12">
            <h3 class="text-center">My Orders</h3>
            
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Order Status</th>
                    <th>Payment Method</th>
                    <th>Payment Status</th>                    
                    <th>Address</th>
                </thead>
                <tbody>
                    @foreach ($myOrders as $item)
                        <div class="searched-item">
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <a href="details/{{$item->product_id}}">
                                        <img class="cart-image" src="{{ $item->gallery }}" alt="">
                                    </a>
                                </td>
                                <td>{{ $item->price }}</td>
                                <td>{{$item->status}} </td>
                                <td>{{$item->payment_method}}</td>
                                <td>{{$item->payment_status}}</td>                                
                                <td>{{$item->address}} </td>
                            </tr>
                        </div>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
@endsection

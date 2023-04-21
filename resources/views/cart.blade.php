@extends('master')
@section('content')
    <div class="container-fluid cart_row">
        <div class="col-sm-2">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-10">
            <h3 class="text-center">Cart Items</h3>
            
            <table class="table">
                <tbody>
                    @foreach ($productData as $item)
                        <div class="searched-item">
                            <tr>
                                <td scope="row"></td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <a href="details/{{$item->product_id}}">
                                        <img class="cart-image" src="{{ $item->gallery }}" alt="">
                                    </a>
                                </td>
                                <td>{{ $item->price }}</td>
                                <div>
                                    <td><a href="/removecart/{{ $item->cart_id }}" class="btn btn-danger">Remove to Cart</a>
                                    </td>
                                </div>
                            </tr>
                        </div>
                    @endforeach
                </tbody>
            </table>
            <a href="ordernow" class="btn btn-success">Order Now</a>
        </div>
    </div>
@endsection

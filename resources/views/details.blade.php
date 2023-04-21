@extends('master')
@section('content')
<a href="/" class="btn btn-danger">Go Back</a>
<div class="container-fluid detailsContainer">
    <div class="row imagecolumn">
        
        <div class="col-sm-6 ">
            <img class="detailsimg" src="{{$productDetails['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <h2>{{$productDetails['name']}}</h2>
            <h3>Price : {{$productDetails['price']}} </h3>
            <h6>Details : {{$productDetails['description']}} </h6>
            <h6>Catagory : {{$productDetails['category']}} </h6>
            <div class="link">
                <form action="/add_to_cart" method="get">
                    <input type="hidden" name="product_id" value="{{$productDetails['product_id']}}">
                    <button class="btn btn-primary">Add to Cart</button>
                </form>                
                
                <a href="" class="btn btn-success">Buy Now</a>
            </div>
        </div>
    </div>
</div>
    
@endsection
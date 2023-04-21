@extends('master')
@section('content')
    <div class="custom_carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @foreach ($product as $item)
                    <div class="carousel-item {{ $item['product_id'] == 1 ? 'active' : '' }}">
                        <a href="{{ url('/details') }}/{{ $item['product_id'] }}">
                            <img class="d-block " src="{{ $item['gallery'] }}" alt="First slide">
                        </a>
                        <div class="carousel-caption">
                            <h3>{{ $item['name'] }}</h3>
                            <p>{{ $item['description'] }} </p>
                        </div>
                    </div>
                @endforeach

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="">
        <h3 class="text-center">Tranding Products</h3>
        <div class="">
            <div class="tranding_image_flex">
                <div class="owl-carousel owl-theme">
                    @foreach ($product as $item)
                        <div class="item card custom-card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ $item['gallery'] }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $item['name'] }}</h5>
                                <div class="card_button">
                                    <a href="{{ url('/details') }}/{{ $item['product_id'] }}"
                                        class="btn btn-primary">Details</a>
                                    <a href="#" class="btn btn-primary">Add Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        });
    </script>
@endsection

<?php 
    use App\Http\Controllers\ProductController;
    $totalCartProduct = 0;
    if(Session::has('user')){
        $totalCartProduct = ProductController::cartItem();
    }
    
?>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="/">E-Comm</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/myorders">Orders</a>
            </li>
            
            
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
                @if (session()->has('user'))
                    <a href="/cart" class="nav-link">Cart({{$totalCartProduct}})</a>
                @else
                <a href="/login" class="nav-link">Cart(0)</a>
                @endif
                
            </li>
            <li class="nav-item">
                
            </li>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> @if (Session::has('user'))
                            {{Session::get('user')['name']}}
                        @else
                            Guest
                        @endif </button>
                <div class="dropdown-menu custome_dropdown">
                    @if (Session::has('user'))
                        <a class=" dropdown-item" href="{{url('/logout')}}">Logout</a>
                    @else
                        <a class=" dropdown-item" href="{{url('/login')}}">Login</a>
                    @endif
                                       
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">After divider</a>
                </div>
            </div>
        </ul>
    </div>
</nav>
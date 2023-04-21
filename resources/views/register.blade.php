@extends('master')
@section('content')
<div class="container custome-login">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center">User Register </h2>
            <form action="{{url('/register')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">User Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name" >
                    <span class="text-danger">@error('name') {{$message}} @enderror</span>           
                  </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" name="email" class="form-control" placeholder="Enter Your Email" > 
                  <span class="text-danger">@error('email') {{$message}} @enderror</span>                 
                </div>
                <div class="form-group">
                    <label for="">Mobile Number</label>
                    <input type="phone" name="mobile" class="form-control" placeholder="Enter Phone Number" >
                    <span class="text-danger">@error('mobile') {{$message}} @enderror</span>                  
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="*******" >   
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>               
                </div>
                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" placeholder="*******">
                    <span class="text-danger">@error('confirm_password') {{$message}} @enderror</span>                  
                </div>
                <button type="submit" class="btn btn-success form-control">Register</button><br><br>
                
            </form>
            <a href="{{url('/login')}}"><button class="btn btn-primary form-control">Login</button></a>
        </div>
    </div>
</div>
@endsection
@extends('master')
@section('content')
    <div class="container custome-login">
        <div class="row">
            <div class="col-sm-12"> 
                <h2 class="text-center">User Login </h2>
                <form action="{{url('/login')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Email ID" value="{{old('email')}}" >
                        <span class="text-danger"> @error('email')  {{$message}} @enderror </span>                  
                      </div>
                      <div class="form-group">
                          <label for="">Password</label>
                          <input type="text" name="password" class="form-control" placeholder="******">  
                          <span class="text-danger"> @error('password')  {{$message}} @enderror </span>                
                      </div>
                      <button type="submit" class="btn btn-success form-control">Login</button><br><br>
                </form>
                <a href="{{url('/')}}/register"><button class="btn btn-primary form-control">Register</button></a>
            </div>
        </div>
    </div>
@endsection
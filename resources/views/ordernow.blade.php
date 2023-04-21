@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Amount</td>
                            <td>{{ $totalPrice }}</td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <td>$ 0</td>
                        </tr>
                        <tr>
                            <td>Delivery</td>
                            <td>$ 20</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>{{ $totalPrice + 20 }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <form action="/payment" method="POST">
            @csrf
            <div class="form-group">
                <textarea type="text" name="address" placeholder="Enter your Full Address" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="">Payment Method</label><br><br>
                <input type="radio" value="online-payment" name="payment"><span>Online Payment</span><br><br>
                <input type="radio" value="cash-on-delivery" name="payment"><span>Cash on Delivery</span><br><br>
                <input type="radio" value="upi-payment" name="payment"><span>UPI Payment</span><br><br>
            </div>
            <button type="submit" class="btn btn-primary">Order Now</button>
        </form>

    </div>
@endsection

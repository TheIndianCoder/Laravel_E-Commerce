<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\Orders;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function index(){

        $data = product::all();


        return view('product',['product'=>$data]);
    }

    public function detailsProduct($id){
        $data = product::find($id);
        return view('details', ['productDetails'=>$data]);
    }

    public function addToCart(Request $request){
        if(session()->has('user')){            
            $cart = new Cart;
            $cart->user_id=$request->session()->get('user')['user_id'];
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect(url('/'));
        }else{
            return redirect('/login');
        }
    }

    static function cartItem(){
        $userId = Session::get('user')['user_id'];
        return Cart::where('user_id',$userId)->count();
    }

    public function showCart(){
        $userId = Session::get('user')['user_id'];
        $product = DB::table('cart')
        ->join('product','cart.product_id','=','product.product_id')
        ->where('cart.user_id',$userId)
        ->select('product.*', 'cart.id as cart_id')
        ->get();

        return view('cart',['productData'=>$product]);

    }

    public function removeCart($id){
        Cart::destroy($id);
        return redirect('cart');
    }

    public function orderNow(){
        $userId = Session::get('user')['user_id'];
        $total =  $product = DB::table('cart')
        ->join('product','cart.product_id','=','product.product_id')
        ->where('cart.user_id',$userId)
        ->select('product.*', 'cart.id as cart_id')
        ->sum('product.price');

        return view('ordernow',['totalPrice'=>$total]);
    }

    public function orderPlaced(Request $request){
        $userId = Session::get('user')['user_id'];
        $cartItem = Cart::where('user_id',$userId)->get();
        foreach($cartItem as $cart){
            $order = new Orders;
            $order->product_id= $cart['product_id'];
            $order->user_id= $cart['user_id'];
            $order -> status = "pending";
            $order -> payment_method = $request->payment;
            $order -> payment_status = "pending";
            $order -> address = $request->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        $request->input();
        return redirect('/');
    }

    public function myOrders(){
        $userId = Session::get('user')['user_id'];
        $orders =  $product = DB::table('orders')
        ->join('product','orders.product_id','=','product.product_id')
        ->where('orders.user_id',$userId)
        ->get();

        return view('myorders',['myOrders'=>$orders]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('login');
    }
    public function userLogin(Request $request){
        $request->validate(
            [
                'email'=>'required',
                'password'=>'required'
            ]
        );
        $password = md5($request->password);
        $user = Users::where(['email'=>$request->email,'password'=>$password])->first();
        
        if($user!=''){
            $request->session()->put('user',$user);
            return redirect(url('/'));
        }else{
            $data = "Login Id or Password invalid";
            return redirect(url('/login'))->with($data);
        }
        // echo "<pre>";
        // print_r($request->all());
    }
    public function register(){
        return view('register');
    }

    public function userRegister(Request $request){

        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'mobile'=>'required',
                'password'=>'required',
                'confirm_password'=>'required'
            ]
        );
        $user = new Users;

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->mobile = $request['mobile'];
        $user->password = md5($request['password']);
        $user->save();

        return redirect(url('/login'));
        // echo "<pre>";
        // print_r($request->all());
    }
    public function logout(){
        session()->forget('user');
        return redirect(url('/login'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function register(){
        return view('user.register');
    }
   
        public function do_register(Request $request){

            $request->validate([
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
       ]);
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>(bcrypt($request->password)),
            ]);
            return redirect()->route('index');
    }
    public function login(){
        return view('login');
    }
    public function do_login(Request $request,){
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
             $request->session()->regenerate();
             return redirect()->route('mai');
        }
       return redirect()->route('login');
    }


    public function mai(){
        return view('user.mai');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function adminlogin(){
        return view('admin.adminlogin');
    }

    public function do_adminlogin(Request $request){
        $credentials = $request->only('email','password');
        if(Auth::guard('admin')->attempt($credentials)){
             $request->session()->regenerate();
             return redirect()->route('admin');
        }
       return redirect()->route('login');
    }

    public function admin(){
        return view('admin.admin');
    }
    public function todoap(){
        return view('admin.todoap');
    }
    public function adminlogout(){
        Auth::guard('admin')->logout();
        return view('index');
    }
  


}

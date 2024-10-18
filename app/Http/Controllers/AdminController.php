<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
 public function LoginForm()
 {
     return view('admin.login_form');
 }

 public function AdminRegisterForm()
 {
     return view('admin.register');

 }

 public function AdminRegister(Request $request)
 {
     Admin::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
         'created_at'=>Carbon::now(),
     ]);

     return redirect()->route('login.form')->with('error','Admin registered, log in.');
 }

 public function AdminLogin(Request $request)
 {
     $check =$request->all();

     if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password'=>$check['password'] ]))

     {
         return redirect()->route('admin.dashboard')->with('success','logged in successfully');
     }

 }


 public function Index()
 {
     return view('admin.index');

 }

 public function AdminLogout(){

    Admin::guard('admin')->logout();
    return redirect()->route('admin.login');
 }

}

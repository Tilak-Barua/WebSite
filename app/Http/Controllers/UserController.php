<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\a2user;
use DB;

class usercontroller extends Controller
{
    //

    public function register()
    {
        return view('admin.pages.register');
    }
    
    public function index()
    {
        $i = a2user::all();
        return view('admin.pages.admin_dash',compact('i'));
    }


    public function store(Request $data)
    {   
        $data -> validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
             ]);

        $s = new a2user;
        $s->name = $data->get('name');
        $s->email = $data->get('email');
        $s->password = $data->get('password'); 
        $s->role = $data->get('role');

        $s->save(); 

        return redirect('dashboard')->with('msg', 'Succesfully Registered');

    }
    
    public function auth(Request $data)
    {

        $uemail=$data->email;
        $upassword=$data->password;
        $user= a2user::where('email', '=' ,$uemail )
       ->where('password', '=',$upassword )
       ->first();
       

       if(!$user)
       {
        return redirect()->back()->with('msg', 'Email or Password Did not match');
       }
       else{
           //make changes here fr multiple user
          $data->Session()->put('username', $user->name );
          $data= Session()->put('useremail', $user->email);
          $data= Session()->put('userrole', $user->role);
          return redirect()->to('/dashboard');
       }
    }


    public function login()
    {
        
        return view('admin.pages.login');
    }
    

    public function img()
    {
        
        return view('admin.pages.uploadImg');
    }



}


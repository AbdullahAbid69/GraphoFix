<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    

    public function login(){
        $data = new Admin();

        $data->username = $req->username;
        $data->password = $req->password;

        

        $username = "admin";
        $password = "admin123";
        $role = 1;

        $user = DB::table('users')
            ->where('name', $username)
            ->where('password', $password)
            ->first();
        
        if($user && Hash::check($role, $user->isAdmin)){
            return view('Backend.Pages.dashboard');
        }
        else{
            return redirect()->back()-with('Error!  !!!  You are not an Admin! !!!');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function home(){
        return view('Frontend/Pages/home');
    }

    public function signup(Request $req){
        $data = new Student();

        $data->name = $req->name;
        $data->email = $req->email;
        $data->pass = $req->pass;
        $data->linkedin = $req->linkedin;

        $data->save();

        return redirect()->back()->with('Account Created! ');
        
    }
}

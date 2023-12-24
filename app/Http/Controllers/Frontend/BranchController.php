<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Branch;
use Illuminate\Support\Str;

class BranchController extends Controller
{
    public function index(Request $req){

        $branch = Branch::all();
        return view('Frontend/Pages/branch', compact('branch'));

    }
}

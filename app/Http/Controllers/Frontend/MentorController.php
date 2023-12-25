<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Mentor;
use Illuminate\Support\Str;

class MentorController extends Controller
{
    public function index()
    {
        $mentors = Mentor::orderBy('full_name', 'asc')->get();
        return view('Frontend.Pages.mentor', compact('mentors'));
    }
}

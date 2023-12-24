<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Course;
use Illuminate\Support\Str;


class CourseController extends Controller
{
    public function store(Request $request)
    {
        $course = new Course();

        $course->english_title              = $request->english_title;
        $course->bangla_title               = $request->bangla_title;
        $course->slug                       = Str::slug($request->english_title);
        $course->intro_video                = $request->intro_video;
        $course->price                      = $request->price;
        $course->bangla_price               = $request->bangla_price;
        $course->graduate_number            = $request->graduate_number;
        $course->total_lecture              = $request->total_lecture;
        $course->class_hour                 = $request->class_hour;
        $course->course_duration            = $request->course_duration;
        $course->motivational_content       = $request->motivational_content;
        $course->course_opportunity         = $request->course_opportunity;
        $course->curriculum_description     = $request->curriculum_description;
        $course->course_requirement         = $request->course_requirement;
        $course->coupon_status              = $request->coupon_status;
        $course->status                     = $request->status;

        if( $request->image )
        {
            $image = $request->file('image');
            $img = rand(). '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/img/course/' . $img);
            Image::make($image)->save($location);
            $course->image = $img;
        }

        $course->save();

        return redirect()->route('course.manage');
    }

    public function index(Request $request){

        $courses = Course::orderBy('english_title', 'asc')->get();
        return view('Frontend.Pages.course', compact('courses'));

        
    }
}

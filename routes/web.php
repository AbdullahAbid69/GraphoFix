<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

    //Routes for Userside frontend

Route::get('/', function () {
    return view('Frontend/Pages/home');
});


Route::post('/send_mail', [mailController::class, 'send_mail'])
->name('send_mail');

// Frontend User side routes:

// Route::group(prefix-> 'student/' [StudentController::class])
Route::get('onlinedigitallearning.com', [StudentController::class, 'home'])->name('onlinedigitallearning.com');
Route::post('signup', [StudentController::class,'signup'])->name('signup');

Route::get('courses/odl.com', [App\Http\Controllers\Frontend\CourseController::class, 'index'])->name('course');

Route::get('branches/odl.com', [App\Http\Controllers\Frontend\BranchController::class, 'index'])->name('branch');

Route::get('mentors/odl.com', [App\Http\Controllers\Frontend\MentorController::class, 'index'])->name('mentor');

Route::get('about/odl.com', function(){
    return view('Frontend.Pages.about');
})->name('about');

Route::get('contact/odl.com', function(){
    return view('Frontend.Pages.contact');
})->name('contact');

Route::group([ 'prefix' => 'admin' ], function(){
    Route::get('odl.com', 'App\Http\Controllers\Backend\DashboardController@dashboard')->name('admin/odl.com');
    // Routes for Branch Management
    Route::group([ 'prefix' => '/branch' ], function(){
        Route::get('/manage', 'App\Http\Controllers\Backend\BranchController@index')->name('branch.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\BranchController@create')->name('branch.create');
        Route::post('/store', 'App\Http\Controllers\Backend\BranchController@store')->name('branch.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\BranchController@edit')->name('branch.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\BranchController@update')->name('branch.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\BranchController@destroy')->name('branch.destroy');
    });
    // Routes for Course Management
    Route::group([ 'prefix' => '/course' ], function(){
        Route::get('/manage', 'App\Http\Controllers\Backend\CourseController@index')->name('course.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\CourseController@create')->name('course.create');
        Route::post('/store', 'App\Http\Controllers\Backend\CourseController@store')->name('course.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\CourseController@edit')->name('course.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\CourseController@update')->name('course.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\CourseController@destroy')->name('course.destroy');
    });
    // Routes for Course Curriculum Management
    Route::group([ 'prefix' => '/curriculum' ], function(){
        Route::get('/manage', 'App\Http\Controllers\Backend\CourseCurriculumController@index')->name('curriculum.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\CourseCurriculumController@create')->name('curriculum.create');
        Route::post('/store', 'App\Http\Controllers\Backend\CourseCurriculumController@store')->name('curriculum.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\CourseCurriculumController@edit')->name('curriculum.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\CourseCurriculumController@update')->name('curriculum.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\CourseCurriculumController@destroy')->name('curriculum.destroy');
    });
    // Routes for Batch Management
    Route::group([ 'prefix' => '/batch' ], function(){
        Route::get('/manage', 'App\Http\Controllers\Backend\BatchController@index')->name('batch.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\BatchController@create')->name('batch.create');
        Route::post('/store', 'App\Http\Controllers\Backend\BatchController@store')->name('batch.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\BatchController@edit')->name('batch.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\BatchController@update')->name('batch.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\BatchController@destroy')->name('batch.destroy');
    });
    // Routes for Mentor Profile Management
    Route::group([ 'prefix' => '/mentor' ], function(){
        Route::get('/manage', 'App\Http\Controllers\Backend\MentorController@index')->name('mentor.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\MentorController@create')->name('mentor.create');
        Route::post('/store', 'App\Http\Controllers\Backend\MentorController@store')->name('mentor.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\MentorController@edit')->name('mentor.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\MentorController@update')->name('mentor.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\MentorController@destroy')->name('mentor.destroy');
    });
    // Routes for Coupon Code
    Route::group([ 'prefix' => '/coupon' ], function(){
        Route::get('/manage', 'App\Http\Controllers\Backend\CouponController@index')->name('coupon.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\CouponController@create')->name('coupon.create');
        Route::post('/store', 'App\Http\Controllers\Backend\CouponController@store')->name('coupon.store');
        Route::get('/edit/{id}', 'App\Http\Controllers\Backend\CouponController@edit')->name('coupon.edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Backend\CouponController@update')->name('coupon.update');
        Route::post('/destroy/{id}', 'App\Http\Controllers\Backend\CouponController@destroy')->name('coupon.destroy');
    });
});

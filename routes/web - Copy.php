<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

 // CACHE CLEAR ROUTE
 Route::get('cache-clear', function () {
    Artisan::call('optimize:clear');
    request()->session()->flash('success', 'Successfully cache cleared.');
    return redirect()->back();
})->name('cache.clear');



Route::get('/', function () {
    return view('welcome');
});



// Frontend User side routes:

// Route::group(prefix-> 'student/' [StudentController::class])
Route::get('onlinedigitallearning.com', [StudentController::class, 'home'])->name('home');
Route::post('signup', [StudentController::class,'signup'])->name('signup');

Route::get('courses/odl.com', function(){
    return view('Frontend.Pages.course');
})->name('course');

Route::get('branches/odl.com', function(){
    return view('Frontend.Pages.course');
})->name('branch');

Route::get('mentors/odl.com', function(){
    return view('Frontend.Pages.course');
})->name('mentor');

Route::get('about/odl.com', function(){
    return view('Frontend.Pages.course');
})->name('about');

Route::get('contact/odl.com', function(){
    return view('Frontend.Pages.course');
})->name('contact');


// Backend Admin side routes:

// Route::group([ 'prefix' => 'admin' ], function(){
//     Route::get();
// });


//Admin side roures:
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

});

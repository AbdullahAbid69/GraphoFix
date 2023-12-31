<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'english_title',
        'bangla_title',
        'slug',
        'intro_video',
        'price',
        'bangla_price',
        'graduate_number',
        'total_lecture',
        'class_hour',
        'course_duration',
        'motivational_content',
        'course_opportunity',
        'curriculum_description',
        'course_requirement',
        'coupon_status',
        'status',
    ];

    // One course has one Course Curriculum
    // public function CourseCurriculum(){
    //     return $this->hasOne(CourseCurriculum::class);
    // }
}

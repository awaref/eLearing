<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Course extends Model
{
    protected $fillable = [
        'code', 'title', 'description', 'course_language', 'start_date', 'end_date',
        'course_specialization', 'course_image', 'course_icon', 'commitment', 'department',
        'how_to_pass','instructor_id','instructor_id'
    ];


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{

    use Notifiable;
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password','username','location'
        , 'gender', 'profilePicture', 'role', 'remember_token', 'education',
        'level', 'GPA', 'department'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    /* create a mutator to encrypt the password of the user */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    /*Create a function to check if the user(student OR instructor) is enrolled to a specific course */
    public function checkIfUserTeachCourse(Course $course){
       return (bool) DB::table('courses')
           ->leftjoin('users', 'users.id', '=', 'courses.instructor_id')
           ->where('courses.id', '=', $course->id)
           ->where('users.id', '=', $this->id)
           ->count();
    }

    public function checkIfUserEnrolled(Course $course){
        return (bool) DB::table('courses')
            ->leftjoin('course_user', 'course_user.course_id', '=', 'courses.id')
            ->leftjoin('users', 'users.id', '=','course_user.user_id')
            ->where('course_user.user_id', '=', $this->id)
            ->where('course_user.course_id', '=', $course->id)
            ->where('course_user.is_passed', '=', 0)
            ->count();
    }


}




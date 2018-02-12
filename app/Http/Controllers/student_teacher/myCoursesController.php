<?php

namespace App\Http\Controllers\student_teacher;

use App\Course;
use App\Lesson;
use App\Module;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class myCoursesController extends Controller
{
    public function displayWelcomePage(){
        return view('home.welcome');
    }

    public function displayMyCoursesPage(){

        $user = User::find(Auth::User()->id);
        $courses = DB::table('courses')
            ->leftjoin('course_user', 'course_user.course_id', '=', 'courses.id')
            ->leftjoin('users as u1', 'u1.id', '=', 'courses.instructor_id')
            ->leftjoin('users as u2', 'u2.id', '=','course_user.user_id')
            ->select('courses.*', 'u1.username')
            ->where('course_user.user_id', '=', $user->id)
            ->where('course_user.is_passed', '=', 0)
            ->get();
        return view('student_teacher.myCourses', compact('courses'));
    }

    public function displayCourseHomePage($title ,$id){
        $active = 'courseHomePage';
        $myCourse = Course::find($id);
        /*
        * get the course again to get some additional attributes such as the name of the instructor
        * of the course and it's profile picture...etc
        * */
        $course = DB::table('courses')
            ->leftjoin('users', 'users.id', '=', 'courses.instructor_id')
            ->select('courses.*', 'users.username', 'users.profilePicture', 'users.education')
            ->where('courses.id', '=', $id)
            ->first();

        $modules = DB::table('modules')
            ->leftjoin('courses', 'courses.id', '=', 'modules.course_id')
            ->select('modules.*')
            ->where('modules.course_id', '=', $id)
            ->get();

        $lessons =  DB::table('lessons')
            ->leftjoin('courses', 'courses.id', '=', 'lessons.course_id')
            ->select('lessons.*')
            ->where('lessons.course_id', '=', $id)
            ->get();

        if(Auth::User()->checkIfUserEnrolled($myCourse) or Auth::User()->checkIfUserTeachCourse($myCourse)){
            return view('course.courseHome', compact('course', 'modules', 'lessons', 'active'));
        } else{
            return redirect()->back();
        }
    }

    public function displayModuleHomePage($title , $course_id, $module_id){
        $active = "introduction";
        $module = Module::find($module_id);
        $myCourse = Course::find($course_id);
        /*
         * get the course again to get some additional attributes such as the name of the instructor
         * of the course and it's profile picture...etc  by using left join method
         * */
        $course = DB::table('courses')
            ->leftjoin('users', 'users.id', '=', 'courses.instructor_id')
            ->leftjoin('modules', 'modules.course_id', '=', 'courses.id')
            ->select('courses.*', 'users.username', 'users.profilePicture', 'users.education')
            ->where('modules.id', '=', $module_id)
            ->first();
        $lessons =  DB::table('lessons')
            ->leftjoin('modules', 'modules.id', '=', 'lessons.module_id')
            ->select('lessons.*')
            ->where('lessons.module_id', '=', $module_id)
            ->get();
        if(Auth::User()->checkIfUserEnrolled($myCourse) or Auth::User()->checkIfUserTeachCourse($myCourse)){
            return view('course.moduleHome', compact('course', 'module', 'lessons', 'active'));
        } else{
            return redirect()->back();
        }
    }

    public function displayLessonContentPage($title, $course_id, $lesson_id){
        $lesson = Lesson::find($lesson_id);
        $course = Course::find($course_id);
        $module =  DB::table('modules')
            ->leftjoin('lessons', 'lessons.module_id', '=', 'modules.id')
            ->select('modules.*')
            ->where('lessons.id', '=', $lesson_id)
            ->first();
        $lessons =  DB::table('lessons')
            ->leftjoin('modules', 'modules.id', '=', 'lessons.module_id')
            ->select('lessons.*')
            ->where('lessons.module_id', '=', $module->id)
            ->get();
        $active = $lesson->title;
        if(Auth::User()->checkIfUserEnrolled($course) or Auth::User()->checkIfUserTeachCourse($course)){
            return view('course.lessonContent', compact('course', 'lesson', 'active', 'module', 'lessons'));
        } else{
            return redirect()->back();
        }

    }

}

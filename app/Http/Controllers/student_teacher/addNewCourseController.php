<?php
namespace App\Http\Controllers\student_teacher;

use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class addNewCourseController extends Controller{
    public function displayAddNewCoursePage(){
        return view('course.addNewCourse');
    }

    public function createCourse(Request $request){

        $this->validate($request, [
            'title'           => 'required|string|max:255|unique:courses',
            'code'            => 'required|string|max:255|unique:courses',
            'department'      => 'required|string|max:255',
            'start_date'      => 'required|date|after:today',
            'end_date'        => 'required|date|after:start_date',
            'course_language' => 'required',
            'course_specialization'  => 'required',
            'course_image'    => 'required',
            'course_icon'     => 'required',
            'description'     => 'required|max:255',
            'how_to_pass'     => 'required|max:255',
            'commitment'      => 'required'
        ]);



            $course = Course::create([
                'title' => $request->input('title'),
                'code' => $request->input('code'),
                'department' => $request->input('department'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
                'course_language' => $request->input('course_language'),
                'course_specialization' => $request->input('course_specialization'),
                'course_icon' => $request->input('course_icon'),
                'description' => $request->input('description'),
                'how_to_pass' => $request->input('how_to_pass'),
                'commitment' => $request->input('commitment'),
                'instructor_id' => Auth::User()->id,
                'course_image' => asset('public/course_images/computerScience.jpg')

            ]);

        $file = $request->file('course_image');
        $fileName = asset('public/course_images/' . $file->getClientOriginalName());
        $destination = 'public/course_images';
        $file->move($destination, $fileName);

            if ($course) {

                DB::table('courses')
                    ->where('id', $course->id)
                    ->update(['course_image' => $fileName]);

                DB::table('course_user')->insert(
                    [
                        'user_id' => Auth::User()->id,
                        'course_id' => $course->id,
                    ]
                );
                return redirect()->route('course.homePage', ['id' => $course->id, 'title' => $course->title])
                    ->with('success', 'The course is created successfully!');
            }
    }
}
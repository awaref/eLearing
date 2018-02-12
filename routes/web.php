<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//*********************************************************************************************//

/*
    |Authentication Routes
    |----------------------
*/

// NOTE: the middleware 'RedirectIfAuthenticated' is applied

Route::group(['middleware' => 'RedirectIfAuthenticated'], function(){

    Route::get('home/register', [
        'uses' => '\App\Http\Controllers\Auth\RegisterController@index',
        'as' => 'register.display'
    ]);

    Route::post('home/register', [
        'uses' => '\App\Http\Controllers\Auth\RegisterController@createUser',
        'as' => 'user.create'
    ]);

    Route::get('home/login', [
        'uses' => '\App\Http\Controllers\Auth\LoginController@displayLoginForm',
        'as' => 'login.display'
    ]);

    Route::post('home/login', [
        'uses' => '\App\Http\Controllers\Auth\LoginController@postLogin',
        'as' => 'login.post'
    ]);
});

/* logout route */
Route::get('home/logout', [
    'uses' => '\App\Http\Controllers\Auth\LogoutController@logoutUser',
    'as' => 'logout'
]);

//*********************************************************************************************//


Route::get('/', [
    'uses' => '\App\Http\Controllers\student_teacher\myCoursesController@displayWelcomePage',
    'as' => 'welcome.display'
]);

//*********************************************************************************************//


/*
    |student&doctor courses Routes
    |-----------------------------
*/

Route::group(['middleware' => 'mustAuthenticate'], function(){
    // myCourses page of students&instructorss
    Route::get('myCourses', [
        'uses' => '\App\Http\Controllers\student_teacher\myCoursesController@displayMyCoursesPage',
        'as' => 'Home.myCoursesDisplay',
    ]);


// course Home page of a specific course
    Route::get('myCourses/{title}/{id}', [
        'uses' => '\App\Http\Controllers\student_teacher\myCoursesController@displayCourseHomePage',
        'as' => 'course.homePage',
    ]);

// Home page of a specific module in a specific course
    Route::get('myCourses/{title}/{course_id}/modules/{module_id}', [
        'uses' => '\App\Http\Controllers\student_teacher\myCoursesController@displayModuleHomePage',
        'as' => 'module.homePage',
    ]);

// display the page of  lesson's content
    Route::get('myCourses/{title}/{course_id}/lessons/{lesson_id}', [
        'uses' => '\App\Http\Controllers\student_teacher\myCoursesController@displayLessonContentPage',
        'as' => 'lesson.displayContent'
    ]);

// display add new course page
    Route::get('myCourses/addNewCourse', [
        'uses' => '\App\Http\Controllers\student_teacher\addNewCourseController@displayAddNewCoursePage',
        'as' => 'addNewCourse.display'
    ]);

// display add new course page
    Route::post('myCourses/addNewCourse/createCourse', [
        'uses' => '\App\Http\Controllers\student_teacher\addNewCourseController@createCourse',
        'as' => 'addNewCourse.create'
    ]);
});



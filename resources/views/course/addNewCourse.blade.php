@extends('templates.master')

@section('title')
    Add New Course
@endsection

@section('styles')
    <Style>
        body{
            padding-top:2.4em
        }
        .w3-bar-block a{
            text-decoration: none;
        }
    </Style>
    @endsection


    @section('content')
    @include('templates.topContainer')
    @include('student_teacher.student_teacher partials.basicInfoMenu')
            <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top: 10px;min-height: 500px">

        <div class="page-header w3-container">
            <div class="w3-container">
                <div class="row">
                    <div id="profilePicture" onclick="this.style.display='none'" class="w3-modal w3-animate-zoom" onclick="this.style.display='none'">
                        <img class="w3-modal-content w3-display-middle" src="{{ Auth::User()->profilePicture }}" style="width: 400px;height: 400px">
                    </div>

                    <div class="col-md-7">
                        <h1><i class="fa fa-plus"></i> Add New Course</h1>
                    </div>
                    <div class="col-md-5" >
                        <ol class="breadcrumb pull-right w3-hide-small">
                            <li><a href="{{ route('welcome.display') }}">Home</a></li>
                            <li><a href="{{ route('Home.myCoursesDisplay') }}">My Courses</a></li>
                            <li class="active">Add New Course</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @include('course.course partials.addNewCourseForm')
    </div>
    @include('templates.smallFooter')
@endsection


@extends('templates.master')

@section('title')
    {{ $module->title }}
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
    @include('course.course partials.moduleLessonsSidebarMenu')
        <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top: 10px;min-height: 500px">

        <div class="page-header w3-container">
            <div class="w3-container">
                <div class="row">
                    <div id="profilePicture" onclick="this.style.display='none'" class="w3-modal w3-animate-zoom" onclick="this.style.display='none'">
                        <img class="w3-modal-content w3-display-middle" src="{{ Auth::User()->profilePicture }}" style="width: 400px;height: 400px">
                    </div>

                    <div id="instructorProfilePicture" onclick="this.style.display='none'" class="w3-modal w3-animate-zoom" onclick="this.style.display='none'">
                        <img class="w3-modal-content w3-display-middle" src="{{ $course->profilePicture }}" style="width: 400px;height: 400px">
                    </div>

                    <div class="col-md-7">
                        <h1><i class="fa {{ $course->course_icon }}"></i> {{ $course->title }} Course</h1>
                    </div>
                    <div class="col-md-5" >
                        <ol class="breadcrumb pull-right w3-hide-small w3-hide-medium">
                            <li><a href="{{ route('welcome.display') }}">Home</a></li>
                            <li><a href="{{ route('Home.myCoursesDisplay') }}">My Courses</a></li>
                            <li class="active">{{ $course->title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @include('course.course partials.moduleInfo')
        <hr class="invisible">
        <hr class="invisible">
    </div>
    @include('templates.smallFooter')
@endsection



@section('scripts')
    <script>
        // Get the Sidebar
        var mySidebar = document.getElementById("mySidebar");

        // Get the DIV with overlay effect
        var overlayBg = document.getElementById("myOverlay");

        // Toggle between showing and hiding the sidebar, and add overlay effect
        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
                overlayBg.style.display = "none";
            } else {
                mySidebar.style.display = 'block';
                overlayBg.style.display = "block";
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
            overlayBg.style.display = "none";
        }



        function openTab(evt, tabName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("tab");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-border-green", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.firstElementChild.className += " w3-border-green";
        }
    </script>
@endsection









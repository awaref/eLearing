<!-- Sidebar/menu -->
<nav class="w3-sidebar  w3-collapse  w3-white w3-animate-left" style="z-index:3;width:300px;max-height: 600px;padding-bottom: 70px"  id="mySidebar"><br>
    <div class="w3-container w3-row">
        <div class="w3-col s4">
            <img src="{{ Auth::User()->profilePicture }}" onclick="document.getElementById('profilePicture').style.display='block'" class="w3-circle w3-border w3-hover-border-deep-orange w3-margin-right" style="width:80px"><br>
        </div>
        <div class="w3-col s8 w3-bar">
            <span>Welcome, <strong>{{ Auth::User()->first_name}}</strong></span><br>
            <a href="#" class="w3-bar-item w3-button w3-large"><i class="fa fa-envelope"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-large"><i class="fa fa-user"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-large"><i class="fa fa-globe"></i></a>
        </div>
        <a href="#" class="w3-left w3-small ">Edit your picture</a>
    </div>
    <hr>

    <div class="w3-container">
        <div class="w3-row">
            <a href="javascript:void(0)"  onclick="openTab(event, 'Lessons');">
                <div class="w3-third tablink w3-small w3-border-green w3-bottombar w3-hover-light-grey w3-text-gray w3-padding">Lessons</div>
            </a>
            <a href="javascript:void(0)"  onclick="openTab(event, 'Resources');">
                <div class="w3-third tablink w3-small w3-bottombar w3-hover-light-grey w3-text-gray  w3-padding">Resources</div>
            </a>
            <a href="javascript:void(0)"  onclick="openTab(event, 'Assessments');">
                <div class="w3-third tablink w3-small w3-bottombar w3-hover-light-grey w3-text-gray  w3-padding">Assessments</div>
            </a>
        </div>
    </div>
    <div id="Lessons" class=" tab" >
        <div class="w3-bar-block w3-text-gray" style="margin-top: 30px">
        <a href="{{ route('module.homePage', ['title' => $course->title, 'course_id' => $course->id, 'module_id' => $module->id ]) }}" class="w3-bar-item w3-button w3-padding {{ $active == 'introduction'? 'w3-black w3-opacity w3-hover-black':'' }}">
            <i class="fa fa-file-text-o w3-text-ownGreen"></i>
            <b><small>Syllabus & Introduction</small></b>
        </a>
        @foreach($lessons as $lesson)
                <a href="{{ route('lesson.displayContent', ['title' => $course->title, 'course_id' => $course->id, 'lesson_id' => $lesson->id]) }}" class="w3-bar-item w3-button {{ $active == $lesson->title? 'w3-black w3-opacity w3-hover-black':'' }}">
                    <b>
                        <i class="fa {{ ($lesson->media_type == 'video' || ($lesson->media_type == "youtube"))? 'fa-play-circle' : ($lesson->media_type == 'audio'? 'fa-headphones' : 'fa-file-text-o' )}} w3-text-ownGreen"></i>
                        <small>{{ $lesson->title }}</small>
                    </b>
                </a>
            @endforeach
        </div>
    </div>

    <div id="Resources" class="tab w3-container" style="display:none">
        <div class="w3-bar-block w3-text-gray" style="margin-top: 30px">
            <h5 style="text-transform: uppercase"><i class="fa fa-folder-open w3-text-ownGold"></i> lesson Resources</h5>
            <hr>
            @foreach($lessons as $lesson)
                <a href="{{ $lesson->path }}" class="w3-text-gray w3-hover-text-black" download>
                    <small><b>{{ $lesson->title }}</b></small>
                    <span class="pull-right"><i class="fa fa-download"></i></span>
                </a>
                <br>
            @endforeach
            <hr class="invisible">
            <h5 style="text-transform: uppercase"><i class="fa fa-folder-open w3-text-ownGold"></i> Course Resources</h5>
            <hr>
            <a href="#" class="w3-text-gray w3-hover-text-black">
                <small><b>Discussion form</b></small>
                <span class="pull-right"><i class="fa fa-link"></i></span>
            </a>
        </div>
    </div>

    <div id="Assessments" class=" tab" style="display:none">

    </div>




</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
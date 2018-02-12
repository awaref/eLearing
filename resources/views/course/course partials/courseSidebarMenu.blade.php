<!-- Sidebar/menu -->
<nav class="w3-sidebar  w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;max-height: 700px;padding-bottom: 10px"  id="mySidebar"><br>
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
        <a href="" class="w3-left w3-small ">Edit your picture</a>

    </div>
    <hr>
    <div class="w3-container">
        <h5 class="title-form">course main list</h5>
    </div>
    <div class="w3-bar-block">
        <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu">Close Menu</a>
        <a href="{{ route('course.homePage',[ 'title' => $course->title, 'id' => $course->id]) }}" class="w3-bar-item w3-button w3-padding {{ $active == 'courseHomePage'? 'w3-black w3-opacity w3-hover-black':'' }}">Course Home</a>

        <button class="w3-button w3-block w3-left-align" onclick="myAccFunc()">Course Content <i class="fa fa-caret-down"></i></button>
        <div id='demoAcc' class="w3-bar-block w3-hide w3-white w3-card-4 w3-text-gray">
            @if(count($modules) >0)
                @for($i=0; $i<count($modules); $i++)
                    <a href="{{ route('module.homePage', ['title' => $course->title, 'course_id' => $course->id, 'module_id' => $modules[$i]->id ]) }}" class="w3-bar-item w3-button w3-padding"><b>Module {{ $i + 1 }}</b></a>
                @endfor
            @else
                <p class="w3-margin-left w3-padding-16">the course has no modules</p>
            @endif
        </div>
        <a href="#" class="w3-bar-item w3-button w3-padding {{ $active == 'Grades'? 'w3-ownOrange':'' }}">Grades</a>
        <a href="#" class="w3-bar-item w3-button w3-padding {{ $active == 'Discussion Forum'? 'w3-ownOrange':'' }}"> Discussion Forum</a>
    </div>
    <hr>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
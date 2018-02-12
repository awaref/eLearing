<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;max-height: 600px;" id="mySidebar"><br>
    <div class="w3-container w3-row">
        <div class="w3-col s4">
            <img src="{{ Auth::User()->profilePicture }}" onclick="document.getElementById('profilePicture').style.display='block'" class="w3-circle w3-border w3-hover-border-deep-orange w3-margin-right" style="width:80px;cursor: pointer">
            <br>
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
        <h5 class="title-form"><i class="fa fa-info-circle"></i> Basic Information</h5>
    </div>
    <div class="w3-bar-block">
        <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu">Close Menu</a>
        <div class="w3-margin-left">
            <div class="w3-panel w3-border-left w3-border-deep-orange">
                <p><i class="fa fa-user"></i> <b>Name:</b> {{ Auth::User()->first_name . ' ' . Auth::User()->last_name }}</p>
            </div>

            <div class="w3-panel w3-border-left w3-border-deep-orange">
                <p><i class="fa fa-tasks"></i> <b>Role:</b> {{ Auth::User()->role }}</p>
            </div>

            <div class="w3-panel w3-border-left w3-border-deep-orange">
                <p><i class="fa fa-building-o"></i> <b>Department:</b> {{ Auth::User()->department }}</p>
            </div>

            <div class="w3-panel w3-border-left w3-border-deep-orange">
                <p><i class="fa {{  Auth::User()->gender == 'Male'? 'fa-male' : 'fa-female' }}"></i> <b>Gender:</b> {{ Auth::User()->gender }}</p>
            </div>

            @if(Auth::User()->role === 'Student')
                <div class="w3-panel w3-border-left w3-border-deep-orange">
                    <p><i class="fa fa-level-up"></i> <b>level:</b> {{ Auth::User()->level }}</p>
                </div>

                <div class="w3-panel w3-border-left w3-border-deep-orange">
                    <p><i class="fa fa-bar-chart-o"></i> <b>GPA:</b> {{ Auth::User()->GPA }}</p>
                </div>
            @elseif(Auth::User()->role === 'instructor')
                <div class="w3-panel w3-border-left w3-border-deep-orange">
                    <p><i class="fa fa-user"></i> <b>Educational degree:</b> {{ Auth::User()->education }}</p>
                </div>
            @endif
            <hr class="invisible">
        </div>
    </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
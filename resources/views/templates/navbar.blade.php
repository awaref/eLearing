<header class="main">
    <div class="container">
        <nav class="navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img id="logo" src="{{ asset('public/E-Learning-master/img/logo.png') }}" alt="eLearn" /></a>
            </div>
            <div class="collapse navbar-collapse">
                <div class=" menu-main">
                    <ul class="nav navbar-nav pull-left" style="margin-left: 30px">
                        <li class="active">
                            <a href="#"><span>Home</span></a>
                        </li>
                        <li><a href="about-us.html"><span>About us</span></a></li>

                        <li><a href="features.html"><span>Features</span></a></li>

                        <li><a href="contact.html"><span>Departments</span></a></li>

                        <li><a href="contact.html"><span>Contact us</span></a></li>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        @if(!Auth::check())
                            <a class="btn btn-theme navbar-btn btn-orange  sign-up" href="{{ route('login.display') }}">start learning/Teaching </a>
                            <a class="btn btn-theme navbar-btn btn-green  sign-up" href="{{ route('register.display') }}">Sign up </a>
                        @else
                            <a class="btn btn-theme navbar-btn btn-orange " href="{{ route('Home.myCoursesDisplay') }}">Go to class</a>
                            <a class="btn btn-theme navbar-btn btn-default " href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Logout</a>

                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
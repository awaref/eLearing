<section class="slider-full-width">
    <div id="carousel-full" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-full" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-full" data-slide-to="1"></li>
            <li data-target="#carousel-full" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{ asset('public/E-Learning-master/img/slider_s1b.jpg') }}" alt="" />
                <div class="container">
                    <div class="carousel-caption">
                        <p class="header animated" data-animation="fadeInUp" data-animation-delay="0.2s"><strong>Learning</strong> online from everywhere via <strong>web</strong></p>
                        <p class="header header-small animated" data-animation="fadeInUp" data-animation-delay="0.8s">Watch  over <strong>many</strong> different tutorials about<br />everything you ever want to know</p>
                        <p class="buttons animated" data-animation="fadeIn" data-animation-delay="1.6s">
                            <a href="{{ route('register.display') }}" class="btn btn-theme btn-orange">Get started as student</a>
                            <a href="video.html" class="btn btn-theme btn-green"><i class="fa fa-play"></i> Watch video</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('public/E-Learning-master/img/slider_s2b.jpg') }}" alt="" />
                <div class="container">
                    <div class="carousel-caption">
                        <p class="header animated" data-animation="fadeInUp" data-animation-delay="0.2s"><strong>en</strong> desktop control from <strong>everywhere</strong></p>
                        <p class="header header-small animated" data-animation="fadeInUp" data-animation-delay="0.8s">About <strong>12 000</strong> interpreneurs from<br />over <strong>50</strong> countries are using it</p>
                        <p class="buttons animated" data-animation="fadeIn" data-animation-delay="1.6s">
                            <a href="{{ route('register.display') }}" class="btn btn-theme btn-orange">Get started as teacher</a>
                            <a href="plans.html" class="btn btn-theme btn-green"><i class="fa fa-play"></i> See pricing</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('public/E-Learning-master/img/slider_s3b.jpg') }}" alt="" />
                <div class="container">
                    <div class="carousel-caption">
                        <p class="header text-right animated" data-animation="fadeInUp" data-animation-delay="0.2s"><strong>Stay tuned</strong> and get watch our <strong>videos</strong></p>
                        <p class="header header-small text-right animated" data-animation="fadeInUp" data-animation-delay="0.8s">About <strong>12 000</strong> interpreneurs from<br />over <strong>50</strong> countries are using it</p>
                        <p class="buttons text-right animated" data-animation="fadeIn" data-animation-delay="1.6s">
                            <a href="{{ route('register.display') }}" class="btn btn-theme btn-orange">Get started as teacher</a>
                            <a href="video.html" class="btn btn-theme btn-green"><i class="fa fa-play"></i> See video</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-full" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-full" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</section>
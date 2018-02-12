<section style="background: url('{{ asset('public/course_images/homeBackground.png') }}');background-size: 100%;">
    <div class="w3-container">
        <div class="row">
            <div class="col-sm-12">
                <div class="w3-panel w3-black w3-opacity w3-display-container w3-padding-16">
                    <span onclick="this.parentElement.style.display='none'" class="w3-button w3-display-topright">
                        X
                    </span>
                    <div class="row">
                        <div class="col-sm-8">
                            <h2 class="w3-text-white">{{ $module->title }}</h2>
                            <h3 class="w3-text-ownGreen">THIS MODULE'S FORUM</h3>
                            <p>Discuss and ask questions about this module</p>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="btn btn-theme btn-red w3-center w3-show-inline-block" style="margin-top: 82px">Go To Forum</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <!-------------->
        <h3 class="title-form  w3-panel w3-border-left w3-border-deep-orange" style="display: inline-block">Module's Introduction</h3>
        <div class="row">
            <div class=" col-md-4 w3-padding-16">
                <div class="w3-center">
                    <img src="{{ $course->profilePicture }}" onclick="document.getElementById('instructorProfilePicture').style.display='block'" class="w3-circle w3-border w3-hover-border-deep-orange" style="width:100px"><br>
                </div>
                <div class=" w3-center">
                    <span class="w3-text-ownBlue lead">{{ $course->username }}</span><br>
                    <span class="w3-text-gray"><em>{{ $course->education }}</em></span><br>
                    <span class="w3-text-gray"><em>Lecturer</em></span>
                </div>
            </div>
            <div class="col-md-8">
                <div class=" w3-padding-16 w3-margin-top">
                    <p class=" w3-large w3-serif w3-text-gray">
                        <i class="fa fa-quote-right w3-xxlarge w3-text-red"></i><br>
                        {{ $module->introduction }}
                    </p>
                </div>
            </div>
        </div>
        <hr>
        <!------>
        <h3 class="title-form  w3-panel w3-border-left w3-border-deep-orange" style="display: inline-block">Module's Syllabus</h3>
        <div class="w3-panel w3-padding  w3-block w3-black w3-opacity  w3-hover-black " style="margin-bottom: 0">
            <span class="pull-left">{{ $module->title }}</span>
                        <span class="pull-right">
                            Estimated time: 1h 24m(static)
                        </span>
        </div>
        <div class="w3-container w3-panel w3-white w3-border w3-border-gray lead  w3-text-gray w3-opacity w3-padding" style="margin-top: 0">
            <h3>Lessons:</h3>
            <br>
            @foreach($lessons as $lesson)
                <p>
                    <i class="fa {{ ($lesson->media_type == 'video')? 'fa-play-circle' : ($lesson->media_type == 'audio'? 'fa-headphones' : 'fa-file-text-o' )}} w3-text-ownGreen"></i>
                    {{ $lesson->title }} - <small>{{ $lesson->media_type }}</small>
                </p>
            @endforeach
        </div>
        <hr class="invisible">
    </div>
</section>

<section class="content content-light" style="background: url('{{ asset('public/course_images/homeBackground.png') }}');background-size: 100%;">
    @if(Auth::User()->role === 'instructor')
        <div class="w3-right w3-container w3-margin-bottom">
            <a href="#" class="btn btn-theme btn-red"><i class="fa fa-edit"></i> Edit the home page</a>
        </div>
    @endif
    <div class="w3-container">
        <div class="w3-panel w3-border w3-border-gray w3-white w3-padding-48">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <img src="{{ $course->course_image }}" class="w3-image" alt="course image" style="height: 200px;width: 100%;max-width: 350px">
                    <div class="w3-container w3-black w3-opacity-min " style="width: 100%;max-width: 350px">
                        <p class="w3-small w3-center w3-padding"><i class="fa fa-clock-o"></i><b> Start from: {{ $course->start_date }} TO {{ $course->end_date }}</b></p>
                    </div>
                </div>
                <div class="col-md-8 col-xs-12 w3-margin-top">
                    <h3 class="title-form w3-panel w3-border-left w3-border-deep-orange">About the course</h3>
                    <p class="lead w3-text-gray">{{ $course->description }}</p>
                </div>
            </div>
        </div>
        <hr>
        <!----------------->
        <h3 class="title-form  w3-panel w3-border-left w3-border-deep-orange" style="display: inline-block">taught by:</h3>
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
                        {{ $course->description }}
                    </p>
                </div>
            </div>
        </div>
        <!----------------->

        <hr class="invisible">
        <hr>
        <h3 class="title-form  w3-panel w3-border-left w3-border-deep-orange" style="display: inline-block">Course basic info</h3>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-responsive table-bordered">
                    <thead>
                    <tr class = "w3-black w3-opacity-min">
                        <th><i class="fa fa-file-text w3-text-red w3-margin-right w3-hide-small w3-hide-medium"></i> Course Code</th>
                        <td>{{ $course->code }}</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class = "w3-black w3-opacity-min">
                        <th><i class="glyphicon glyphicon-comment w3-text-red w3-hide-small w3-margin-right w3-hide-medium"></i> Course Language</th>
                        <td>{{ $course->course_language }}</td>
                    </tr>
                    <tr class = "w3-black w3-opacity-min">
                        <th><i class="fa fa-clock-o w3-text-red w3-margin-right w3-hide-small w3-hide-medium"></i> Commitment</th>
                        <td><span class="w3-badge w3-small w3-deep-orange">{{ $course->commitment }}</span> Hours/Week</td>
                    </tr>
                    <tr class = "w3-black w3-opacity-min">
                        <th><i class="fa fa-check w3-text-red w3-margin-right w3-hide-small w3-hide-medium"></i> How To Pass</th>
                        <td>{{ $course->how_to_pass }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!------------------>
        <hr>
        <h3 class="title-form w3-panel w3-border-left w3-border-deep-orange">Syllabus</h3>
        <div class="row">
            <div class="col-sm-12">
                @if(count($modules)>0)
                    @for($i=0; $i<count($modules); $i++)
                        <button onclick="myAccordionFunction({{ $i }})" class="w3-button w3-block w3-black {{ ($i == 0)? 'w3-opacity':'' }} w3-hover-black ">
                            <span class="pull-left">Module {{ $i + 1 }}</span>
                        <span class="pull-right">
                            Estimated time: 1h 24m(static)
                        </span>
                        </button>
                        <div id="{{ $i }}" class="{{ ($i != 0)? 'w3-hide':'' }} w3-container w3-border-bottom w3-border-gray lead w3-white  w3-text-gray w3-opacity-min w3-padding">
                            <b>Module {{ $i + 1 }}: {{ $modules[$i]->title }}</b>
                            <hr>
                            @foreach($lessons as $lesson)
                                @if($lesson->module_id == $modules[$i]->id)
                                    <p>
                                        <i class="fa {{ ($lesson->media_type == 'video')? 'fa-play-circle' : ($lesson->media_type == 'audio'? 'fa-headphones' : 'fa-file-text-o' )}} w3-text-ownGreen"></i>
                                        {{ $lesson->title }} - <small>{{ $lesson->media_type }}</small>
                                    </p>
                                @endif
                            @endforeach
                        </div>
                        <br>
                    @endfor
                @else
                    <div class="alert alert-info w3-text-gray">
                        <p><i class="fa fa-info-circle w3-margin-right"></i>This course has no modules.Click <a href="#" class="btn btn-link">here</a> to add modules</p>
                    </div>
                 @endif

            </div>
        </div>
    </div>
</section>

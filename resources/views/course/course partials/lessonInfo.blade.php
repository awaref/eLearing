<section style="background: url('{{ asset('public/course_images/homeBackground.png') }}');background-size: 100%;">
    <div class="w3-container">
        <div class="row">
            <div class="col-xs-12">
                <div class="w3-panel w3-white w3-border  w3-padding">
                    <h3><i class="w3-text-ownGreen fa {{ ($lesson->media_type == "video") || ($lesson->media_type == "youtube")? 'fa-play-circle' : ($lesson->media_type == "audio"? 'fa-headphones' : 'fa-file-text-o') }}"></i> Lesson: {{ $lesson->title }} - <i class = "{{$lesson->media_type === 'material file'? 'fa fa-download' : ''  }} "></i>
                        {{ ($lesson->media_type !== 'video' && $lesson->media_type !== 'youtube')? $lesson->media_type : 'video' }}
                    </h3>
                    <hr>
                    <p class="w3-panel w3-text-ownGold w3-leftbar w3-border-blue w3-pale-blue w3-padding">
                        @if(Auth::User()->role === 'student')
                            <strong>Have questions?</strong> Head to the <a href="#" class="btn-link"><strong>forums</strong></a> for discussion  with the Modern Academy Community
                        @elseif(Auth::User()->role === 'instructor')
                            <strong>Follow your students</strong> and Head to the <a href="#" class="btn-link"><strong>forums</strong></a> for discussion  with the Modern Academy Community
                        @endif
                    </p>
                </div>
            </div>
        </div>
        <hr class="invisible">
        <hr class="invisible">
            @if($lesson->media_type === 'video')
                <div class="row">
                    <div class="col-xs-12">
                        <div class="w3-panel w3-white w3-border  w3-padding-48">
                            <div class="row">
                                <div class="col-xs-offset-1 col-xs-10">
                                    <video class="w3-opacity-off w3-bottombar w3-topbar w3-leftbar w3-rightbar w3-border-gray"  style="width: 100%;height: auto" controls>
                                        <source src="{{ $lesson->path }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="w3-black w3-opacity-min w3-text-white w3-padding">
                                        <span class="pull-left">Likes: 5 - Unlikes: 2</span>
                                        <p class="w3-right-align">
                                            <a href="#" class="w3-show-inline-block w3-text-white"><i class="fa fa-thumbs-o-up w3-margin-right"></i></a>
                                            <a href="#" class="w3-show-inline-block w3-text-white"><i class="fa fa-thumbs-o-down"></i></a>
                                        </p>
                                    </div>
                                    <hr>
                                    <div class="w3-panel w3-leftbar w3-padding w3-pale-blue w3-border-blue w3-text-gray w3-margin-top">
                                        <i class="fa fa-download w3-margin-right">
                                            To download this video click <a href="{{ asset($lesson->path) }}" class="btn-link" download><strong>here</strong></a>
                                        </i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($lesson->media_type === 'youtube')
                <div class="row">
                <div class="col-xs-12">
                    <div class="w3-panel w3-white w3-border  w3-padding-48">
                        <div class="row">
                            <div class="col-xs-offset-1 col-xs-10">
                                <iframe src="https://www.youtube.com/embed/{{ $lesson->path }}?controls=1" style="width: 100%;height: 400px">
                                </iframe>
                                <div class="w3-black w3-opacity-min w3-text-white w3-padding">
                                    <span class="pull-left">Likes: 5 - Unlikes: 2</span>
                                    <p class="w3-right-align">
                                        <a href="#" class="w3-show-inline-block w3-text-white"><i class="fa fa-thumbs-o-up w3-margin-right"></i></a>
                                        <a href="#" class="w3-show-inline-block w3-text-white"><i class="fa fa-thumbs-o-down"></i></a>
                                    </p>
                                </div>
                                <hr>
                                <div class="w3-panel w3-leftbar w3-padding w3-pale-blue w3-border-blue w3-text-gray w3-margin-top">
                                    <i class="fa fa-download w3-margin-right"></i>
                                        To download this video click <a href="#" class="btn-link" download><strong>here</strong></a>
                                    (Not working yet!)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @elseif($lesson->media_type === 'audio')
                    <div class="w3-panel w3-white w3-border  w3-padding-48">
                        <div class="row">
                            <div class="col-xs-offset-1 col-xs-10">
                                <div class=" w3-padding w3-card-4 w3-center bg-dark-img w3-text-gray">
                                    <i class="fa fa-headphones fa-5x"></i>
                                    <h3>{{ $lesson->title }}-Audio</h3>
                                    <br>
                                    <audio controls style="width: 100%;">
                                        <source src="{{ $lesson->path }}" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                    <hr>
                                    <div class="w3-text-white w3-padding w3-hide-small">
                                        <span class="pull-left">Likes: 5 - Unlikes: 2</span>
                                        <p class="w3-right-align">
                                            <a href="#" class="w3-show-inline-block w3-text-white"><i class="fa fa-thumbs-o-up w3-margin-right"></i></a>
                                            <a href="#" class="w3-show-inline-block w3-text-white"><i class="fa fa-thumbs-o-down"></i></a>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="w3-panel w3-leftbar w3-padding w3-pale-blue w3-border-blue w3-text-gray w3-margin-top">
                                    <i class="fa fa-download w3-margin-right"></i>
                                        To download this audio click <a href="{{ asset($lesson->path) }}" class="btn-link" download><strong>here</strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
            @elseif($lesson->media_type === 'material file')
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <div class="panel-heading bg-dark-img w3-opacity-min">
                                    <h3 class="w3-text-white">Lesson's Recap</h3>
                                </div>
                                <div class="panel-body w3-border w3-bottombar w3-padding-24">
                                    <p class="w3-text-gray">
                                        {{ $lesson->content }}
                                    </p>
                                    <hr>
                                    <div class="w3-panel w3-large w3-leftbar w3-padding w3-pale-blue w3-border-blue w3-text-gray w3-margin-top">
                                        <i class="fa fa-download w3-margin-right"></i>
                                            To download this file click <a href="{{ asset($lesson->path) }}" class="btn-link" download><strong>here</strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endif

            @if(!($lesson->media_type === 'material file'))
            <hr class="invisible">
            <hr class="invisible">
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel">
                        <div class="panel-heading bg-dark-img w3-opacity-min">
                            <h3 class="w3-text-white">Lesson's Recap</h3>
                        </div>
                        <div class="panel-body w3-border w3-bottombar w3-padding-24">
                            <p class="w3-text-gray">
                                {{ $lesson->content }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <hr class="invisible">
            <hr class="invisible">

    </div>
</section>
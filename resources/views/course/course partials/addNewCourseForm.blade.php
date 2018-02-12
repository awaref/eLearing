
<section class="content">
    <div class="container">
        <!-- Large modal -->
        <button type="button" class="btn btn-theme btn-red pull-right w3-margin" data-toggle="modal" data-target=".CourseSteps">Create Course Steps</button>

        <div class="modal fade CourseSteps" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title w3-text-ownGold" id="exampleModalLongTitle">Create Course Steps</h3>
                    </div>
                    <div class="modal-body">
                        Here will be the steps of the course creation supported by screenshots.
                        Doctor wfaee asked for this :D
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @include('templates.alerts')
        <h1 class="title-form"> course basic information </h1>
        <form action="{{ route('addNewCourse.create') }}" method="post" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('title')? 'has-error' : '' }}">
                        <label for="inputTitle">Course Title</label>
                        <input type="text" name="title" class="form-control" id="inputTitle" value="{{ Request::old('title')? : '' }}"  placeholder="Enter the course title">
                        @if($errors->has('title'))
                            <Span class="help-block">{{ $errors->first('title') }}</Span>
                        @endif
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('code')? 'has-error':'' }}">
                        <label for="inputCode">Course Code</label>
                        <input type="text" name="code" class="form-control" id="inputCode" value="{{ Request::old('code')? : '' }}"  placeholder="Enter the course code">
                        @if($errors->has('code'))
                            <span class="help-block">{{ $errors->first('code') }}</span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('start_date')? 'has-error':'' }}">
                        <label for="inputStartDate">Start Date</label>
                        <input type="date" name="start_date" class="form-control" id="inputStartDate" value="{{ Request::old('start_date')? : '' }}"  placeholder="Enter the course start date">
                        @if($errors->has('start_date'))
                            <span class="help-block">{{ $errors->first('start_date') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('end_date')? 'has-error':'' }}">
                        <label for="inputEndDate">End Date</label>
                        <input type="date" name="end_date" class="form-control" id="inputEndDate" value="{{ Request::old('end_date')? : '' }}"  placeholder="Enter the course end date">
                        @if($errors->has('end_date'))
                            <span class="help-block">{{ $errors->first('end_date') }}</span>
                        @endif
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group {{ $errors->has('course_language')? 'has-error':'' }}">
                        <label for="inputCourseLanguage">Course Language</label>
                        <select name="course_language" class="form-control" id="inputCourseLanguage" value="{{ Request::old('course_language')? : '' }}"  data-placeholder="Select the language" style="width: 100%">
                            <option value="">Select....</option>
                            <option value="English">English</option>
                            <option value="Arabic">Arabic</option>
                        </select>
                        @if($errors->has('course_language'))
                            <span class="help-block">{{ $errors->first('course_language') }}</span>
                        @endif
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group {{ $errors->has('course_specialization')? 'has-error':'' }}">
                        <label for="inputCourseSpecialization">Course Specialization</label>
                        <select name="course_specialization" class="form-control" id="inputCourseSpecialization" value="{{ Request::old('gender')? : '' }}"  data-placeholder="Select the specialization" style="width: 100%">
                            <option value="">Select....</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Data Science">Data Science</option>
                            <option value="Embedded System">Embedded System</option>
                            <option value="Communication">Communication</option>
                            <option value="Electronics">Electronics</option>
                            <option value="Basic Science">Basic Science</option>
                        </select>
                        @if($errors->has('course_specialization'))
                            <span class="help-block">{{ $errors->first('course_specialization') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group {{ $errors->has('course_icon')? 'has-error':'' }}">
                        <label for="inputCourseIcon">Course Icon</label>
                        <select name="course_icon" class="form-control" id="inputCourseIcon" value="{{ Request::old('course_icon')? : '' }}"  data-placeholder="Select the course icon " style="width: 100%">
                            <option value="">Select....</option>
                            <option value="fa-book">fa-book </option>
                            <option value="fa-desktop">fa-desktop</option>
                            <option value="fa-flask">fa-flask</option>
                            <option value="fa-sitemap">fa-sitemap</option>
                            <option value="fa-bar-chart-o">fa-bar-chart-o</option>
                        </select>
                        @if($errors->has('course_icon'))
                            <span class="help-block">{{ $errors->first('course_icon') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- show the form or the style of the icons for the user - modal -->
                    <button type="button" class="btn w3-ownOrange" data-toggle="modal" data-target="#showIconsModa" style="margin-top: 35px">
                        Show Me The Icons Style
                    </button>
                </div>
                <!-- icons Modal -->
                <div class="modal fade" id="showIconsModa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title w3-text-ownGold" id="exampleModalLongTitle">Icons forms</h2>
                            </div>
                            <div class="modal-body">
                                <p class="lead">fa-book <i class="fa fa-book fa-2x pull-right"></i></p><hr>
                                <p class="lead">fa-desktop <i class="fa fa-desktop fa-2x pull-right"></i></p><hr>
                                <p class="lead">fa-flask <i class="fa fa-flask fa-2x pull-right"></i></p><hr>
                                <p class="lead">fa-sitemap <i class="fa fa-sitemap fa-2x pull-right"></i></p><hr>
                                <p class="lead">fa-bar-chart-o <i class="fa fa-bar-chart-o fa-2x pull-right"></i></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('description')? 'has-error':'' }}">
                        <label for="inputCourseDescription">Course Description</label>
                        <textarea name="description" class="form-control" id="inputCourseDescription" value="{{ Request::old('description')? : '' }}"  placeholder="Enter the course description"></textarea>
                        @if($errors->has('description'))
                            <span class="help-block">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('how_to_pass')? 'has-error':'' }}">
                        <label for="inputHowToPass">How To Pass The Course</label>
                        <textarea name="how_to_pass" class="form-control" id="inputHowToPass" value="{{ Request::old('how_to_pass')? : '' }}"  placeholder="How student pass this course?"></textarea>
                        @if($errors->has('how_to_pass'))
                            <span class="help-block">{{ $errors->first('how_to_pass') }}</span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group {{ $errors->has('commitment')? 'has-error' : '' }}">
                        <label for="inputCommitment">Course Commitment</label>
                        <select name="commitment" class="form-control" id="inputCommitment" value="{{ Request::old('commitment')? : '' }}"  data-placeholder="Select ..." style="width: 100%">
                            <option value="">Select....</option>
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                        </select>
                        @if($errors->has('commitment'))
                            <span class="help-block"> {{ $errors->first('commitment') }}</span>
                        @endif
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group {{ $errors->has('department')? 'has-error':'' }}">
                        <label for="inputDepartment">Course Department</label>
                        <input type="text" name="department" class="form-control" id="inputDepartment" value="{{ Request::old('department')? : '' }}"  placeholder="Enter the course department">
                        @if($errors->has('department'))
                            <span class="help-block">{{ $errors->first('department') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <hr>
            <h1 class="title-form">the course image</h1>
            <input type="file" name="course_image" />
            <hr>
            <hr class="invisible" />

            <input type="hidden" name="_token" value="{{ \Illuminate\Support\Facades\Session::token() }}" />
            <hr class="invisible" />
            <p><input type="submit" class="btn btn-theme btn-orange" value="Insert The Course" /></p>
        </form>
    </div>
</section>
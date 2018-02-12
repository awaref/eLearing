@extends('templates.master')

@section('title')
    Register
@endsection

@section('content')
    @include('templates.navbar')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>Register new user</h1>
                </div>
                <div class="col-md-5">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register new user</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container">
            @include('templates.alerts')
            <h1 class="title-form">PERSONAL INFORMATION </h1>
            <form action="{{ route('user.create') }}" method="post" role="form">
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('first_name')? 'has-error' : '' }}">
                            <label for="inputFirstName">First Name</label>
                            <input type="text" name="first_name" class="form-control" id="inputFirstName" value="{{ Request::old('first_name')? : '' }}"  placeholder="Enter your first name">
                            @if($errors->has('first_name'))
                                <Span class="help-block">{{ $errors->first('first_name') }}</Span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('last_name')? 'has-error':'' }}">
                            <label for="inputLastName">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="inputLastName" value="{{ Request::old('last_name')? : '' }}"  placeholder="Enter your last name">
                            @if($errors->has('last_name'))
                                <span class="help-block">{{ $errors->first('last_name') }}</span>
                            @endif
                        </div>

                    </div>
                </div>

                <div class="form-group {{ $errors->has('username')? 'has-error':'' }}">
                    <label for="inputUsername">Username</label>
                    <input type="text" name="username" class="form-control" id="inputUsername" value="{{ Request::old('username')? : '' }}"  placeholder="Enter your username">
                    @if($errors->has('username'))
                        <span class="help-block">{{ $errors->first('username') }}</span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('email')? 'has-error':'' }}">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" value="{{ Request::old('email')? : '' }}" aria-describedby="emailHelp" placeholder="Enter email">
                    @if($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @else
                        <i class="fa fa-info-circle"></i> <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('password')? 'has-error':'' }}">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    @if($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('department')? 'has-error':'' }}">
                            <label for="inputDepartment">Department</label>
                            <input type="text" name="department" class="form-control" id="inputDepartment" value="{{ Request::old('department')? : '' }}"  placeholder="Enter the department">
                            @if($errors->has('department'))
                                <span class="help-block">{{ $errors->first('department') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('gender')? 'has-error':'' }}">
                            <label for="inputGender">Gender</label>
                            <select name="gender" class="form-control" id="inputGender" value="{{ Request::old('gender')? : '' }}"  data-placeholder="Select the gender" style="width: 100%">
                                <option value="">Select....</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            @if($errors->has('gender'))
                                <span class="help-block">{{ $errors->first('gender') }}</span>
                            @endif
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('role')? 'has-error':'' }}">
                            <label for="inputRole">Role</label>
                            <select name="role" class="form-control" id="inputRole" value="{{ Request::old('role')? : '' }}"  data-placeholder="Select the Role" style="width: 100%">
                                <option value="">Select....</option>
                                <option value="Student">Student</option>
                                <option value="Instructor">Instructor</option>
                                <option value="Admin">Admin</option>
                            </select>
                            @if($errors->has('role'))
                                <span class="help-block">{{ $errors->first('role') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputLocation">Location</label>
                            <input type="text" name="location" class="form-control" id="inputLocation" value="{{ Request::old('location')? : '' }}"  placeholder="Enter the location">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('level')? 'has-error':'' }}">
                            <label for="inputLevel">level</label>
                            <input type="text"  name="level" class="form-control" id="inputLevel" value="{{ Request::old('level')? : '' }}"  placeholder="Enter the level">
                            @if($errors->has('level'))
                                <span class="help-block">{{ $errors->first('level') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group {{ $errors->has('gpa')? 'has-error':'' }}">
                            <label for="inputEducation">GPA</label>
                            <input type="text" name="gpa" class="form-control" id="inputGPA" value="{{ Request::old('gpa')? : '' }}"  placeholder="Enter the GPA">
                            @if($errors->has('gpa'))
                                <span class="help-block">{{ $errors->first('gpa') }}</span>
                            @endif
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('education')? 'has-error' : '' }}">
                            <label for="inputEducation">Education</label>
                            <input type="text" name="education" class="form-control" id="inputEducation" value="{{ Request::old('education')? : '' }}"  placeholder="Enter the education">
                            @if($errors->has('education'))
                                <span class="help-block"> {{ $errors->first('education') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <hr class="invisible" />
                <hr class="invisible" />
                <hr class="invisible" />

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="w3-check">
                        Check me out
                    </label>
                </div>
                <input type="hidden" name="_token" value="{{ \Illuminate\Support\Facades\Session::token() }}">
                <hr class="invisible" />
                <p><input type="submit" class="btn btn-theme btn-orange" value="Sign up" /></p>
            </form>
        </div>
    </section>
    @include('templates.footer')
@endsection

@section('scripts')
    <script src = "{{ asset('public/js/register.js') }}"></script>
@endsection

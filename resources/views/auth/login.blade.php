@extends('templates.master')

@section('title')
    Login
@endsection

@section('content')
    @include('templates.navbar')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>Login</h1>
                </div>
                <div class="col-md-5">
                    <ol class="breadcrumb pull-right">
                        <li><a href="{{ route('welcome.display') }}">Home</a></li>
                        <li class="active">login</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        @include('templates.alerts')
    </div>

    <section class="content content-light">
        <div class="container">
            <h1 class="title-form">LOGIN AND ENJOY LEARNING/TEACHING</h1>
            <form action="{{ route('login.post') }}" method="post" role="form">
                <div class="col-md-8">
                    <div class="form-group {{ $errors->has('username')? 'has-error':'' }}">
                        <label for="inputUsername">Username</label>
                        <input type="text" name="username" class=" w3-input w3-animate-input" style="width:70%" id="inputUsername"  placeholder="Enter your username">
                        @if($errors->has('username'))
                            <span class="help-block">{{ $errors->first('username') }}</span>
                        @endif
                    </div>


                    <div class="form-group {{ $errors->has('password')? 'has-error':'' }}">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class=" w3-input w3-animate-input" style="width:70%" id="exampleInputPassword1" placeholder="Password">
                        @if($errors->has('password'))
                            <span class="help-block">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="w3-check">
                            Check me out
                        </label>
                    </div>
                    <input type="hidden" name="_token" value="{{ \Illuminate\Support\Facades\Session::token() }}">
                    <hr class="invisible" />
                    <p><input type="submit" class="btn btn-theme btn-orange" value="Login" /></p>
                </div>
            </form>
        </div>
    </section>
    @include('templates.footer')
@endsection

@extends('templates.master')

@section('title')
    Modern Academy-eLearning
@endsection

@section('content')
    @include('templates.navbar')
    @include('home.homePartials.slider')
    @include('home.homePartials.featuresLightContent')
    @include('home.homePartials.ourTeacherSay')
    @include('home.homePartials.sponsors')
    @include('templates.footer')
@endsection
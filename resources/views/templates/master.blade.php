<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title')
    </title>

    <!-- Fonts -->
    <!----------->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    <!-- CSS Files -->
    <!--------------->
    <!-- include w3schools css -->
    <link rel="stylesheet" href="{{ asset('public/css/w3.css') }}">


    <!--mohab's template CSS Files -->
    <link rel="stylesheet" href="{{ asset('public/E-Learning-master/plugin/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/E-Learning-master/plugin/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/E-Learning-master/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/E-Learning-master/plugin/animate.min.css') }}" />

    <!-- Customized CSS File(your own code) -->
    <link rel="stylesheet" href="{{ asset('public/css/custom.css') }}" />

    <!-- / end CSS Files -->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- yield additional css styles inside <style> tag(If Required) -->
    @yield('styles')

    <!-- include the vue.js library -->
    <script src=" https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://unpkg.com/vue"></script>
    <!-- end vue.js-->

</head>
<body>

    <!-- Any content will be here -->
    <!------------------------------->
    <div id="app">
        @yield('content')
    </div>

    <!-- JavaScript Files -->
    <!---------------------->
    <!-- the file ['public/js/app.js'] is very important to be included for Vue.js -->
    <script src="{{ asset('public/js/app.js') }}"></script>
    <script src="{{ asset('public/E-Learning-master/plugin/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('public/E-Learning-master/plugin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/E-Learning-master/script/animate.js') }}"></script>
    <script src="{{ asset('public/E-Learning-master/plugin/jquery.cuteTime.min.js') }}"></script>
    <script src="{{ asset('public/E-Learning-master/script/script.js') }}"></script>
    <!-- / JavaScript Files -->

    <!-- include the axios library-->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- include the Vue.js library-->
    <script src="{{ asset('public/js/vue.js') }}"></script>
    <script src="https://unpkg.com/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/locale/af.js"></script>
    <!-- end vue.js-->

    <!-- yield additional scripts inside <script> tag(If Required) -->
    @yield('scripts')
</body>
</html>

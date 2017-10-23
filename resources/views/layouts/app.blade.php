<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@section('title')
    {{ config('app.name', 'Laravel') }}
@endsection

<head> @include('layouts.partials.head')
       <!-- Styles -->
     {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css/font-awesome.min.css') }}" rel="stylesheet">
    @yield('stylesheet')
    <script>
        window.App = {!! json_encode([
        'csrfToken' => csrf_token(),
        'user' => Auth::user(),
        'signedIn' => auth()->check()
        ]) !!};
    </script>
    <style>
        .level{
            display: flex;
            align-items: center;
        }
        .flex{
            flex: 1;
        }
        .mr-1 {
            margin-right: 1em;
        }
        [v-cloak]{ display: none; }

        nav .container{
            width: 100%;
        }

        .navbar-inverse {
            background: #222B31 !important;
            border-bottom: 4px solid #EE445F !important;
        }

        .navbar-brand {
            font: 16px Lato !important;
            text-transform: uppercase;
            color: #FFF !important;
            letter-spacing: 2px;
            margin-top: 2px;
        }

        .nav {
            margin-bottom: 0px;
        }
        .nav a {
            font: 500 14px Lato;
            letter-spacing: 2px;
            padding: 16px !important;
            color: #a3bfc6 !important;
            text-transform: uppercase;
            position: relative;
            z-index: 1000;
        }
        .nav a:hover {
            color: #FFF !important;
        }
        .nav li {
            position: relative;
        }

        .navbar-inverse .navbar-toggle {
            border: none;
        }

        .navbar-collapse {
            box-shadow: none !important;
            border: none !important;
        }

        .navbar-inverse .navbar-toggle:hover {
            background: transparent !important;
        }

        .navbar-inverse .navbar-toggle:focus {
            background: transparent !important;
        }

        .navbar-inverse .navbar-toggle:active {
            background: transparent !important;
        }

        .icon-bar {
            background: #a3bfc6 !important;
        }

        .dropdown-menu {
            background-color: #222B31;
            width:300px;
        }
        .dropdown-menu>li>a:hover {
            text-decoration: none;
            color: #262626;
            background-color: black;
        }
        @media (max-width: 767px) {
            .nav {
                padding-bottom: 20px;
            }
            .nav a {
                padding: 12px !important;
            }
        }
        @media (max-width: 480px) {
            .nav {
                padding-bottom: 20px;
            }
        }
        .mb-2 {
            margin-bottom: 2em!important;
        }
        .mt-4 {
            margin-top: 4em!important;
        }

        body{
            background-color: white;
        }
        button.btnn {
            outline: none;
            height: 40px;
            text-align: center;
            width: 100%;
            border-radius: 4px;
            background: #fff;
            border: 2px solid #1ECD97;
            color: #1ECD97;
            letter-spacing: 1px;
            text-shadow: 0;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
            -webkit-transition: all 0.25s ease;
            transition: all 0.25s ease;
        }
        button.btnn:hover {
            color: white;
            background: #1ECD97;
        }
        .menu-label:not(:first-child) {
            margin-top: 20px;
        }
        .menu-label {
            color: #59616b;
            font-size: 11px;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }
        .forum-sidebar .menu-label {
            font-weight: 700;
            font-size: 15px;
            letter-spacing: -.5px;
            margin-bottom: 1em;
            color: #cacaca;
        }
        .btnn, .menu-label {
            text-transform: uppercase;
        }
        ul {
            list-style: none;
        }
        .forum-sidebar li>a {
            border-bottom: 1px dotted #d7d7d7;
            padding: 10px 0;
            -webkit-transition: padding-left .4s;
            transition: padding-left .4s;
            color: #69707a;
            font-weight: 400;
            letter-spacing: -.5px;
        }
        .has-icon {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
        .menu-list a {
            border-radius: 2px;
            color: #4d545d;
        }
        .menu-list a, .menu-nav a {
            /*display: block;*/
            padding: 5px 10px;
        }
        a {
            font-size: 100%;
            background: 0 0;
            color: black;
            text-decoration: none;
            -webkit-transition: none 86ms ease-out;
            transition: none 86ms ease-out;
        }
        @media screen and (min-width: 980px){
            .forum-sidebar li>a:not(.is-active):hover {
                padding-left: 10px;
            }}

        .menu-list a:hover {
            text-decoration: none;
            background-color: #f5f7fa;
            color: #00b1b3;
        }
        .has-icon>.icon.is-success {
            fill: #ef6733;
        }
        .has-icon>.icon {
            padding-right: 10px;
        }
        .icon {
            font-size: 21px;
            height: 24px;
            line-height: 24px;
            width: 24px;
        }
        @media screen and (min-width: 980px){
            .primary {
                background: -webkit-linear-gradient(left,#f9f9f9,#fff 20px);
                background: linear-gradient(to right,#f9f9f9,#fff 20px);
                padding-left: 3em;
            }}
        @media screen and (min-width: 769px){
            .primary {
                margin-top: -30px;
                padding-top: 40px;
            }}
        @media screen and (max-width: 992px){
            .forum-sidebar {
                margin-top: 2em;
                padding-top: 2.5em;
                border-top: 1px solid #d7d7d7;
            }}
        @media screen and (min-width: 1075px){
            .row {
                margin-left: -60px;
                margin-right: -15px;
            }
        }
        .has-icon>.icon {
            padding-right: 10px;
        }
        .icon.is-circle {
            border: 3px solid currentColor;
            width: 15px;
            height: 15px;
            margin-right: 10px;
        }
        .forum-sidebar li>a:not(.is-active):hover span{
            background-color: currentColor;
        }
        .is-circle {
            border-radius: 50%;
        }
    </style>
    </head>
    <body>
    @include('layouts.partials.nav')
    @yield('content2')
    <div id="app">
        <flash message={{ session('flash') }}></flash>
        @yield('content')

    </div>
    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script')



    
</body>

</html>

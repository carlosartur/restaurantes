<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ url("/css/bootstrap.min.css") }}" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="{{ url("/css/bootstrap-theme.min.css") }}" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ url("/css/app.css") }}">
    <link rel="stylesheet" href="{{ url("/css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ url("/css/jquery-ui.structure.css") }}">
    <link rel="stylesheet" href="{{ url("/css/magnific-popup.css") }}">

    <link rel="stylesheet" href="{{ url("/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ url("/css/jquery-ui.structure.min.css") }}">


    <link rel="stylesheet" href="{{ url("/css/bootstrap-theme.min.css") }}">
    <link rel="stylesheet" href="{{ url("/css/jquery-ui.css") }}">
    <link rel="stylesheet" href="{{ url("/css/jquery-ui.theme.css") }}">

    <link rel="stylesheet" href="{{ url("/css/creative.css") }}">
    <link rel="stylesheet" href="{{ url("/css/jquery-ui.min.css") }}">
    <link rel="stylesheet" href="{{ url("/css/jquery-ui.theme.min.css") }}">
    <link rel="stylesheet" href="{{ url("/css/multiselect/bootstrap-multiselect.css") }}">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ url("/css/app.css") }}" rel="stylesheet">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token()
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        &nbsp;
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row">
            @yield('content')
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ url("/js/jquery.min.js") }}"></script>
    <script src="{{ url("/js/jquery-ui.min.js") }}"></script>
    {{--  <script src="{{ url("/js/bootstrap.min.js") }}"></script>  --}}
    <!-- Scripts -->
    <script src="{{ url("/js/jquery.mask.min.js") }}"></script>

    <script src="{{ url("/js/sweetalert.min.js") }}"></script>
    <script src="{{ url("/js/app.js") }}"></script>
    <script src="{{ url("/js/multiselect/bootstrap-multiselect.js") }}"></script>

    @stack('scripts')
</body>
</html>

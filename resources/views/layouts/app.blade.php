<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/dashtreme/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Sep 2023 18:56:45 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assetsc/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assetsc/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assetsc/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assetsc/css/pace.min.css" rel="stylesheet" />
	<script src="assetsc/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assetsc/css/bootstrap.min.css" rel="stylesheet">
	<link href="assetsc/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="assetsc/css/app.css" rel="stylesheet">
	<link href="assetsc/css/icons.css" rel="stylesheet">

	<title>Dashtreme - Multipurpose Bootstrap5 Admin Template</title>
</head>

<body class="bg-theme bg-theme1">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->

		<x-Menu/>

		<!--end sidebar wrapper -->
		<!--start header -->
		<header>

            <x-HautMenu/>

		</header>

        @yield('content')

        <x-color/>



        <!-- Bootstrap JS -->
        <script src="assetsc/js/bootstrap.bundle.min.js"></script>
        <!--plugins-->
        <script src="assetsc/js/jquery.min.js"></script>
        <script src="assetsc/plugins/simplebar/js/simplebar.min.js"></script>
        <script src="assetsc/plugins/metismenu/js/metisMenu.min.js"></script>
        <script src="assetsc/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
        <script src="assetsc/plugins/chartjs/chart.min.js"></script>
        <script src="assetsc/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assetsc/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="assetsc/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
        <script src="assetsc/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
        <script src="assetsc/plugins/jquery-knob/excanvas.js"></script>
        <script src="assetsc/plugins/jquery-knob/jquery.knob.js"></script>
          <script>
              $(function() {
                  $(".knob").knob();
              });
          </script>
          <script src="assetsc/js/index.js"></script>
        <!--app JS-->
        <script src="assetsc/js/app.js"></script>
    </body>


    <!-- Mirrored from codervent.com/dashtreme/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Sep 2023 18:58:11 GMT -->
    </html>










{{--  <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>  --}}

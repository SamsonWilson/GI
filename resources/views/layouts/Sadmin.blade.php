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



         @yield('form')






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

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ isset($title) ? $title . ' | ' . config('app.name') : config('app.name') }}</title>

	<link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">

    <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('js/select.dataTables.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatables/jquery.dataTables.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        .btn-status {
            color: #000000 !important;
            background-color: white;
            border-color: white;
			border-radius: 8px;
            /*set the color you want here*/
        }

        .btn-status:hover,
        .btn-status:focus,
        .btn-status:active,
        .btn-status.active,
        .open>.dropdown-toggle.btn-status {
            color: #fff !important;
            background-color: #4B49AC;
            border: none;
            border-color: white !important;
            /*set the color you want here*/
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: none;
            color: black !important;
            border-radius: 4px;
            border: none;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:active {
            background: none;
            color: black !important;
        }

    </style>

	@stack('styles')

	<link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>

<body>
	<div class="container-scroller">
		@include('layouts.navbar')
		<div class="container-fluid page-body-wrapper">
			@include('layouts.sidebar')

			<div class="main-panel">
				<div class="content-wrapper">
					@yield('content')
				</div>

				<footer class="footer">
					<div class="d-sm-flex justify-content-center justify-content-sm-between">
						<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a
								href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All
							rights reserved.</span>
						<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
								class="ti-heart text-danger ml-1"></i></span>
					</div>
				</footer>
			</div>
		</div>
	</div>

    <!-- plugins:js -->
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    {{-- <script src="vendors/chart.js/Chart.min.js"></script> --}}
    {{-- <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/dataTables.select.min.js') }}"></script> --}}
    {{-- <script src="vendors/js/vendor.bundle.base.js"></script> --}}

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/jquery.form.min.js') }}"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    {{-- <script src="js/Chart.roundedBarCharts.js"></script> --}}
    @yield('script')
    <!-- End custom js for this page-->
</body>

</html>

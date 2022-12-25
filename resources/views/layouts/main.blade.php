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
    <link rel="stylesheet" href="{{ asset('css/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2/select2-bootstrap-5-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel-2/owl.carousel.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('vendors/owl-carousel-2/owl.theme.default.min.css') }}"> --}}

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

        /* CSS New Biro */
        * {
            font-family: 'Nunito';
        }

        .card-dashboard-biro {
            border-radius: 25px;
            width: 280px;
            height: 145px;
            
        }

        .Font-20{
            font-size: 20px;
          
        }

        .Font-32{
            font-size: 32px
        }

    </style>

    @stack('styles')

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>

<body>
    @include('sweetalert::alert')
    <div class="container-scroller">
        @include('layouts.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('layouts.sidebar')

            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>

                <footer class="footer">
                                        <p class="text-muted text-center">Copyright © 2022 <span class="font-weight-bold" style="color: #4B49AC ">E-Faktur Devill Singkawang.</span></p>

                </footer>
            </div>
        </div>
    </div>

    <!-- plugins:js -->
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/select2.full.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    {{-- <script src="vendors/chart.js/Chart.min.js"></script> --}}
    {{-- <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/dataTables.select.min.js') }}"></script> --}}
    {{-- <script src="vendors/js/vendor.bundle.base.js"></script> --}}

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/jquery.form.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-filestyle.min.js') }}"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script>
    $(document).ready(function () {
        $('#table1').DataTable({
            drawCallback: function() {
                $('.js-example-basic-single').select2({
                    theme: 'bootstrap-5'
                })
            }}
        );
    });
    </script>
    <script>
    $(document).ready(function() {
        $( '.js-example-basic-single' ).select2( {
            theme: 'bootstrap-5',
        });
    });
    </script>
    {{-- <script src="js/Chart.roundedBarCharts.js"></script> --}}
    @yield('script')
    <!-- End custom js for this page-->
</body>

</html>
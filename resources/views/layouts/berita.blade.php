<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} Dashboard</title>

        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/vendors/base/vendor.bundle.base.css') }}">
        <!-- endinject -->

        <!-- plugin css for this page -->
        <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
        <!-- End plugin css for this page -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

        <!-- inject:css -->
        <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
        <!-- endinject -->
        
        <link rel="shortcut icon" href="{{ asset('admin/images/logoutamastroke.png') }}" />

        @livewireStyles
    </head>
    <body>
        <div class="container-scroller">
            @include('layouts.includes.berita.navbar')
            <div class="container-fluid page-body-wrapper">
                @include('layouts.includes.berita.sidebar')
                <div class="main-panel">
                    <div class="content-wrapper">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        <!-- plugins:js -->
        <script src="{{ asset('admin/vendors/base/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->

        <!-- Plugin js for this page-->
        <script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
        <!-- End plugin js for this page-->

        <!-- inject:js -->
        <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
        <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('admin/js/template.js') }}"></script>
        <!-- endinject -->

        <!-- Custom js for this page-->
        <script src="{{ asset('admin/js/dashboard.js') }}"></script>
        <script src="{{ asset('admin/js/data-table.js') }}"></script>
        <script src="{{ asset('admin/js/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('admin/js/dataTables.bootstrap4.js') }}"></script>
        <!-- End custom js for this page-->

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#summernote').summernote({
                    tabsize: 2,
                    height: 100
                });
            });
        </script>

        @livewireScripts
    </body>
</html>
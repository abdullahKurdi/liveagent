<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="{{asset('assets/template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="{{asset('assets/template/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/template/css/IRANSansWeb.css')}}" rel="stylesheet">


<!-- custom style -->
    @yield('style')


<!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles

</head>
<body id="page-top" class="{{Session::get('body_toggled')}}">
<!-- Page Wrapper -->

<div id="app">
    <main>
        <div id="wrapper">
            @include('partial.admin.sidebar')
            <div id="content-wrapper" class="d-flex flex-column">
                @include('partial.admin.navbar')
                <div id="content">
                    @yield('content')
                </div>
                @include('partial.admin.footer')
            </div>
        </div>
        @include('partial.admin.modal')
    </main>
</div>

@livewireScripts

<!-- Bootstrap core JavaScript-->
<script src="{{asset('assets/template/vendor/jquery/jquery.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('assets/template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<!-- Custom scripts for all pages-->
<script src="{{asset('assets/template/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{asset('assets/template/vendor/chart.js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('assets/template/js/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('assets/template/js/demo/chart-pie-demo.js')}}"></script>

<!-- custom script -->
@yield('script')
</body>
</html>

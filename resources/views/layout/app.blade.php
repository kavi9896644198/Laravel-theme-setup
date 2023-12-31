<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
		  <!-- Ionicons -->
		  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		  <!-- Tempusdominus Bbootstrap 4 -->
		  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
		  <!-- iCheck -->
		  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
		  <!-- JQVMap -->
		  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
		  <!-- Theme style -->
		  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
		  <!-- overlayScrollbars -->
		  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
		  <!-- Daterange picker -->
		  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
		  <!-- summernote -->
		  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css'">
		  <!-- Google Font: Source Sans Pro -->
		  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
		<div class="wrapper">
			@include('layout.header')

			@include('layout.sidebar')

			@yield('content')

			@include('layout.footer')
    	</div>
    </body>
</html>
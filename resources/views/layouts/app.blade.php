<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Diretez') }}</title>

        {{-- <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('css/plugins/all.min.css')}}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset('css/plugins/overlayScrollbars.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('css/plugins/adminsite.min.css')}}">


        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


        @stack('styles')
    </head>


    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            @include('layouts.navigation')

            @include('layouts.sidebar')

            <div class="content-wrapper">
                {{$slot}}
            </div>

            @include('layouts.footer')
        </div>


        <!-- jQuery -->
        <script src="{{asset('js/plugins/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('js/plugins/bootstrap.bundle.min.js')}}"></script>
        <!-- overlayScrollbars -->
        <script src="{{asset('js/plugins/jquery.overlayScocrollbars.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('js/plugins/adminsite.min.js')}}"></script>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" ></script>

        @stack('scripts')
    </body>

</html>

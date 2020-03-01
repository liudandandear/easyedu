<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="TheAdmin - Responsive admin and web application ui kit">
    <meta name="keywords" content="admin, dashboard, web app, sass, ui kit, ui framework, bootstrap">
    <title>easyEdu</title>
    <link href="{{ asset('css/core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link crossorigin="anonymous" integrity="sha384-6SClQBVFSY83VyPkr36mKEIuaHcXN69N5F076i0mYvEIsVK73AlDn/6vL2PyunVW"
          href="//lib.baomitu.com/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">

    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
</head>
<body class="topbar-unfix">
@include('admin.layouts._header')
<main>
    @yield('content')
    @include('admin.layouts._footer')
</main>
@include('admin.layouts._notifications')
<script src="{{ asset('js/core.min.js') }}"></script>
<script src="{{ asset('js/app.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script crossorigin="anonymous" integrity="sha384-yhphg78T9x4D5MygsNWDAL6NRy6UurEwbp81HAeiKaBIh7rUi1+BIwJMlYJuPBlW"
        src="//lib.baomitu.com/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

@include('admin.layouts._message')
</body>
</html>

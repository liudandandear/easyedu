<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="TheAdmin - Responsive admin and web application ui kit">
    <meta name="keywords" content="admin, dashboard, web app, sass, ui kit, ui framework, bootstrap">

    <title>easyEdu</title>

    <!-- Styles -->
    <link href="{{ asset('css/core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
</head>

<body class="topbar-unfix">

@include('admin.layouts._header')

<!-- Main container -->
<main>
        @yield('content')


    @include('admin.layouts._footer')


</main>


<!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
<!-- Quickviews -->


<!-- Notifications -->
<div id="qv-notifications" class="quickview">
    <header class="quickview-header quickview-header-lg">
        <h5 class="quickview-title">Notifications</h5>
        <span class="close"><i class="ti-close"></i></span>
    </header>

    <div class="quickview-body">
        <div class="media-list media-list-hover media-list-divided media-sm">
            <a class="media media-new" href="#">
                <span class="avatar bg-success"><i class="ti-user"></i></span>
                <div class="media-body">
                    <p>New user registered</p>
                    <time datetime="2017-07-14 20:00">Just now</time>
                </div>
            </a>

            <a class="media media-new" href="#">
                <span class="avatar bg-info"><i class="ti-shopping-cart"></i></span>
                <div class="media-body">
                    <p>New order received</p>
                    <time datetime="2017-07-14 20:00">2 min ago</time>
                </div>
            </a>

            <a class="media media-new" href="#">
                <span class="avatar bg-warning"><i class="ti-face-sad"></i></span>
                <div class="media-body">
                    <p>Refund request from <b>Ashlyn Culotta</b></p>
                    <time datetime="2017-07-14 20:00">24 min ago</time>
                </div>
            </a>

            <a class="media media-new" href="#">
                <span class="avatar bg-primary"><i class="ti-money"></i></span>
                <div class="media-body">
                    <p>New payment has made through PayPal</p>
                    <time datetime="2017-07-14 20:00">53 min ago</time>
                </div>
            </a>

            <a class="media" href="#">
                <span class="avatar bg-danger"><i class="ti-package"></i></span>
                <div class="media-body">
                    <p>Package lost on the way!</p>
                    <time datetime="2017-07-14 20:00">1 hour ago</time>
                </div>
            </a>

            <a class="media" href="#">
                <span class="avatar bg-success"><i class="ti-user"></i></span>
                <div class="media-body">
                    <p>New user registered</p>
                    <time datetime="2017-07-14 20:00">1 hour ago</time>
                </div>
            </a>

            <a class="media" href="#">
                <span class="avatar bg-purple"><i class="ti-comment"></i></span>
                <div class="media-body">
                    <p>New review on <em>iPhone 6s</em></p>
                    <time datetime="2017-07-14 20:00">3 hours ago</time>
                </div>
            </a>

            <a class="media" href="#">
                <span class="avatar bg-info"><i class="ti-shopping-cart"></i></span>
                <div class="media-body">
                    <p>New order received</p>
                    <time datetime="2017-07-14 20:00">5 hours ago</time>
                </div>
            </a>

            <a class="media" href="#">
                <span class="avatar bg-danger"><i class="fa fa-area-chart"></i></span>
                <div class="media-body">
                    <p>CPU usage went above 80%</p>
                    <time datetime="2017-07-14 20:00">Yesterday</time>
                </div>
            </a>

            <a class="media" href="#">
                <span class="avatar bg-yellow"><i class="fa fa-star"></i></span>
                <div class="media-body">
                    <p>New rating on iPhone 6s, 5 star</p>
                    <time datetime="2017-07-14 20:00">Yesterday</time>
                </div>
            </a>

            <a class="media" href="#">
                <span class="avatar bg-success"><i class="ti-user"></i></span>
                <div class="media-body">
                    <p>New user registered</p>
                    <time datetime="2017-07-14 20:00">Yesterday</time>
                </div>
            </a>

            <a class="media" href="#">
                <span class="avatar bg-primary"><i class="ti-money"></i></span>
                <div class="media-body">
                    <p>New payment has made through PayPal</p>
                    <time datetime="2017-07-14 20:00">2 days ago</time>
                </div>
            </a>

            <a class="media" href="#">
                <span class="avatar bg-info"><i class="ti-shopping-cart"></i></span>
                <div class="media-body">
                    <p>New order received</p>
                    <time datetime="2017-07-14 20:00">2 days ago</time>
                </div>
            </a>

            <a class="media" href="#">
                <span class="avatar bg-purple"><i class="ti-comment"></i></span>
                <div class="media-body">
                    <p>New review on Samsung Galaxy S7</p>
                    <time datetime="2017-07-14 20:00">Aug 17</time>
                </div>
            </a>
        </div>
    </div>

    <footer class="quickview-footer flexbox">
        <div>
            <a href="#">View full archive</a>
        </div>
        <div>
            <a href="#" data-provide="tooltip" title="Mark all as read"><i class="fa fa-circle-o"></i></a>
            <a href="#" data-provide="tooltip" title="Update"><i class="fa fa-repeat"></i></a>
            <a href="#" data-provide="tooltip" title="Settings"><i class="fa fa-gear"></i></a>
        </div>
    </footer>
</div>

<!-- Scripts -->

<script src="{{ asset('js/core.min.js') }}"></script>
<script src="{{ asset('js/app.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>

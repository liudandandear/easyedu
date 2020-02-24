<!-- Topbar -->
<header class="topbar topbar-expand-lg topbar-secondary topbar-inverse">
    <div class="container">
        <div class="topbar-left">
            <span class="topbar-btn topbar-menu-toggler"><i>&#9776;</i></span>

            <div class="topbar-brand">
                <a href="index.html"><img src="{{ asset('img/logo.png') }}" alt="..."></a>
            </div>

            <div class="topbar-divider d-none d-md-block"></div>

            <nav class="topbar-navigation">
                <ul class="menu">

                    <li class="menu-item">
                        <a class="menu-link" href="{{route('admin.index.index')}}">
                            <span class="title">主页</span>
                        </a>
                    </li>

                    <li class="menu-item {{active_class(if_route('admin.video.index'))}}">
                        <a class="menu-link" href="{{route('admin.video.index')}}">
                            <span class="title">视频</span>
                        </a>
                    </li>

                    <li class="menu-item {{active_class(if_route('admin.form.index'))}}">
                        <a class="menu-link" href="{{route('admin.form.index')}}">
                            <span class="title">表单</span>
                        </a>
                    </li>

                    <li class="menu-item {{active_class(if_route('admin.user.index'))}}">
                        <a class="menu-link" href="{{route('admin.user.index')}}">
                            <span class="title">用户</span>
                        </a>
                    </li>

                    <li class="menu-item {{active_class(if_route('admin.setting.index'))}}">
                        <a class="menu-link" href="{{route('admin.setting.index')}}">
                            <span class="title">设置</span>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>


        <div class="topbar-right">

            <ul class="topbar-btns">
                <li class="dropdown">
                    <span class="topbar-btn" data-toggle="dropdown"><img class="avatar"
                                                                         src="{{ asset('img/avatar/1.jpg') }}"
                                                                         alt="..."></span>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="ti-power-off"></i> Logout</a>
                    </div>
                </li>


                <li>
                    <span class="topbar-btn has-new" data-toggle="quickview" data-target="#qv-notifications"><i
                                class="ti-bell"></i></span>
                </li>

            </ul>

        </div>
    </div>
</header>
<!-- END Topbar -->
<div id='mainHeader'>
    <div class='container'>
        <hgroup id='heading'>
            <h1 id='companyname' title='后台测试ZUI'><a href='/'>test</a>
            </h1>
        </hgroup>
        <nav id='navbar'>
            <ul class='nav nav-default'>
                <li class='{{active_class(if_route('admin.index.index'))}}' data-id='my'>
                    <a href='{{route('admin.index.index')}}'>主页</a>
                </li>
                <li class='{{active_class(if_route('admin.user.index'))}}' data-id='product'>
                    <a href='{{route('admin.user.index')}}'>用户</a>
                </li>
                <li class='{{active_class(if_route('admin.setting.index'))}}' data-id='project'>
                    <a href='{{route('admin.setting.index')}}'>设置</a>
                </li>
            </ul>
        </nav>
        <div id='toolbar'>
            <div id="userMenu">
                <div id='searchbox'>
                    <div class='input-group'>
                        <input id='searchInput' class='form-control search-input' type='search' onclick='this.value=""'
                               onkeydown='if(event.keyCode==13) $.gotoObject();' placeholder=''/></div>
                    <a href='javascript:$.gotoObject();' class='btn btn-link' id='searchGo'>搜索</a></div>
                <ul id="userNav" class="nav nav-default">
                    <li><a class='dropdown-toggle' data-toggle='dropdown'><span class='user-name'>guest</span><span
                                    class='caret'></span></a>
                        <ul class='dropdown-menu pull-right'>
                            <li class="divider"></li>
                            <li class='dropdown-submenu'><a data-toggle='dropdown'>帮助</a>
                                <ul class='dropdown-menu pull-left'>
                                    <li><a href='https://www.zentao.net/book/zentaopmshelp.html?fullScreen=zentao'
                                           class='open-help-tab' target='_blank'>手册</a>
                                    </li>
                                    <li><a href='/misc-changeLog.html' class='iframe' data-width='800'
                                           data-headerless='true' data-backdrop='true' data-keyboard='true'>修改日志</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href='/misc-about.html' class='about iframe' data-width='1050' data-headerless='true'
                                   data-backdrop='true' data-keyboard='true' data-class='modal-about'>关于禅道</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href='/user-login.html'>登录</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
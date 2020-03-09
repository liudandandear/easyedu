<!DOCTYPE html>
<html lang='zh-cn'>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <title>我的地盘 - 禅道</title>
    <script>window.config = {
            "webRoot": "\/",
            "debug": false,
            "appName": "",
            "cookieLife": 30,
            "requestType": "PATH_INFO",
            "requestFix": "-",
            "moduleVar": "m",
            "methodVar": "f",
            "viewVar": "t",
            "defaultView": "html",
            "themeRoot": "\/theme\/",
            "currentModule": "my",
            "currentMethod": "index",
            "clientLang": "zh-cn",
            "requiredFields": "",
            "router": "\/index.php",
            "save": "\u4fdd\u5b58",
            "runMode": "",
            "timeout": 30000,
            "pingInterval": ""
        };
        window.lang = {
            "submitting": "\u7a0d\u5019...",
            "save": "\u4fdd\u5b58",
            "expand": "\u5c55\u5f00\u5168\u90e8",
            "timeout": "\u8fde\u63a5\u8d85\u65f6\uff0c\u8bf7\u68c0\u67e5\u7f51\u7edc\u73af\u5883\uff0c\u6216\u91cd\u8bd5\uff01"
        };

    </script>
    <script>config.onlybody = "no";</script>
    <link rel='stylesheet' href='http://cdn.zentaopm.com/12.0/theme/default/zh-cn.default.css?t=4?v=biz3.6'
          type='text/css' media='screen'/>
    <script src='http://cdn.zentaopm.com/12.0/js/all.js?t=333&v=biz3.6'></script>
    <style>.dropdown-menu.with-search {
            padding: 0;
            min-width: 150px;
            overflow: hidden;
            max-height: 302px;
        }

        .dropdown-menu > .menu-search .input-group {
            width: 100%;
        }

        .dropdown-menu > .menu-search .input-group-addon {
            position: absolute;
            right: 10px;
            top: 0;
            z-index: 10;
            background: none;
            border: none;
            color: #666
        }

        .dropdown-menu > .menu-search .form-control {
            border: none !important;
            box-shadow: none !important;
            border-top: 1px solid #ddd !important;
        }

        .dropdown-list {
            display: block;
            padding: 0;
            max-height: 270px;
            overflow-y: auto;
        }

        .dropdown-list > li > a {
            display: block;
            padding: 3px 20px;
            clear: both;
            font-weight: normal;
            line-height: 1.53846154;
            color: #141414;
            white-space: nowrap;
        }

        .dropdown-list > li > a:hover,
        .dropdown-list > li > a:focus {
            color: #1a4f85;
            text-decoration: none;
            background-color: #ddd;
        }

        .btn-toolbar .nav-title {
            float: left;
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 13px;
            font-weight: bolder;
            line-height: 18px;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
        }
    </style>
    <link rel='icon' href='/favicon.ico' type='image/x-icon'/>
    <link rel='shortcut icon' href='/favicon.ico' type='image/x-icon'/>
    <!--[if lt IE 10]>
    <script src='http://cdn.zentaopm.com/12.0/js/jquery/placeholder/min.js?v=biz3.6'></script>
    <![endif]-->
</head>
<script>needPing = false;</script>
<body>
<script>
    var chooseUsersToMail = '选择要发信通知的用户...';
    $(document).ready(function () {
        $("#mailto").attr('data-placeholder', chooseUsersToMail);
        $("#mailto, #productID").chosen();
    });
</script>
<style>
    .outer .with-side .side, .outer .with-side .side + .main {
        visibility: visible;
    }

    #featurebar {
        margin: -8px 0 10px;
    }

    #featurebar .nav:after {
        clear: left;
    }

    #featurebar .nav li {
        float: left;
        margin-right: 10px;
        padding: 6px;
    }

    #featurebar .nav li a {
        padding: 0px;
    }

    #featurebar .nav li.active a {
        top: -1px;
        display: inline-block;
        font-weight: 700;
        color: #006af1;
    }

    #featurebar .nav li.active a:after {
        position: absolute;
        bottom: -5px;
        display: block;
        width: 100%;
        content: ' ';
        border-bottom: 2px solid #006af1;
    }

    #main #menuActions {
        margin-top: -40px !important;
    }

    .with-side .side {
        left: auto;
    }

    .icon-remove:before {
        content: "\e90d";
    }

    .with-side .side .panel .panel-body {
        padding: 10px;
    }

    .tablesorter thead > tr > th > a {
        position: relative;
        display: inline-block;
        padding-right: 16px;
        color: #3c4353;
    }

    .tablesorter thead > tr > th > a:after, .tablesorter thead > tr > th > a:before {
        position: absolute;
        top: 0;
        right: 0;
        font-family: ZentaoIcon;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        font-variant: normal;
        line-height: 1.1;
        color: #3c4353;
        text-transform: none;
        content: "\f0de";
        opacity: .5;
    }

    .tablesorter thead > tr > th > a:after {
        content: "\f0dd";
    }

    .tablesorter thead > tr > th > a.sort-down, .tablesorter thead > tr > th > a.sort-up, .tablesorter thead > tr > th > a:hover {
        color: #006af1;
        text-decoration: none;
    }

    .tablesorter thead > tr > th > a.sort-down:after, .tablesorter thead > tr > th > a.sort-up:before, .tablesorter thead > tr > th > a:hover:after, .tablesorter thead > tr > th > a:hover:before {
        color: #006af1;
        opacity: 1;
    }
</style>
<style>
    #searchbox .input-group-btn {
        display: none;
    }

    #searchbox .dropdown-menu {
        margin-top: 0;
        left: 1px;
    }

    #searchbox .dropdown-menu > li > a {
        padding: 5px 8px
    }

    #searchbox .dropdown-menu > li {
        display: none
    }

    #searchbox .dropdown-menu > li.search-type-all {
        width: 100%;
        display: block;
    }

    #searchbox .dropdown-menu > li:hover {
        position: relative;
    }

    #searchbox .dropdown-menu.show-quick-go.with-active {
        padding-top: 28px;
        position: absolute;
    }

    #searchbox .dropdown-menu.show-quick-go > li {
        display: block;
    }

    #searchbox .dropdown-menu.show-quick-go > li.active {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
    }
</style>
<style>
    #navbar ul.nav li a {
        padding: 10px 10px;
    }

    #navbar ul.nav {
        padding-left: 10px;
    }

    #navbar ul.nav li.divider {
        margin: 15px 10px;
    }
</style>
<header id='header'>
    @include('admin.layouts._mainHeader')
    @include('admin.layouts._subHeader')
</header>

<main id='main'>
    <div class='container'>
        <style>body {
                padding-bottom: 20px;
            }

            .nav > li > .btn {
                padding: 0 5px;
                line-height: 24px;
                margin: 3px;
                color: #3C4353;
            }

            .nav > li > .btn.btn-primary {
                color: #fff;
            }

            .nav .icon-more {
                font-size: 14px;
            }

            .block-statistic .nav-stacked {
                overflow: auto;
                max-height: 220px;
            }

            #dashboard .col-side {
                width: 450px;
                max-width: 450px;
            }

            #dashboard .panel-body {
                max-height: 400px;
                overflow: auto;
            }

            #dashboard .panel-body.has-table {
                padding-top: 0;
            }

            #dashboard .panel-move-handler {
                position: absolute;
                top: 0;
                left: 0;
                right: 50px;
                height: 40px;
                z-index: 10;
                cursor: move;
            }

            #dashboard .panel-heading {
                cursor: move;
                padding-right: 75px;
            }

            @media (min-width: 992px) {
                #dashboard > .row {
                    display: table;
                    width: 100%;
                    margin: 0;
                }

                #dashboard > .row > .col-main,
                #dashboard > .row > .col-side {
                    display: table-cell;
                    float: none;
                    padding: 0;
                    vertical-align: top;
                }

                #dashboard > .row > .col-main {
                    padding-right: 10px
                }

                #dashboard > .row > .col-side {
                    padding-left: 10px
                }
            }

            #dashboard.sortable-sorting .panel {
                margin-bottom: 10px;
                box-shadow: 0 1px 1px rgba(0, 0, 0, .075), 0 2px 6px 0 rgba(0, 0, 0, .075);
                height: 46px;
            }

            #dashboard.sortable-sorting .panel > * {
                display: none;
            }

            #dashboard.sortable-sorting .panel:before {
                display: block;
                content: attr(data-name);
                padding: 12px 20px;
                font-weight: bold;
                font-size: 14px;
                color: #3c4353;
                opacity: 1 !important;
                text-align: left;
                visibility: visible;
            }

            #dashboard.sortable-sorting .panel.dragging {
                visibility: visible;
                background: transparent;
                background: rgba(0, 0, 0, .075);
                box-shadow: inset 0 2px 6px rgba(0, 0, 0, .075);
            }

            #dashboard.sortable-sorting .panel.dragging:before {
                color: #bbb;
            }

            #dashboard.sortable-sorting .panel.drag-shadow {
                box-shadow: 0 1px 3px rgba(0, 0, 0, .175), 0 3px 8px 0 rgba(0, 0, 0, .175)
            }

            #dashboard .block-sm .hide-in-sm {
                display: none;
            }

            #dashboard .block-dynamic .panel-body {
                overflow-x: hidden;
            }
        </style>
        <script src='/js/jquery/tablesorter/min.js?v=biz3.6'></script>
        <script src='/js/jquery/tablesorter/metadata.js?v=biz3.6'></script>
        <style>
            .tablesorter-header-inner {
                cursor: pointer;
            }

            .tablesorter-header-inner:hover {
                color: #000;
                font-weight: bold;
            }

            table.tablesorter tr.tablesorter-headerRow .header.tablesorter-headerUnSorted .tablesorter-header-inner:after {
                font-family: ZentaoIcon;
                font-weight: normal;
                content: "\f0dc";
                font-size: 14px;
                color: #838a9c
            }

            table.tablesorter tr.tablesorter-headerRow .header.headerSortUp .tablesorter-header-inner {
                color: #000;
                font-weight: bold;
            }

            table.tablesorter tr.tablesorter-headerRow .header.headerSortUp .tablesorter-header-inner:after {
                font-family: ZentaoIcon;
                font-weight: normal;
                content: "\f0d8";
                color: #000;
            }

            table.tablesorter tr.tablesorter-headerRow .header.headerSortDown .tablesorter-header-inner {
                color: #000;
                font-weight: bold;
            }

            table.tablesorter tr.tablesorter-headerRow .header.headerSortDown .tablesorter-header-inner:after {
                font-family: ZentaoIcon;
                font-weight: normal;
                content: "\f0d7";
                color: #000;
            }

            table.tablesorter tr.tablesorter-headerRow .header.sorter-false .tablesorter-header-inner:after {
                content: "";
            }

            table.tablesorter.table-borderless > thead > tr > th {
                border-bottom: 1px solid #e5e5e5;
            }
        </style>
        <script>
            function sortTable(selector, options) {
                var $table = $(selector);
                $table.tablesorter($.extend(
                    {
                        saveSort: true,
                        widgets: ['zebra', 'saveSort'],
                        widgetZebra: {css: ['odd', 'even']}
                    }, $table.data(), options)).on('mouseenter', 'tbody tr', function () {
                    $(this).addClass('hoover');
                }).on('mouseleave', 'tbody tr', function () {
                    $(this).removeClass('hoover');
                }).on('click', 'tbody tr', function () {
                    $(this).toggleClass('clicked');
                });
            }

            $.fn.sortTable = function (options) {
                return this.each(function () {
                    sortTable(this, options);
                });
            };
            /* sort table after page load. */
            $(function () {
                $('.tablesorter').sortTable();
            });
        </script>
        <div class='dashboard auto-fade-in fade' id='dashboard' data-confirm-remove-block='确定隐藏区块吗？'>
            <div class="row">
                <div class='col-main'>
                    <div class='panel block-statistic ' id='block370' data-id='370' data-name='项目统计' data-order='0'
                         data-url='/block-printBlock-370-my.html'>
                        <div class='panel-heading'>
                            <div class='panel-title'>项目统计</div>
                            <nav class='panel-actions nav nav-default'>
                                <li class='dropdown'>
                                    <a href='javascript:;' data-toggle='dropdown' class='panel-action'><i
                                                class='icon icon-ellipsis-v'></i></a>
                                    <ul class='dropdown-menu pull-right'>
                                        <li><a href='javascript:;' class='refresh-panel'><i class='icon-repeat'></i> 刷新</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href='/block-admin-0-my.html' data-toggle='modal' data-type='ajax'
                                               data-width='700' data-title='添加区块'>添加区块</a>
                                        </li>
                                        <li><a href='/block-ajaxReset-my.html' target='hiddenwin'>恢复默认</a>
                                        </li>
                                    </ul>
                                </li>
                            </nav>
                        </div>
                        <style>
                            .types-line {
                                display: table;
                                padding: 0;
                                margin: 0 auto;
                            }

                            .types-line > li {
                                display: table-cell;
                            }

                            .types-line > li > div {
                                position: relative;
                                padding: 18px 5px 5px;
                                text-align: center;
                            }

                            .types-line > li > div:before {
                                content: '';
                                display: block;
                                background: #eee;
                                width: 100%;
                                height: 2px;
                                position: absolute;
                                left: 50%;
                                top: 4px;
                            }

                            .types-line > li:last-child > div:before {
                                display: none;
                            }

                            .types-line > li > div:after {
                                content: '';
                                display: block;
                                background: #FFFFFF;
                                box-shadow: 0 2px 4px 0 rgba(170, 170, 170, 0.50), 0 0 5px 0 rgba(0, 0, 0, 0.1);
                                width: 10px;
                                height: 10px;
                                position: absolute;
                                border-radius: 50%;
                                top: 0;
                                left: 50%;
                                margin-left: -2px;
                            }

                            .types-line > li > div > small {
                                display: block;
                                color: #A6AAB8;
                            }

                            .types-line > li > div > span {
                                display: block;
                                color: #CBD0DB;
                                font-size: 16px;
                            }

                            .product-info {
                                position: relative;
                                height: 65px;
                            }

                            .product-info + .product-info {
                                margin-top: 10px;
                            }

                            .product-info .progress {
                                position: absolute;
                                left: 10px;
                                top: 35px;
                                right: 100px;
                            }

                            .product-info .progress-info {
                                position: absolute;
                                left: 8px;
                                top: 10px;
                                width: 180px;
                                font-size: 12px;
                            }

                            .product-info .type-info {
                                color: #A6AAB8;
                                text-align: center;
                                position: absolute;
                                right: 0;
                                top: 6px;
                                width: 100px;
                            }

                            html[lang="en"] .product-info .type-info {
                                color: #A6AAB8;
                                text-align: center;
                                position: absolute;
                                right: 0;
                                top: 6px;
                                width: 110px;
                            }

                            .product-info .type-value,
                            .product-info .type-label {
                                font-size: 12px;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                white-space: nowrap;
                            }

                            .product-info .type-value {
                                font-size: 14px;
                            }

                            .product-info .type-value > strong {
                                font-size: 20px;
                                color: #3C4353;
                            }

                            .product-info .actions {
                                position: absolute;
                                left: 10px;
                                top: 14px;
                            }

                            .block-statistic .panel-body {
                                padding-top: 0
                            }

                            .block-statistic .tile {
                                margin-bottom: 30px;
                            }

                            .block-statistic .tile-title {
                                font-size: 18px;
                                color: #A6AAB8;
                            }

                            .block-statistic .tile-amount {
                                font-size: 48px;
                                margin-bottom: 10px;
                            }

                            .block-statistic .col-nav {
                                border-right: 1px solid #EBF2FB;
                                width: 260px;
                                padding: 0;
                            }

                            .block-statistic .nav-secondary > li {
                                position: relative
                            }

                            .block-statistic .nav-secondary > li > a {
                                font-size: 14px;
                                color: #838A9D;
                                position: relative;
                                box-shadow: none;
                                padding-left: 20px;
                                white-space: nowrap;
                                text-overflow: ellipsis;
                                overflow: hidden;
                                transition: all .2s;
                            }

                            .block-statistic .nav-secondary > li > a:first-child {
                                padding-right: 36px;
                            }

                            .block-statistic .nav-secondary > li.active > a:first-child {
                                color: #3C4353;
                                background: transparent;
                                box-shadow: none;
                            }

                            .block-statistic .nav-secondary > li.active > a:first-child:hover,
                            .block-statistic .nav-secondary > li.active > a:first-child:focus,
                            .block-statistic .nav-secondary > li > a:first-child:hover {
                                box-shadow: none;
                                border-radius: 4px 0 0 4px;
                            }

                            .block-statistic .nav-secondary > li.active > a:first-child:before {
                                content: ' ';
                                display: block;
                                left: -1px;
                                top: 10px;
                                bottom: 10px;
                                width: 4px;
                                background: #006af1;
                                position: absolute;
                            }

                            .block-statistic .nav-secondary > li > a.btn-view {
                                position: absolute;
                                top: 0;
                                right: 0;
                                bottom: 0;
                                padding: 8px;
                                width: 36px;
                                text-align: center;
                                opacity: 0;
                            }

                            .block-statistic .nav-secondary > li:hover > a.btn-view {
                                opacity: 1
                            }

                            .block-statistic .nav-secondary > li.active > a.btn-view {
                                box-shadow: none
                            }

                            .block-statistic .nav-secondary > li.switch-icon {
                                display: none;
                            }

                            .block-statistic.block-sm .panel-body {
                                padding-bottom: 10px;
                                position: relative;
                                padding-top: 45px;
                                border-radius: 3px;
                            }

                            .block-statistic.block-sm .panel-body > .table-row,
                            .block-statistic.block-sm .panel-body > .table-row > .col {
                                display: block;
                                width: auto;
                            }

                            .block-statistic.block-sm .panel-body > .table-row > .tab-content {
                                padding: 0;
                                margin: 0 -5px;
                            }

                            .block-statistic.block-sm .tab-pane > .table-row > .col-5 {
                                width: 125px;
                            }

                            .block-statistic.block-sm .tab-pane > .table-row > .col-5 > .table-row {
                                padding: 5px 0;
                            }

                            .block-statistic.block-sm .col-nav {
                                border-left: none;
                                position: absolute;
                                top: 0;
                                left: 15px;
                                right: 15px;
                                background: #f5f5f5;
                            }

                            .block-statistic.block-sm .nav-secondary {
                                display: table;
                                width: 100%;
                                padding: 0;
                                table-layout: fixed;
                            }

                            .block-statistic.block-sm .nav-secondary > li {
                                display: none
                            }

                            .block-statistic.block-sm .nav-secondary > li.switch-icon,
                            .block-statistic.block-sm .nav-secondary > li.active {
                                display: table-cell;
                                width: 100%;
                                text-align: center;
                            }

                            .block-statistic.block-sm .nav-secondary > li.active > a:hover {
                                cursor: default;
                                background: none;
                            }

                            .block-statistic.block-sm .nav-secondary > li.switch-icon > a:hover {
                                background: rgba(0, 0, 0, 0.07);
                            }

                            .block-statistic.block-sm .nav-secondary > li > a {
                                padding: 5px 10px;
                                border-radius: 4px;
                            }

                            .block-statistic.block-sm .nav-secondary > li > a:before {
                                display: none;
                            }

                            .block-statistic.block-sm .nav-secondary > li.switch-icon {
                                width: 40px;
                            }

                            .block-statistic.block-sm .nav-secondary > li.active > a:first-child:before {
                                display: none
                            }

                            .block-statistic.block-sm .nav-secondary > li.active > a.btn-view {
                                width: auto;
                                left: 0;
                                right: 0;
                            }

                            .block-statistic.block-sm .nav-secondary > li.active > a.btn-view > i {
                                display: none;
                            }

                            .block-statistic.block-sm .nav-secondary > li.active > a.btn-view:hover {
                                cursor: pointer;
                                background: rgba(0, 0, 0, .1)
                            }

                            .status-count {
                                margin: auto
                            }

                            .status-count tr:first-child td:last-child {
                                color: #000;
                                font-weight: bold
                            }
                        </style>
                        <script>
                            $(function () {
                                var $nav = $('#nav-5e623493dbbd3');
                                $nav.on('click', '.switch-icon', function (e) {
                                    var isPrev = $(this).is('.prev');
                                    var $activeItem = $nav.children('.active');
                                    var $next = $activeItem[isPrev ? 'prev' : 'next']('li:not(.switch-icon)');
                                    if ($next.length) $next.find('a').trigger('click');
                                    else $nav.children('li:not(.switch-icon)')[isPrev ? 'last' : 'first']().find('a').trigger('click');
                                    e.preventDefault();
                                });

                                var $projectLi = $('#activeProject');
                                if ($projectLi.length) {
                                    var projectLi = $projectLi[0];
                                    $(".col ul.nav").animate({scrollTop: projectLi.offsetTop}, "slow");
                                }
                            });
                        </script>
                        <div class="panel-body">
                            <div class="table-row">
                                <div class="col col-nav">
                                    <ul class="nav nav-stacked nav-secondary scrollbar-hover" id='nav-5e623493dbbd3'>
                                        <li class='switch-icon prev'><a><i class='icon icon-arrow-left'></i></a></li>
                                        <li projectID='2'>
                                            <a href="###" data-target="#tab3Content2" data-toggle="tab">ZUI2002</a>
                                            <a href='/project-task-2.html' class='btn-view' title=任务列表><i
                                                        class='icon-arrow-right text-primary'></i></a>
                                        </li>
                                        <li projectID='1'>
                                            <a href="###" data-target="#tab3Content1" data-toggle="tab">ZUI1901</a>
                                            <a href='/project-task-1.html' class='btn-view' title=任务列表><i
                                                        class='icon-arrow-right text-primary'></i></a>
                                        </li>
                                        <li class='switch-icon next'><a><i class='icon icon-arrow-right'></i></a></li>
                                    </ul>
                                </div>
                                <div class="col tab-content">
                                    <div class="tab-pane fade active in" id="tab3Content2">
                                        <div class="table-row">
                                            <div class="col-5 text-middle text-center">
                                                <div class="progress-pie inline-block space" data-value="16"
                                                     data-doughnut-size="84">
                                                    <canvas width="120" height="120"></canvas>
                                                    <div class="progress-info">
                                                        <small>已完成</small>
                                                        <strong>16<small>%</small></strong>
                                                    </div>
                                                </div>
                                                <div class="table-row text-center small text-muted with-padding">
                                                    <div class="col-4 text-bottom">
                                                        <div>预计</div>
                                                        <div>29 <span class="muted">小时</span></div>
                                                    </div>
                                                    <div class="col-4">
                                                        <span class="label label-dot label-primary"></span>
                                                        <div>消耗</div>
                                                        <div>4.4 <span class="muted">小时</span></div>
                                                    </div>
                                                    <div class="col-4">
                                                        <span class="label label-dot label-pale"></span>
                                                        <div>剩余</div>
                                                        <div>23 <span class="muted">小时</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="product-info">
                                                    <div class="progress-info"><i
                                                                class="icon icon-check-circle text-success icon-sm"></i>
                                                        <span class="text-muted">昨日完成任务数</span> <strong>0</strong></div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="33"
                                                             aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                                        </div>
                                                    </div>
                                                    <div class="type-info">
                                                        <div class="type-label">
                                                            <table class='status-count'>
                                                                <tr>
                                                                    <td class='text-right'>总任务 :</td>
                                                                    <td class='text-left'><a
                                                                                href='/project-task-2-all.html'>9</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class='text-right'>未完成 :</td>
                                                                    <td class='text-left'><a
                                                                                href='/project-task-2-undone.html'>6</a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="progress-info"><i
                                                                class="icon icon-check-circle text-success icon-sm"></i>
                                                        <span class="text-muted">已发布需求数</span> <strong>0</strong></div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                             aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 0%"></div>
                                                    </div>
                                                    <div class="type-info">
                                                        <div class="type-label">
                                                            <table class='status-count'>
                                                                <tr>
                                                                    <td class='text-right'>总需求 :</td>
                                                                    <td class='text-left'><a
                                                                                href='/project-story-2-order_desc-all.html'>8</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class='text-right'>未关闭 :</td>
                                                                    <td class='text-left'><a
                                                                                href='/project-story-2-order_desc-unclosed.html'>8</a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="progress-info"><i
                                                                class="icon icon-check-circle text-success icon-sm"></i>
                                                        <span class="text-muted">昨天解决Bug数</span> <strong>0</strong>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                             aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        </div>
                                                    </div>
                                                    <div class="type-info">
                                                        <div class="type-label">
                                                            <table class='status-count'>
                                                                <tr>
                                                                    <td class='text-right'>所有 :</td>
                                                                    <td class='text-left'>0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class='text-right'>未解决 :</td>
                                                                    <td class='text-left'>0</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3Content1">
                                        <div class="table-row">
                                            <div class="col-5 text-middle text-center">
                                                <div class="progress-pie inline-block space" data-value="100"
                                                     data-doughnut-size="84">
                                                    <canvas width="120" height="120"></canvas>
                                                    <div class="progress-info">
                                                        <small>已完成</small>
                                                        <strong>100<small>%</small></strong>
                                                    </div>
                                                </div>
                                                <div class="table-row text-center small text-muted with-padding">
                                                    <div class="col-4 text-bottom">
                                                        <div>预计</div>
                                                        <div>35 <span class="muted">小时</span></div>
                                                    </div>
                                                    <div class="col-4">
                                                        <span class="label label-dot label-primary"></span>
                                                        <div>消耗</div>
                                                        <div>28.7 <span class="muted">小时</span></div>
                                                    </div>
                                                    <div class="col-4">
                                                        <span class="label label-dot label-pale"></span>
                                                        <div>剩余</div>
                                                        <div>0 <span class="muted">小时</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="product-info">
                                                    <div class="progress-info"><i
                                                                class="icon icon-check-circle text-success icon-sm"></i>
                                                        <span class="text-muted">昨日完成任务数</span> <strong>0</strong></div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                                             aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                        </div>
                                                    </div>
                                                    <div class="type-info">
                                                        <div class="type-label">
                                                            <table class='status-count'>
                                                                <tr>
                                                                    <td class='text-right'>总任务 :</td>
                                                                    <td class='text-left'><a
                                                                                href='/project-task-1-all.html'>17</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class='text-right'>未完成 :</td>
                                                                    <td class='text-left'>0</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="progress-info"><i
                                                                class="icon icon-check-circle text-success icon-sm"></i>
                                                        <span class="text-muted">已发布需求数</span> <strong>0</strong></div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                                             aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 100%"></div>
                                                    </div>
                                                    <div class="type-info">
                                                        <div class="type-label">
                                                            <table class='status-count'>
                                                                <tr>
                                                                    <td class='text-right'>总需求 :</td>
                                                                    <td class='text-left'><a
                                                                                href='/project-story-1-order_desc-all.html'>5</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class='text-right'>未关闭 :</td>
                                                                    <td class='text-left'>0</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="progress-info"><i
                                                                class="icon icon-check-circle text-success icon-sm"></i>
                                                        <span class="text-muted">昨天解决Bug数</span> <strong>0</strong>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                             aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        </div>
                                                    </div>
                                                    <div class="type-info">
                                                        <div class="type-label">
                                                            <table class='status-count'>
                                                                <tr>
                                                                    <td class='text-right'>所有 :</td>
                                                                    <td class='text-left'>0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class='text-right'>未解决 :</td>
                                                                    <td class='text-left'>0</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='panel block-flowchart ' id='block368' data-id='368' data-name='流程图' data-order='1'
                         data-url='/block-printBlock-368-my.html'>
                        <div class='panel-heading'>
                            <div class='panel-title'>流程图</div>
                            <nav class='panel-actions nav nav-default'>
                                <li class='dropdown'>
                                    <a href='javascript:;' data-toggle='dropdown' class='panel-action'><i
                                                class='icon icon-ellipsis-v'></i></a>
                                    <ul class='dropdown-menu pull-right'>
                                        <li><a href='javascript:;' class='refresh-panel'><i class='icon-repeat'></i> 刷新</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href='/block-admin-0-my.html' data-toggle='modal' data-type='ajax'
                                               data-width='700' data-title='添加区块'>添加区块</a>
                                        </li>
                                        <li><a href='/block-ajaxReset-my.html' target='hiddenwin'>恢复默认</a>
                                        </li>
                                    </ul>
                                </li>
                            </nav>
                        </div>
                        <div class='panel-body scrollbar-hover'>
                            <div class='row row-admin'>
                                <div class='flow-item flow-item-0'>
                                    <div title='管理员'>管理员</div>
                                </div>
                                <div class='flow-item flow-item-1'>
                                    <div title='维护公司'>维护公司</div>
                                </div>
                                <div class='flow-item flow-item-2'>
                                    <div title='添加用户'>添加用户</div>
                                </div>
                                <div class='flow-item flow-item-3'>
                                    <div title='维护权限'>维护权限</div>
                                </div>
                            </div>
                        </div>
                        <style>
                            .block-flowchart .panel-body {
                                padding: 0 30px 0 20px;
                            }

                            .flow-item {
                                float: left;
                                width: 16.66667%;
                                max-width: 180px;
                                text-align: center;
                                margin-bottom: 9px;
                                padding-right: 15px;
                            }

                            .flow-item > div {
                                position: relative;
                                padding: 5px 0 5px 8px;
                                line-height: 20px;
                                background: #E8EBEF;
                                white-space: nowrap;
                                overflow: visible;
                                color: #3c4353
                            }

                            .flow-item > div:before, .flow-item > div:after {
                                content: ' ';
                                display: block;
                                width: 0;
                                height: 0;
                                border-style: solid;
                                border-width: 15px 0 15px 10px;
                                border-color: transparent transparent transparent #E8EBEF;
                                position: absolute;
                                left: 0;
                                top: 0;
                            }

                            .ie-8 .flow-item > div:before {
                                display: none
                            }

                            .flow-item > div:before {
                                border-left-color: #fff;
                                z-index: 1
                            }

                            .flow-item > div:after {
                                left: auto;
                                right: -10px;
                                z-index: 2
                            }

                            .ie-8 .flow-item > div {
                                margin-right: 10px
                            }

                            .flow-item-0 > div {
                                color: #838A9D;
                                font-weight: bold;
                                padding-left: 0;
                            }

                            .flow-item-0 > div:before {
                                display: none
                            }

                            .flow-item-1 > div {
                                background: #E3F2FD
                            }

                            .flow-item-1 > div:after {
                                border-left-color: #E3F2FD
                            }

                            .flow-item-2 > div {
                                background: #E8F5E9
                            }

                            .flow-item-2 > div:after {
                                border-left-color: #E8F5E9
                            }

                            .flow-item-3 > div {
                                background: #FFF3E0
                            }

                            .flow-item-3 > div:after {
                                border-left-color: #FFF3E0
                            }

                            .flow-item-4 > div {
                                background: #FFEBEE
                            }

                            .flow-item-4 > div:after {
                                border-left-color: #FFEBEE
                            }

                            .flow-item-5 > div {
                                background: #F3E5F5
                            }

                            .flow-item-5 > div:after {
                                border-left-color: #F3E5F5
                            }

                            .flow-item-1 > div:hover {
                                background: #1565C0;
                                color: #fff;
                            }

                            .flow-item-1 > div:hover:after {
                                border-left-color: #1565C0
                            }

                            .flow-item-2 > div:hover {
                                background: #43A047;
                                color: #fff;
                            }

                            .flow-item-2 > div:hover:after {
                                border-left-color: #43A047
                            }

                            .flow-item-3 > div:hover {
                                background: #EF6C00;
                                color: #fff;
                            }

                            .flow-item-3 > div:hover:after {
                                border-left-color: #EF6C00
                            }

                            .flow-item-4 > div:hover {
                                background: #E53935;
                                color: #fff;
                            }

                            .flow-item-4 > div:hover:after {
                                border-left-color: #E53935
                            }

                            .flow-item-5 > div:hover {
                                background: #9C27B0;
                                color: #fff;
                            }

                            .flow-item-5 > div:hover:after {
                                border-left-color: #9C27B0
                            }

                            .block-sm .flow-item {
                                padding-right: 5px
                            }

                            .block-sm .flow-item > div:before, .block-sm .flow-item > div:after {
                                border-width: 15px 0 15px 6px;
                            }

                            .block-sm .row-3 .flow-item-1, .block-sm .row-3 .flow-item-3 {
                                width: 25%
                            }

                            .block-sm .flow-item > div:after {
                                right: -6px;
                            }
                        </style>
                    </div>


                </div>
                <div class='col-side'>
                    <div class='panel block-sm block-dynamic ' id='block367' data-id='367' data-name='最新动态'
                         data-order='4' data-url='/block-printBlock-367-my.html'>
                        <div class='panel-heading'>
                            <div class='panel-title'>最新动态</div>
                            <nav class='panel-actions nav nav-default'>
                                <li><a href='/company-dynamic.html' title='更多'><i class="icon icon-more"></i></a>
                                </li>
                                <li class='dropdown'>
                                    <a href='javascript:;' data-toggle='dropdown' class='panel-action'><i
                                                class='icon icon-ellipsis-v'></i></a>
                                    <ul class='dropdown-menu pull-right'>
                                        <li><a href='javascript:;' class='refresh-panel'><i class='icon-repeat'></i> 刷新</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href='/block-admin-0-my.html' data-toggle='modal' data-type='ajax'
                                               data-width='700' data-title='添加区块'>添加区块</a>
                                        </li>
                                        <li><a href='/block-ajaxReset-my.html' target='hiddenwin'>恢复默认</a>
                                        </li>
                                    </ul>
                                </li>
                            </nav>
                        </div>
                        <div class='empty-tip'>暂无信息</div>
                    </div>
                    <div class='panel block-sm block-overview ' id='block371' data-id='371' data-name='用户总览'
                         data-order='6' data-url='/block-printBlock-371-my.html'>
                        <div class='panel-heading'>
                            <div class='panel-title'>用户总览</div>
                            <nav class='panel-actions nav nav-default'>
                                <li class='dropdown'>
                                    <a href='javascript:;' data-toggle='dropdown' class='panel-action'><i
                                                class='icon icon-ellipsis-v'></i></a>
                                    <ul class='dropdown-menu pull-right'>
                                        <li><a href='javascript:;' class='refresh-panel'><i class='icon-repeat'></i> 刷新</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href='/block-admin-0-my.html' data-toggle='modal' data-type='ajax'
                                               data-width='700' data-title='添加区块'>添加区块</a>
                                        </li>
                                        <li><a href='/block-ajaxReset-my.html' target='hiddenwin'>恢复默认</a>
                                        </li>
                                    </ul>
                                </li>
                            </nav>
                        </div>
                        <style>
                            .block-overview .tile-amount {
                                font-size: 48px;
                                margin-bottom: 10px;
                            }
                        </style>
                        <div class="panel-body table-row">
                            <div class="col-4 text-middle text-center">
                                <div class="tile">
                                    <div class="tile-title">所有项目</div>
                                    <div class="tile-amount">2</div>
                                    <a class="btn btn-primary btn-circle btn-icon-right btn-sm"
                                       href="/project-all-all.html">查看所有 <span class="label label-badge label-icon"><i
                                                    class="icon icon-arrow-right"></i></span></a>
                                </div>
                            </div>
                            <div class="col-8 text-middle">
                                <ul class="status-bars">
                                    <li>
                                        <span class="bar" style="height: 0%"><span class="value">0</span></span>
                                        <span class="title">未开始</span>
                                    </li>
                                    <li>
        <span class="bar" style="height: 50%"><span class="value"><a href='/project-all-doing.html'>1</a>
</span></span>
                                        <span class="title">进行中</span>
                                    </li>
                                    <li>
                                        <span class="bar" style="height: 0%"><span class="value">0</span></span>
                                        <span class="title">已挂起</span>
                                    </li>
                                    <li>
        <span class="bar" style="height: 50%"><span class="value"><a href='/project-all-closed.html'>1</a>
</span></span>
                                        <span class="title">已关闭</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class='panel block-sm block-overview ' id='block373' data-id='373' data-name='产品总览'
                         data-order='7' data-url='/block-printBlock-373-my.html'>
                        <div class='panel-heading'>
                            <div class='panel-title'>产品总览</div>
                            <nav class='panel-actions nav nav-default'>
                                <li class='dropdown'>
                                    <a href='javascript:;' data-toggle='dropdown' class='panel-action'><i
                                                class='icon icon-ellipsis-v'></i></a>
                                    <ul class='dropdown-menu pull-right'>
                                        <li><a href='javascript:;' class='refresh-panel'><i class='icon-repeat'></i> 刷新</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href='/block-admin-0-my.html' data-toggle='modal' data-type='ajax'
                                               data-width='700' data-title='添加区块'>添加区块</a>
                                        </li>
                                        <li><a href='/block-ajaxReset-my.html' target='hiddenwin'>恢复默认</a>
                                        </li>
                                    </ul>
                                </li>
                            </nav>
                        </div>
                        <style>
                            .block-overview .status-list li + li {
                                margin-top: 5px;
                            }

                            .block-overview .status-list li > strong {
                                font-size: 16px;
                            }

                            .progress-pie {
                                position: relative;
                            }

                            .progress-pie .progress-info {
                                position: absolute;
                                width: 100%;
                                height: 100%;
                                left: 0;
                                top: 0;
                                text-align: center;
                                padding-top: 25px;
                            }

                            .progress-pie .progress-info > small {
                                display: block;
                                color: #A6AAB8;
                                line-height: 14px;
                            }

                            .progress-pie .progress-info > strong {
                                display: block;
                                font-size: 36px;
                                line-height: 40px;
                            }
                        </style>
                        <div class="panel-body table-row">
                            <div class="col-6 text-middle text-center">
                                <div class="progress-pie inline-block" data-value="100" data-doughnut-size="80">
                                    <canvas width="100" height="100" style="width: 100px; height: 100px;"></canvas>
                                    <div class="progress-info">
                                        <small>所有产品</small>
                                        <strong><a href='/product-all---all.html'>2</a>
                                        </strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 text-middle">
                                <ul class="list-unstyled status-list">
                                    <li><span class="status-product status-unclosed">正常</span> &nbsp; <strong><a
                                                    href='/product-all---noclosed.html'>2</a>
                                        </strong></li>
                                    <li><span class="status-product status-closed">结束</span> &nbsp; <strong>0</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            config.ordersSaved = '排序已保存';
            config.confirmRemoveBlock = '确定隐藏区块吗？';
            var module = 'my';
            var useGuest = true;
        </script>
        <script>/**
             * Delete block.
             *
             * @param  int    $index
             * @access public
             * @return void
             */
            function deleteBlock(index) {
                if (confirm(config.confirmRemoveBlock)) {
                    $.getJSON(createLink('block', 'delete', 'index=' + index + '&module=' + module), function (data) {
                        if (data.result != 'success') {
                            alert(data.message);
                            return false;
                        } else {
                            window.location.reload(true);
                        }
                    });
                }
            }

            /**
             * Sort blocks.
             *
             * @param  array $orders  format is {'blockid' : 1, 'block1' : 2}
             * @param  function $callback
             * @access public
             * @return void
             */
            function sortBlocks(newOrders, callback) {
                $.getJSON(createLink('block', 'sort', 'orders=' + newOrders.join(',') + '&module=' + module), callback);
            }

            /**
             * Resize block
             * @param  string $blockId
             * @param  function $callback
             * @access public
             * @return void
             */
            function resizeBlock(blockID, width, callback) {
                $.getJSON(createLink('block', 'resize', 'id=' + blockID + '&type=horizontal&data=' + width), function (data) {
                    callback && callback();
                    refreshBlock($('#block' + blockID));
                });
            }

            function refreshBlock($panel, afterRefresh) {
                var url = $panel.data('url');
                $panel.addClass('load-indicator loading');
                $.ajax({url: url, dataType: 'html'}).done(function (data) {
                    var $data = $(data);
                    if ($data.hasClass('panel')) $panel.empty().append($data.children());
                    else if ($panel.find('#assigntomeBlock').length) $panel.find('#assigntomeBlock').empty().append($data.children());
                    else {
                        $panel.children('.panel-move-handler,style,script').remove();
                        $panel.find('.panel-body,.empty-tip').replaceWith($data);
                    }
                    $panel.find('.progress-pie').progressPie();
                    if ($.isFunction(afterRefresh)) {
                        afterRefresh.call(this,
                            {
                                result: true,
                                data: data,
                                $panel: $panel
                            });
                    }
                    $panel.find('.tablesorter').sortTable();
                    initTableHeader($panel);
                }).fail(function () {
                    $panel.addClass('panel-error');
                    if ($.isFunction(afterRefresh)) {
                        afterRefresh.call(this,
                            {
                                result: false,
                                $panel: $panel
                            });
                    }
                }).always(function () {
                    $panel.removeClass('load-indicator loading');
                });
            }

            /**
             * Init table header
             * @access public
             * @return void
             */
            function initTableHeader($wrapper) {
                ($wrapper || $('#dashboard')).find('.panel-body > table.table-fixed-head').each(function () {
                    var $table = $(this);
                    var $tabPane = $table.closest('.tab-pane');
                    if ($tabPane.length && !$tabPane.hasClass('active')) {
                        $('[data-tab][href="#' + $tabPane.attr('id') + '"]').one('shown.zui.tab', function () {
                            initTableHeader($tabPane);
                        });
                        return;
                    }

                    var $panel = $tabPane.length ? $tabPane : $table.closest('.panel');

                    if (!$table.length || !$table.children('thead').length || ($panel.find('#assigntomeBlock').length && $panel.find('#assigntomeBlock > div').length > 1)) return;
                    var isFixed = $panel.find('.panel-body').height() < $table.outerHeight();

                    $panel.toggleClass('with-fixed-header', isFixed);
                    var $header = $panel.children('.table-header-fixed').toggle(isFixed);
                    if (!isFixed) {
                        $table.find('thead').css('visibility', 'visible');
                        return;
                    }
                    var tableWidth = $table.width();
                    var $oldTableHead = $table.find('thead');
                    var updateTh = function () {
                        $header.find('thead').empty().append($oldTableHead.find('tr').clone());
                    };
                    if (!$header.length) {
                        $header = $('<div class="table-header-fixed" style="position: absolute; left: 10px; top: 0; right: 0; padding: 0 10px 0 0; background: #fff;"><table class="table table-fixed no-margin"></table></div>').css('right', $panel.width() - tableWidth - 20);
                        $oldTableHead.find('th').each(function (idx) {
                            $(this).attr('data-idx', idx);
                        });
                        $header.find('.table').addClass($table.attr('class')).append($oldTableHead.css('visibility', 'hidden').clone().css('visibility', 'visible'));
                        $panel.addClass('with-fixed-header').append($header);
                        var $heading = $panel.children('.panel-heading');
                        if ($heading.length) $header.css('top', $heading.outerHeight());
                        if ($table.hasClass('tablesorter')) {
                            $header.on('mousedown mouseup', 'th[data-idx]', function (e) {
                                var $th = $(this);
                                $oldTableHead.find('th[data-idx="' + $th.data('idx') + '"]').trigger(e);
                                if (e.type === 'mouseup') {
                                    setTimeout(updateTh, 10);
                                    setTimeout(updateTh, 200);
                                }
                            });
                        }
                    } else {
                        updateTh();
                    }

                    var timeoutCall = null;
                    $table.parent().off('scroll.initTableHeader').on('scroll.initTableHeader', function () {
                        clearTimeout(timeoutCall);
                        var $tableContainer = $(this);
                        timeoutCall = setTimeout(function () {
                            $panel.toggleClass('table-scrolled', $tableContainer.scrollTop() > 0);
                        }, 200);
                    });
                });
            }

            /**
             * Check refresh progress
             * @param  object $dashboard
             * @access public
             * @return void
             */
            function checkRefreshProgress($dashboard, doneCallback) {
                if ($dashboard.find('.panel-loading').length) setTimeout(function () {
                    checkRefreshProgress($dashboard, doneCallback);
                }, 500);
                else doneCallback();
            }

            /**
             * Hidden block.
             *
             * @param  index $index
             * @access public
             * @return void
             */
            function hiddenBlock(index) {
                $.getJSON(createLink('block', 'delete', 'index=' + index + '&module=' + module + '&type=hidden'), function (data) {
                    if (data.result != 'success') {
                        alert(data.message);
                        return false;
                    }

                    $('#dashboard #block' + index).addClass('hidden');
                })
            }

            $(function () {
                initTableHeader();
                $(window).on('resize', function () {
                    initTableHeader();
                });

                // Init dashboard
                $('#dashboard').sortable(
                    {
                        selector: '.panel',
                        trigger: '.panel-heading,.panel-move-handler',
                        containerSelector: '.col-main,.col-side',
                        start: function () {
                            $('body').css('overflow', 'hidden');
                        },
                        finish: function (e) {
                            $('body').css('overflow', 'auto');
                            var newOrders = [];
                            var isSideCol = e.element.parent().is('.col-side');
                            e.list.each(function (index, data) {
                                newOrders.push(data.item.data('id'));
                            });
                            sortBlocks(newOrders, function () {
                                resizeBlock(e.element.data('id'), isSideCol ? 4 : 8);
                            });

                            e.element.toggleClass('block-sm', isSideCol);
                        }
                    }).on('click', '.refresh-panel', function () {
                    refreshBlock($(this).closest('.panel'));
                });
            });

        </script>
    </div>
    <script>
        $.initSidebar();
    </script>

    <iframe frameborder='0' name='hiddenwin' id='hiddenwin' scrolling='no' class='debugwin hidden'></iframe>

</main>
@include('admin.layouts._footer')
@include('admin.layouts._notifications')
<script>

    /* Alert got messages. */
    needPing = false;
    $(function () {
        var windowBlur = false;
        if (window.Notification) {
            window.onblur = function () {
                windowBlur = true;
            }
            window.onfocus = function () {
                windowBlur = false;
            }
        }
        setInterval(function () {
            $.get(createLink('message', 'ajaxGetMessage', "windowBlur=" + (windowBlur ? '1' : '0')), function (data) {
                if (!windowBlur) {
                    $('#noticeBox').append(data);
                    adjustNoticePosition();
                } else {
                    if (data) {
                        if (typeof data == 'string') data = $.parseJSON(data);
                        if (typeof data.message == 'string') notifyMessage(data);
                    }
                }
            });
        }, 300000);
    })

</script>

<script>
    $(function () {
        var scp = $('[data-id="changePassword"] a');
        var sign = config.requestType == 'GET' ? '&' : '?';
        scp.attr('href', scp.attr('href') + sign + 'onlybody=yes').modalTrigger({width: 500, type: 'iframe'});
    });
    $(function () {
        /* Set the heights of every block to keep them same height. */
        projectBoxHeight = $('#projectbox').height();
        productBoxHeight = $('#productbox').height();
        if (projectBoxHeight < 180) $('#projectbox').css('height', 180);
        if (productBoxHeight < 180) $('#productbox').css('height', 180);

        $('.panel-block').scroll(function () {
            var hasFixed = $(this).find('.fixedHead').size() > 0;
            if (!hasFixed) {
                $(this).css('position', 'relative');
                var hasHeading = $(this).find('.panel-heading').size() > 0;
                var fixed = hasHeading ? $(this).find('.panel-heading').clone() : "<table class='fixedHead' style='position:absolute;top:0px;z-index:10'><thead>" + $(this).find('table thead').html() + '</thead></table>';
                $(this).prepend(fixed);
                if (hasHeading) {
                    var firstHeading = $(this).find('.panel-heading:first');
                    var lastHeading = $(this).find('.panel-heading:last');
                    firstHeading.addClass('fixedHead');
                    firstHeading.css({'position': 'absolute', 'top': '0px'});
                    firstHeading.width(lastHeading.width());
                    firstHeading.height(lastHeading.height());
                } else {
                    var $fixTable = $(this).find('table.fixedHead');
                    $fixTable.addClass($(this).find('table:last').attr('class'));
                    var $dataTable = $(this).find('table:last thead th');
                    $fixTable.find('thead th').each(function (i) {
                        $fixTable.find('thead th').eq(i).width($dataTable.eq(i).width());
                    })
                }
            }
            $(this).find('.fixedHead').css('top', $(this).scrollTop());
        });
    });

</script>
<script>
    $('#poweredBy').append("<a href='\/user-logout.html' class='btn btn-sm btn-danger' id='signOut' style='color:#fff;'>\u7b7e\u9000<\/a>\n")
    if (new Date().getTime() < '1583488800000') {
        $('#poweredBy #signOut').click(function () {
            if (!confirm("\u8fd8\u672a\u5230\u6700\u665a\u7b7e\u9000\u65f6\u95f4\uff0c\u662f\u5426\u7b7e\u9000\uff1f")) return false;
        })
    }

    $.extend(
        {
            /**
             * Set ajax loader.
             *
             * Bind click event for some elements thus when click them,
             * use $.load to load page into target.
             *
             * @param string selector
             * @param string target
             */
            setAjaxLoader: function (selector, target) {
                /* Avoid duplication of binding */
                var data = $('body').data('ajaxLoader');
                if (data && data[selector]) return;
                if (!data) data = {};
                data[selector] = true;
                $('body').data('ajaxLoader', data);

                $(document).on('click', selector, function () {
                    var url = $(this).attr('href');
                    if (!url) url = $(this).data('rel');
                    if (!url) return false;

                    var $target = $(target);
                    if (!$target.size()) return false;

                    var width = $(this).data('width');
                    $target.load(url, function () {
                        if (width) $target.find('.modal-dialog').css('width', width);
                        if ($target.hasClass('modal') && $.zui.ajustModalPosition) $.zui.ajustModalPosition();
                    });

                    return false;
                });
            },

            /**
             * Set ajax jsoner.
             *
             * @param string   selector
             * @param object   callback
             */
            setAjaxJSONER: function (selector, callback) {
                $(document).on('click', selector, function () {
                    /* Try to get the href of current element, then try it's data-rel attribute. */
                    url = $(this).attr('href');
                    if (!url) url = $(this).data('rel');
                    if (!url) return false;

                    $.getJSON(url, function (response) {
                        /* If set callback, call it. */
                        if ($.isFunction(callback)) return callback(response);

                        /* If the response has message attribute, show it in #responser or alert it. */
                        if (response.message) {
                            if ($('#responser').length) {
                                $('#responser').html(response.message);
                                $('#responser').addClass('text-info f-12px');
                                $('#responser').show().delay(3000).fadeOut(100);
                            } else {
                                bootbox.alert(response.message);
                            }
                        }

                        /* If the response has locate param, locate the browse. */
                        if (response.locate) return location.href = response.locate;

                        /* If target and source returned in reponse, update target with the source. */
                        if (response.target && response.source) {
                            $(response.target).load(response.source);
                        }
                    });

                    return false;
                });
            },

            /**
             * Set ajax deleter.
             *
             * @param  string $selector
             * @access public
             * @return void
             */
            setAjaxDeleter: function (selector, callback) {
                $(document).on('click', selector, function () {
                    if (confirm('您确定要执行删除操作吗？')) {
                        var deleter = $(this);
                        deleter.text('删除中');

                        $.getJSON(deleter.attr('href'), function (data) {
                            callback && callback(data);
                            if (data.result == 'success') {
                                if (deleter.parents('#ajaxModal').size()) return $.reloadAjaxModal(1200);
                                if (data.locate) return location.href = data.locate;
                                return location.reload();
                            } else {
                                alert(data.message);
                                return location.reload();
                            }
                        });
                    }
                    return false;
                });
            },

            /**
             * Set reload deleter.
             *
             * @param  string $selector
             * @access public
             * @return void
             */
            setReloadDeleter: function (selector) {
                $(document).on('click', selector, function () {
                    if (confirm('您确定要执行删除操作吗？')) {
                        var deleter = $(this);
                        deleter.text('删除中');

                        $.getJSON(deleter.attr('href'), function (data) {
                            var afterDelete = deleter.data('afterDelete');
                            if ($.isFunction(afterDelete)) {
                                $.proxy(afterDelete, deleter)(data);
                            }

                            if (data.result == 'success') {
                                var table = $(deleter).closest('table');
                                var replaceID = table.attr('id');

                                table.wrap("<div id='tmpDiv'></div>");
                                var $tmpDiv = $('#tmpDiv');
                                $tmpDiv.load(document.location.href + ' #' + replaceID, function () {
                                    $tmpDiv.replaceWith($tmpDiv.html());
                                    var $target = $('#' + replaceID);
                                    $target.find('.reloadDeleter').data('afterDelete', afterDelete);
                                    $target.find('[data-toggle="modal"]').modalTrigger();
                                    if ($target.hasClass('table-data')) {
                                        $target.dataTable();
                                    }
                                    if (typeof sortTable == 'function') {
                                        sortTable();
                                    } else {
                                        $('tfoot td').css('background', 'white').unbind('click').unbind('hover');
                                    }
                                });
                            } else {
                                alert(data.message);
                            }
                        });
                    }
                    return false;
                });
            },

            /**
             * Set reload.
             *
             * @param  string $selector
             * @access public
             * @return void
             */
            setReload: function (selector) {
                $(document).on('click', selector, function () {
                    var reload = $(this);
                    $.getJSON(reload.attr('href'), function (data) {
                        if (data.result == 'success') {
                            var table = $(reload).closest('table');
                            var replaceID = table.attr('id');

                            table.wrap("<div id='tmpDiv'></div>");
                            $('#tmpDiv').load(document.location.href + ' #' + replaceID, function () {
                                $('#tmpDiv').replaceWith($('#tmpDiv').html());
                                if (typeof sortTable == 'function') {
                                    sortTable();
                                } else {
                                    $('tfoot td').css('background', 'white').unbind('click').unbind('hover');
                                }
                            });
                        } else {
                            alert(data.message);
                        }
                    });
                    return false;
                });
            },

            /**
             * Reload ajax modal.
             *
             * @param int duration
             * @access public
             * @return void
             */
            reloadAjaxModal: function (duration) {
                if (typeof (duration) == 'undefined') duration = 1000;
                setTimeout(function () {
                    var modal = $('#ajaxModal');
                    modal.load(modal.attr('ref'), function () {
                        $(this).find('.modal-dialog').css('width', $(this).data('width'));
                        $.zui.ajustModalPosition()
                    })
                }, duration);
            }
        });

    $(function () {
        $.setAjaxDeleter('.deleter');
        $.setAjaxLoader('.loadInModal', '#triggerModal');
        $('[data-toggle="tooltip"]').tooltip();
        $.ajaxForm('#ajaxForm');
    })

    function setRequiredFields() {
        if (!config.requiredFields) return false;
        requiredFields = config.requiredFields.split(',');
        for (i = 0; i < requiredFields.length; i++) {
            $('#' + requiredFields[i]).closest('td,th').prepend("<div class='required required-wrapper'></div>");
            var colEle = $('#' + requiredFields[i]).closest('[class*="col-"]');
            if (colEle.parent().hasClass('form-group')) colEle.addClass('required');
        }
    }
</script>
<script>
    $.extend({
        gotoObject: function () {
            objectType = $('#searchType').attr('value');
            objectValue = $('input#searchInput').attr('value');
            if (objectType && objectValue) {
                var reg = /[^0-9]/;
                if (reg.test(objectValue) || objectType == 'all') {
                    location.href = createLink('search', 'index') + (config.requestType == 'PATH_INFO' ? '?' : '&') + 'words=' + objectValue;
                } else {
                    location.href = createLink(objectType, 'view', "id=" + objectValue);
                }
            }
        }
    });

    $(function () {
        var reg = /[^0-9]/;
        var $searchbox = $('#searchbox');
        var $typeSelector = $searchbox.find('.input-group-btn');
        var $dropmenu = $typeSelector.children('.dropdown-menu');
        var $searchQuery = $('#searchInput');
        var searchType = $('#searchType').val();

        var toggleMenu = function (show) {
            $searchbox.toggleClass('open', show);
            $dropmenu.toggleClass('show', show).toggleClass('in', show);
            if (show) $dropmenu.show();
            else $dropmenu.hide();
        };

        var hideMenu = function () {
            toggleMenu(false);
        };

        var refreshMenu = function () {
            var val = $searchQuery.val();
            if (val !== null && val !== "") {
                var isQuickGo = !reg.test(val);
                $dropmenu.toggleClass('show-quick-go', isQuickGo);
                var $typeAll = $dropmenu.find('li.search-type-all > a');
                $typeAll.html('搜索 <span>"' + val + '"</span>');
                if (isQuickGo) {
                    $typeAll.closest('li').removeClass('active');
                    $dropmenu.removeClass('with-active').find('li:not(.search-type-all) > a').each(function () {
                        var $this = $(this);
                        var isActiveType = $this.data('value') === searchType && searchType !== 'all';
                        $this.closest('li').toggleClass('active', isActiveType);
                        $this.html($this.data('name') + ' <span>#' + (val.length > 4 ? (val.substr(0, 4) + '...') : val) + "</span>");
                        if (isActiveType) $dropmenu.addClass('with-active');
                    });
                } else {
                    $dropmenu.find('li.active').removeClass('active');
                    $typeAll.closest('li').addClass('active');
                }
                toggleMenu(true);
            } else {
                hideMenu();
            }
        };

        $dropmenu = $dropmenu.appendTo($searchbox);
        $dropmenu.on('click', 'a', function (e) {
            $('#searchType').val($(this).data('value'));
            $.gotoObject();
            e.stopPropagation();
        }).find('li > a').each(function () {
            var $this = $(this);
            $this.attr('data-name', $this.text());
        });
        var $allItem = $dropmenu.find('li > a[data-value="all"]');
        if ($allItem.length) {
            $allItem.closest('li').addClass('search-type-all').prependTo($dropmenu);
        }
        $searchQuery.on('change keyup paste input propertychange', refreshMenu).on('focus', function () {
            setTimeout(refreshMenu, 300);
        });

        $(document).on('click', hideMenu);
    });
</script>
<script>
    $(function () {
        $('#poweredBy a').eq(1).html('<i class="icon-zentao"></i> 禅道企业版 3.6');
    })
</script>
<script>
    function setFeedbackView(feedbackView) {
        $.cookie('feedbackView', feedbackView, {expires: config.cookieLife, path: config.webRoot});
        location.href = createLink('index', 'index');
    }

    $(function () {
        $('#mainHeader #heading').append(" <a href='javascript:setFeedbackView(1)' class='btn btn-sm btn-primary'>研发</a>");
    })
</script>
<script>
    $(function () {
        $('#companyname').after("<a href='/company-plan.html' class='planUsage btn' style='color:yellow'>旗舰版</a>");
        $("a.planUsage").modalTrigger({width: 800, iframe: true, transition: 'elastic', speed: 350, scrolling: false});
        $('#poweredBy a').eq(1).html('<i class="icon-zentao"></i> 禅道企业版 3.6');
        $('#poweredBy').prepend("");
        $('#poweredBy').prepend("");
    })
</script>
</body>
</html>

@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <script>deptID = 0;</script>
        <script>confirmDelete = "\u60a8\u786e\u5b9a\u5220\u9664\u8be5\u7528\u6237\u5417\uff1f";</script>
        <div id="mainMenu" class="clearfix">
            <div id="sidebarHeader">
                <div class="title">
                    部门结构          </div>
            </div>
            <div class="btn-toolbar pull-left">
                <a class="btn btn-link querybox-toggle" id="bysearchTab"><i class="icon icon-search muted"></i> 搜索</a>
            </div>
            <div class="btn-toolbar pull-right">
            </div>
        </div>
        <div id="mainContent" class="main-row fade in">
            <div class="side-col" id="sidebar">
                <div class="sidebar-toggle"><i class="icon icon-angle-left" style="top: 388.5px;"></i></div>
                <div class="cell">
                    <ul class="tree" data-ride="tree" data-name="tree-dept" data-idx="0"><li data-idx="1" data-id="1"><a href="/index.php?m=company&amp;f=browse&amp;dept=1" id="dept1">MgrBkg</a>

                        </li>
                        <li data-idx="2" data-id="2"><a href="/index.php?m=company&amp;f=browse&amp;dept=2" id="dept2">Client</a>

                        </li>
                        <li data-idx="3" data-id="3"><a href="/index.php?m=company&amp;f=browse&amp;dept=3" id="dept3">GoServer</a>

                        </li>
                        <li data-idx="4" data-id="4"><a href="/index.php?m=company&amp;f=browse&amp;dept=5" id="dept5">Python</a>

                        </li>
                        <li data-idx="5" data-id="5"><a href="/index.php?m=company&amp;f=browse&amp;dept=6" id="dept6">MatchBkg</a>

                        </li>
                        <li data-idx="6" data-id="6"><a href="/index.php?m=company&amp;f=browse&amp;dept=7" id="dept7">PM</a>

                        </li>
                    </ul>
                    <div class="text-center">
                    </div>
                </div>
            </div>
            <div class="main-col">
                <div class="cell load-indicator" id="queryBox"><script>
                        var chooseUsersToMail    = '选择要发信通知的用户...';
                        $(document).ready(function()
                        {
                            $("#mailto").attr('data-placeholder', chooseUsersToMail);
                            $("#mailto, #productID").chosen();
                        });
                    </script>
                    <style>
                        #selectPeriod {padding: 4px 0; height: 197px; min-width: 120px}
                        #selectPeriod > .dropdown-header {background: #f1f1f1; display: block; text-align: center; padding: 4px 0; line-height: 20px; margin: 5px 10px; font-size: 14px; border-radius: 2px; color: #333; font-size: 12px}
                        #groupAndOr {display: inline-block;}
                        #searchForm-5e6239b40ba04 > table {margin: 0 auto;}
                        #searchForm-5e6239b40ba04 > table > tbody > tr > td {padding: 8px;}
                        #searchForm-5e6239b40ba04 .form-actions {padding-bottom: 20px; padding-top: 0;}
                        #searchForm-5e6239b40ba04 [id^="valueBox"] .chosen-container .chosen-single {min-width: 100px;}
                        #searchForm-5e6239b40ba04 .chosen-container .chosen-drop ul.chosen-results li {white-space:normal}
                        #searchForm-5e6239b40ba04 input.date::-webkit-input-placeholder {color: #838A9D; opacity: 1;}
                        #searchForm-5e6239b40ba04 input.date::-moz-placeholder {color: #838A9D; opacity: 1;}
                        #searchForm-5e6239b40ba04 input.date:-ms-input-placeholder {color: #838A9D; opacity: 1;}
                        #searchForm-5e6239b40ba04 .btn-expand-form {background: transparent;}
                        #searchForm-5e6239b40ba04 .btn-expand-form:hover {background: #e9f2fb;}
                        .showmore .btn-expand-form .icon-chevron-double-down:before {content: '\e959';}

                        #queryBox select[id^="operator"] {padding-right:2px; padding-left:5px;}
                        #queryBox select#groupAndOr {padding-right:2px; padding-left:5px;}
                        #queryBox .chosen-container-single .chosen-single>span {margin-right:5px;}

                        #queryBox .form-actions .btn {margin-right: 5px;}
                        #userQueries {border-left: 1px solid #eee; vertical-align: top;}
                        #userQueries > h4 {margin: 0 0 6px;}
                        #userQueries ul {list-style: none; padding-left: 0; margin: 0; max-height:75px; overflow:auto;}
                        .showmore #userQueries ul {max-height:170px;}
                        #userQueries ul li + li {margin-top: 5px;}
                        #userQueries .label {line-height: 24px; padding: 0 20px 0 8px; display: inline-block; background-color: #EEEEEE; color: #A6AAB8; border-radius: 12px; max-width: 100%; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; position: relative;}
                        #userQueries .label:hover {background-color: #aaa; color: #fff;}
                        #userQueries .label > .icon-close {position: absolute; top: 2px; right: 2px; border-radius: 9px; font-size: 12px; line-height: 18px; width: 18px; display: inline-block;}
                        #userQueries .label > .icon-close:hover {background-color: #ff5d5d; color: #fff;}
                        @media (max-width: 1150px) {#userQueries {display: none}}
                        #toggle-queries{position: absolute; right: 0px; top: 40px; width: 13px; background: #79cdfb; border-radius: 6px; height: 30px;cursor: pointer}
                        #toggle-queries .icon{ position: absolute; top: 6px; right: -2px; color: #fff;}

                        .fieldWidth{width:130px !important;}
                        .operatorWidth{width:110px !important;}
                        html[lang^='zh-'] .fieldWidth{width:110px !important;}
                        html[lang^='zh-'] .operatorWidth{width:90px !important;}
                    </style>
                    <div id="toggle-queries">
                        <i class="icon icon-angle-left"></i>
                    </div>
                    <form method="post" action="/index.php?m=search&amp;f=buildQuery" target="hiddenwin" id="searchForm-5e6239b40ba04" class="search-form">
                        <div class="hidden">
                            <div id="boxrealname"><input type="text" name="fieldrealname" id="fieldrealname" value="" class="form-control searchInput" autocomplete="off">
                            </div><div id="boxemail"><input type="text" name="fieldemail" id="fieldemail" value="" class="form-control searchInput" autocomplete="off">
                            </div><div id="boxdept"><select name="fielddept" id="fielddept" class="form-control searchSelect">
                                    <option value="ZERO" title="/" data-keys="/ /">/</option>
                                    <option value="" selected="selected" title="" data-keys=" "></option>
                                    <option value="1" title="/MgrBkg" data-keys="/mgrbkg /m">/MgrBkg</option>
                                    <option value="2" title="/Client" data-keys="/client /c">/Client</option>
                                    <option value="3" title="/GoServer" data-keys="/goserver /g">/GoServer</option>
                                    <option value="5" title="/Python" data-keys="/python /p">/Python</option>
                                    <option value="6" title="/MatchBkg" data-keys="/matchbkg /m">/MatchBkg</option>
                                    <option value="7" title="/PM" data-keys="/pm /p">/PM</option>
                                </select>
                            </div><div id="boxaccount"><input type="text" name="fieldaccount" id="fieldaccount" value="" class="form-control searchInput" autocomplete="off">
                            </div><div id="boxrole"><select name="fieldrole" id="fieldrole" class="form-control searchSelect">
                                    <option value="" selected="selected" title="" data-keys=" "></option>
                                    <option value="dev" title="研发" data-keys="yanfa yf">研发</option>
                                    <option value="qa" title="测试" data-keys="ceshi cs">测试</option>
                                    <option value="pm" title="项目经理" data-keys="xiangmujingli xmjl">项目经理</option>
                                    <option value="po" title="产品经理" data-keys="chanpinjingli cpjl">产品经理</option>
                                    <option value="td" title="研发主管" data-keys="yanfazhuguan yfzg">研发主管</option>
                                    <option value="pd" title="产品主管" data-keys="chanpinzhuguan cpzg">产品主管</option>
                                    <option value="qd" title="测试主管" data-keys="ceshizhuguan cszg">测试主管</option>
                                    <option value="top" title="高层管理" data-keys="gaocengguanli gcgl">高层管理</option>
                                    <option value="others" title="其他" data-keys="qita qt">其他</option>
                                    <option value="null" title="空" data-keys="kong k">空</option>
                                </select>
                            </div><div id="boxphone"><input type="text" name="fieldphone" id="fieldphone" value="" class="form-control searchInput" autocomplete="off">
                            </div><div id="boxjoin"><input type="text" name="fieldjoin" id="fieldjoin" value="" class="form-control searchInput" autocomplete="off">
                            </div><div id="boxid"><input type="text" name="fieldid" id="fieldid" value="" class="form-control searchInput" autocomplete="off">
                            </div><div id="boxcommiter"><select name="fieldcommiter" id="fieldcommiter" class="form-control searchSelect">
                                    <option value="0" title="" data-keys=" "></option>
                                </select>
                            </div><div id="boxgender"><select name="fieldgender" id="fieldgender" class="form-control searchSelect">
                                    <option value="m" title="男" data-keys="nan n">男</option>
                                    <option value="f" title="女" data-keys="nv n">女</option>
                                    <option value="null" title="空" data-keys="kong k">空</option>
                                </select>
                            </div><div id="boxqq"><input type="text" name="fieldqq" id="fieldqq" value="" class="form-control searchInput" autocomplete="off">
                            </div><div id="boxskype"><input type="text" name="fieldskype" id="fieldskype" value="" class="form-control searchInput" autocomplete="off">
                            </div><div id="boxdingding"><input type="text" name="fielddingding" id="fielddingding" value="" class="form-control searchInput" autocomplete="off">
                            </div><div id="boxweixin"><input type="text" name="fieldweixin" id="fieldweixin" value="" class="form-control searchInput" autocomplete="off">
                            </div><div id="boxslack"><input type="text" name="fieldslack" id="fieldslack" value="" class="form-control searchInput" autocomplete="off">
                            </div><div id="boxwhatsapp"><input type="text" name="fieldwhatsapp" id="fieldwhatsapp" value="" class="form-control searchInput" autocomplete="off">
                            </div><div id="boxaddress"><input type="text" name="fieldaddress" id="fieldaddress" value="" class="form-control searchInput" autocomplete="off">
                            </div><div id="boxzipcode"><input type="text" name="fieldzipcode" id="fieldzipcode" value="" class="form-control searchInput" autocomplete="off">
                            </div></div>
                        <table class="table table-condensed table-form" id="user-search">
                            <tbody>
                            <tr>
                                <td class="w-400px">
                                    <table class="table table-form table-fixed">
                                        <tbody>
                                        <tr id="searchbox1" class=""><td class="text-right w-80px"><span id="searchgroup1"><strong>第一组</strong></span><input type="hidden" name="andOr1" id="andOr1" value="AND">
                                            </td><td class="fieldWidth" style="overflow: visible"><select name="field1" id="field1" onchange="setField(this, 1, userparams)" class="form-control chosen chosen-controled" style="display: none;">
                                                    <option value="realname" selected="selected" title="真实姓名" data-keys="zhenshixingming zsxm">真实姓名</option>
                                                    <option value="email" title="邮箱" data-keys="youxiang yx">邮箱</option>
                                                    <option value="dept" title="所属部门" data-keys="suoshubumen ssbm">所属部门</option>
                                                    <option value="account" title="用户名" data-keys="yonghuming yhm">用户名</option>
                                                    <option value="role" title="职位" data-keys="zhiwei zw">职位</option>
                                                    <option value="phone" title="电话" data-keys="dianhua dh">电话</option>
                                                    <option value="join" title="入职日期" data-keys="ruzhiriqi rzrq">入职日期</option>
                                                    <option value="id" title="用户编号" data-keys="yonghubianhao yhbh">用户编号</option>
                                                    <option value="commiter" title="源代码帐号" data-keys="yuandaimazhanghao ydmzh">源代码帐号</option>
                                                    <option value="gender" title="性别" data-keys="xingbie xb">性别</option>
                                                    <option value="qq" title="QQ" data-keys="qq q">QQ</option>
                                                    <option value="skype" title="Skype" data-keys="skype s">Skype</option>
                                                    <option value="dingding" title="钉钉" data-keys="dingding dd">钉钉</option>
                                                    <option value="weixin" title="微信" data-keys="weixin wx">微信</option>
                                                    <option value="slack" title="Slack" data-keys="slack s">Slack</option>
                                                    <option value="whatsapp" title="WhatsApp" data-keys="whatsapp w">WhatsApp</option>
                                                    <option value="address" title="通讯地址" data-keys="tongxundizhi txdz">通讯地址</option>
                                                    <option value="zipcode" title="邮编" data-keys="youbian yb">邮编</option>
                                                </select><div class="chosen-container chosen-container-single chosen-compact chosen-highlight-selected chosen-with-search" style="width: 100%;" title="" id="field1_chosen"><a class="chosen-single" tabindex="-1"><span title="真实姓名">真实姓名</span><div><b></b></div><div class="chosen-search"><input type="text" autocomplete="off" placeholder="真实姓名"></div></a><div class="chosen-drop chosen-auto-max-width chosen-no-wrap"><ul class="chosen-results"></ul></div></div>
                                            </td><td class="operatorWidth"><select name="operator1" id="operator1" class="form-control">
                                                    <option value="=" title="=" data-keys=" ">=</option>
                                                    <option value="!=" title="!=" data-keys="! !">!=</option>
                                                    <option value=">" title=">" data-keys=" ">&gt;</option>
                                                    <option value=">=" title=">=" data-keys=" ">&gt;=</option>
                                                    <option value="<" title="<" data-keys=" ">&lt;</option>
                                                    <option value="<=" title="<=" data-keys=" ">&lt;=</option>
                                                    <option value="include" selected="selected" title="包含" data-keys="baohan bh">包含</option>
                                                    <option value="between" title="介于" data-keys="jieyu jy">介于</option>
                                                    <option value="notinclude" title="不包含" data-keys="bubaohan bbh">不包含</option>
                                                    <option value="belong" title="从属于" data-keys="congshuyu csy">从属于</option>
                                                </select>
                                            </td><td id="valueBox1" style="overflow:visible"><input type="text" name="value1" id="value1" value="" class="form-control  searchInput" autocomplete="off">
                                            </td></tr><tr id="searchbox2" class="hidden"><td class="text-right w-80px"><select name="andOr2" id="andOr2" class="form-control">
                                                    <option value="and" selected="selected" title="并且" data-keys="bingqie bq">并且</option>
                                                    <option value="or" title="或者" data-keys="huozhe hz">或者</option>
                                                </select>
                                            </td><td class="fieldWidth" style="overflow: visible"><select name="field2" id="field2" onchange="setField(this, 2, userparams)" class="form-control chosen chosen-controled" style="display: none;">
                                                    <option value="realname" title="真实姓名" data-keys="zhenshixingming zsxm">真实姓名</option>
                                                    <option value="email" selected="selected" title="邮箱" data-keys="youxiang yx">邮箱</option>
                                                    <option value="dept" title="所属部门" data-keys="suoshubumen ssbm">所属部门</option>
                                                    <option value="account" title="用户名" data-keys="yonghuming yhm">用户名</option>
                                                    <option value="role" title="职位" data-keys="zhiwei zw">职位</option>
                                                    <option value="phone" title="电话" data-keys="dianhua dh">电话</option>
                                                    <option value="join" title="入职日期" data-keys="ruzhiriqi rzrq">入职日期</option>
                                                    <option value="id" title="用户编号" data-keys="yonghubianhao yhbh">用户编号</option>
                                                    <option value="commiter" title="源代码帐号" data-keys="yuandaimazhanghao ydmzh">源代码帐号</option>
                                                    <option value="gender" title="性别" data-keys="xingbie xb">性别</option>
                                                    <option value="qq" title="QQ" data-keys="qq q">QQ</option>
                                                    <option value="skype" title="Skype" data-keys="skype s">Skype</option>
                                                    <option value="dingding" title="钉钉" data-keys="dingding dd">钉钉</option>
                                                    <option value="weixin" title="微信" data-keys="weixin wx">微信</option>
                                                    <option value="slack" title="Slack" data-keys="slack s">Slack</option>
                                                    <option value="whatsapp" title="WhatsApp" data-keys="whatsapp w">WhatsApp</option>
                                                    <option value="address" title="通讯地址" data-keys="tongxundizhi txdz">通讯地址</option>
                                                    <option value="zipcode" title="邮编" data-keys="youbian yb">邮编</option>
                                                </select><div class="chosen-container chosen-container-single chosen-compact chosen-highlight-selected chosen-with-search" style="width: 100%;" title="" id="field2_chosen"><a class="chosen-single" tabindex="-1"><span title="邮箱">邮箱</span><div><b></b></div><div class="chosen-search"><input type="text" autocomplete="off" placeholder="邮箱"></div></a><div class="chosen-drop chosen-auto-max-width chosen-no-wrap"><ul class="chosen-results"></ul></div></div>
                                            </td><td class="operatorWidth"><select name="operator2" id="operator2" class="form-control">
                                                    <option value="=" title="=" data-keys=" ">=</option>
                                                    <option value="!=" title="!=" data-keys="! !">!=</option>
                                                    <option value=">" title=">" data-keys=" ">&gt;</option>
                                                    <option value=">=" title=">=" data-keys=" ">&gt;=</option>
                                                    <option value="<" title="<" data-keys=" ">&lt;</option>
                                                    <option value="<=" title="<=" data-keys=" ">&lt;=</option>
                                                    <option value="include" selected="selected" title="包含" data-keys="baohan bh">包含</option>
                                                    <option value="between" title="介于" data-keys="jieyu jy">介于</option>
                                                    <option value="notinclude" title="不包含" data-keys="bubaohan bbh">不包含</option>
                                                    <option value="belong" title="从属于" data-keys="congshuyu csy">从属于</option>
                                                </select>
                                            </td><td id="valueBox2" style="overflow:visible"><input type="text" name="value2" id="value2" value="" class="form-control  searchInput" autocomplete="off">
                                            </td></tr><tr id="searchbox3" class="hidden"><td class="text-right w-80px"><select name="andOr3" id="andOr3" class="form-control">
                                                    <option value="and" selected="selected" title="并且" data-keys="bingqie bq">并且</option>
                                                    <option value="or" title="或者" data-keys="huozhe hz">或者</option>
                                                </select>
                                            </td><td class="fieldWidth" style="overflow: visible"><select name="field3" id="field3" onchange="setField(this, 3, userparams)" class="form-control chosen chosen-controled" style="display: none;">
                                                    <option value="realname" title="真实姓名" data-keys="zhenshixingming zsxm">真实姓名</option>
                                                    <option value="email" title="邮箱" data-keys="youxiang yx">邮箱</option>
                                                    <option value="dept" selected="selected" title="所属部门" data-keys="suoshubumen ssbm">所属部门</option>
                                                    <option value="account" title="用户名" data-keys="yonghuming yhm">用户名</option>
                                                    <option value="role" title="职位" data-keys="zhiwei zw">职位</option>
                                                    <option value="phone" title="电话" data-keys="dianhua dh">电话</option>
                                                    <option value="join" title="入职日期" data-keys="ruzhiriqi rzrq">入职日期</option>
                                                    <option value="id" title="用户编号" data-keys="yonghubianhao yhbh">用户编号</option>
                                                    <option value="commiter" title="源代码帐号" data-keys="yuandaimazhanghao ydmzh">源代码帐号</option>
                                                    <option value="gender" title="性别" data-keys="xingbie xb">性别</option>
                                                    <option value="qq" title="QQ" data-keys="qq q">QQ</option>
                                                    <option value="skype" title="Skype" data-keys="skype s">Skype</option>
                                                    <option value="dingding" title="钉钉" data-keys="dingding dd">钉钉</option>
                                                    <option value="weixin" title="微信" data-keys="weixin wx">微信</option>
                                                    <option value="slack" title="Slack" data-keys="slack s">Slack</option>
                                                    <option value="whatsapp" title="WhatsApp" data-keys="whatsapp w">WhatsApp</option>
                                                    <option value="address" title="通讯地址" data-keys="tongxundizhi txdz">通讯地址</option>
                                                    <option value="zipcode" title="邮编" data-keys="youbian yb">邮编</option>
                                                </select><div class="chosen-container chosen-container-single chosen-compact chosen-highlight-selected chosen-with-search" style="width: 100%;" title="" id="field3_chosen"><a class="chosen-single" tabindex="-1"><span title="所属部门">所属部门</span><div><b></b></div><div class="chosen-search"><input type="text" autocomplete="off" placeholder="所属部门"></div></a><div class="chosen-drop chosen-auto-max-width chosen-no-wrap"><ul class="chosen-results"></ul></div></div>
                                            </td><td class="operatorWidth"><select name="operator3" id="operator3" class="form-control">
                                                    <option value="=" title="=" data-keys=" ">=</option>
                                                    <option value="!=" title="!=" data-keys="! !">!=</option>
                                                    <option value=">" title=">" data-keys=" ">&gt;</option>
                                                    <option value=">=" title=">=" data-keys=" ">&gt;=</option>
                                                    <option value="<" title="<" data-keys=" ">&lt;</option>
                                                    <option value="<=" title="<=" data-keys=" ">&lt;=</option>
                                                    <option value="include" title="包含" data-keys="baohan bh">包含</option>
                                                    <option value="between" title="介于" data-keys="jieyu jy">介于</option>
                                                    <option value="notinclude" title="不包含" data-keys="bubaohan bbh">不包含</option>
                                                    <option value="belong" selected="selected" title="从属于" data-keys="congshuyu csy">从属于</option>
                                                </select>
                                            </td><td id="valueBox3" style="overflow:visible"><select name="value3" id="value3" class="form-control searchSelect chosen chosen-controled" style="display: none;">
                                                    <option value="ZERO" title="/" data-keys="/ /">/</option>
                                                    <option value="" selected="selected" title="" data-keys=" "></option>
                                                    <option value="1" title="/MgrBkg" data-keys="/mgrbkg /m">/MgrBkg</option>
                                                    <option value="2" title="/Client" data-keys="/client /c">/Client</option>
                                                    <option value="3" title="/GoServer" data-keys="/goserver /g">/GoServer</option>
                                                    <option value="5" title="/Python" data-keys="/python /p">/Python</option>
                                                    <option value="6" title="/MatchBkg" data-keys="/matchbkg /m">/MatchBkg</option>
                                                    <option value="7" title="/PM" data-keys="/pm /p">/PM</option>
                                                </select><div class="chosen-container chosen-container-single chosen-compact chosen-highlight-selected chosen-with-search" style="width: 100%;" title="" id="value3_chosen"><a class="chosen-single chosen-default" tabindex="-1"><span title=" "> </span><div><b></b></div><div class="chosen-search"><input type="text" autocomplete="off" placeholder=" "></div></a><div class="chosen-drop chosen-auto-max-width chosen-no-wrap"><ul class="chosen-results"></ul></div></div>
                                            </td></tr>          </tbody>
                                    </table>
                                </td>
                                <td class="text-center nobr w-70px"><select name="groupAndOr" id="groupAndOr" class="form-control">
                                        <option value="and" selected="selected" title="并且" data-keys="bingqie bq">并且</option>
                                        <option value="or" title="或者" data-keys="huozhe hz">或者</option>
                                    </select>
                                </td>
                                <td class="w-400px">
                                    <table class="table table-form">
                                        <tbody>
                                        <tr id="searchbox4" class=""><td class="text-right w-80px"><span id="searchgroup2"><strong>第二组</strong></span><input type="hidden" name="andOr4" id="andOr4" value="AND">
                                            </td><td class="fieldWidth" style="overflow: visible"><select name="field4" id="field4" onchange="setField(this, 4, userparams)" class="form-control chosen chosen-controled" style="display: none;">
                                                    <option value="realname" title="真实姓名" data-keys="zhenshixingming zsxm">真实姓名</option>
                                                    <option value="email" title="邮箱" data-keys="youxiang yx">邮箱</option>
                                                    <option value="dept" title="所属部门" data-keys="suoshubumen ssbm">所属部门</option>
                                                    <option value="account" selected="selected" title="用户名" data-keys="yonghuming yhm">用户名</option>
                                                    <option value="role" title="职位" data-keys="zhiwei zw">职位</option>
                                                    <option value="phone" title="电话" data-keys="dianhua dh">电话</option>
                                                    <option value="join" title="入职日期" data-keys="ruzhiriqi rzrq">入职日期</option>
                                                    <option value="id" title="用户编号" data-keys="yonghubianhao yhbh">用户编号</option>
                                                    <option value="commiter" title="源代码帐号" data-keys="yuandaimazhanghao ydmzh">源代码帐号</option>
                                                    <option value="gender" title="性别" data-keys="xingbie xb">性别</option>
                                                    <option value="qq" title="QQ" data-keys="qq q">QQ</option>
                                                    <option value="skype" title="Skype" data-keys="skype s">Skype</option>
                                                    <option value="dingding" title="钉钉" data-keys="dingding dd">钉钉</option>
                                                    <option value="weixin" title="微信" data-keys="weixin wx">微信</option>
                                                    <option value="slack" title="Slack" data-keys="slack s">Slack</option>
                                                    <option value="whatsapp" title="WhatsApp" data-keys="whatsapp w">WhatsApp</option>
                                                    <option value="address" title="通讯地址" data-keys="tongxundizhi txdz">通讯地址</option>
                                                    <option value="zipcode" title="邮编" data-keys="youbian yb">邮编</option>
                                                </select><div class="chosen-container chosen-container-single chosen-compact chosen-highlight-selected chosen-with-search" style="width: 100%;" title="" id="field4_chosen"><a class="chosen-single" tabindex="-1"><span title="用户名">用户名</span><div><b></b></div><div class="chosen-search"><input type="text" autocomplete="off" placeholder="用户名"></div></a><div class="chosen-drop chosen-auto-max-width chosen-no-wrap"><ul class="chosen-results"></ul></div></div>
                                            </td><td class="operatorWidth"><select name="operator4" id="operator4" class="form-control">
                                                    <option value="=" title="=" data-keys=" ">=</option>
                                                    <option value="!=" title="!=" data-keys="! !">!=</option>
                                                    <option value=">" title=">" data-keys=" ">&gt;</option>
                                                    <option value=">=" title=">=" data-keys=" ">&gt;=</option>
                                                    <option value="<" title="<" data-keys=" ">&lt;</option>
                                                    <option value="<=" title="<=" data-keys=" ">&lt;=</option>
                                                    <option value="include" selected="selected" title="包含" data-keys="baohan bh">包含</option>
                                                    <option value="between" title="介于" data-keys="jieyu jy">介于</option>
                                                    <option value="notinclude" title="不包含" data-keys="bubaohan bbh">不包含</option>
                                                    <option value="belong" title="从属于" data-keys="congshuyu csy">从属于</option>
                                                </select>
                                            </td><td id="valueBox4"><input type="text" name="value4" id="value4" value="" class="form-control  searchInput" autocomplete="off">
                                            </td></tr><tr id="searchbox5" class="hidden"><td class="text-right w-80px"><select name="andOr5" id="andOr5" class="form-control">
                                                    <option value="and" selected="selected" title="并且" data-keys="bingqie bq">并且</option>
                                                    <option value="or" title="或者" data-keys="huozhe hz">或者</option>
                                                </select>
                                            </td><td class="fieldWidth" style="overflow: visible"><select name="field5" id="field5" onchange="setField(this, 5, userparams)" class="form-control chosen chosen-controled" style="display: none;">
                                                    <option value="realname" title="真实姓名" data-keys="zhenshixingming zsxm">真实姓名</option>
                                                    <option value="email" title="邮箱" data-keys="youxiang yx">邮箱</option>
                                                    <option value="dept" title="所属部门" data-keys="suoshubumen ssbm">所属部门</option>
                                                    <option value="account" title="用户名" data-keys="yonghuming yhm">用户名</option>
                                                    <option value="role" selected="selected" title="职位" data-keys="zhiwei zw">职位</option>
                                                    <option value="phone" title="电话" data-keys="dianhua dh">电话</option>
                                                    <option value="join" title="入职日期" data-keys="ruzhiriqi rzrq">入职日期</option>
                                                    <option value="id" title="用户编号" data-keys="yonghubianhao yhbh">用户编号</option>
                                                    <option value="commiter" title="源代码帐号" data-keys="yuandaimazhanghao ydmzh">源代码帐号</option>
                                                    <option value="gender" title="性别" data-keys="xingbie xb">性别</option>
                                                    <option value="qq" title="QQ" data-keys="qq q">QQ</option>
                                                    <option value="skype" title="Skype" data-keys="skype s">Skype</option>
                                                    <option value="dingding" title="钉钉" data-keys="dingding dd">钉钉</option>
                                                    <option value="weixin" title="微信" data-keys="weixin wx">微信</option>
                                                    <option value="slack" title="Slack" data-keys="slack s">Slack</option>
                                                    <option value="whatsapp" title="WhatsApp" data-keys="whatsapp w">WhatsApp</option>
                                                    <option value="address" title="通讯地址" data-keys="tongxundizhi txdz">通讯地址</option>
                                                    <option value="zipcode" title="邮编" data-keys="youbian yb">邮编</option>
                                                </select><div class="chosen-container chosen-container-single chosen-compact chosen-highlight-selected chosen-with-search" style="width: 100%;" title="" id="field5_chosen"><a class="chosen-single" tabindex="-1"><span title="职位">职位</span><div><b></b></div><div class="chosen-search"><input type="text" autocomplete="off" placeholder="职位"></div></a><div class="chosen-drop chosen-auto-max-width chosen-no-wrap"><ul class="chosen-results"></ul></div></div>
                                            </td><td class="operatorWidth"><select name="operator5" id="operator5" class="form-control">
                                                    <option value="=" selected="selected" title="=" data-keys=" ">=</option>
                                                    <option value="!=" title="!=" data-keys="! !">!=</option>
                                                    <option value=">" title=">" data-keys=" ">&gt;</option>
                                                    <option value=">=" title=">=" data-keys=" ">&gt;=</option>
                                                    <option value="<" title="<" data-keys=" ">&lt;</option>
                                                    <option value="<=" title="<=" data-keys=" ">&lt;=</option>
                                                    <option value="include" title="包含" data-keys="baohan bh">包含</option>
                                                    <option value="between" title="介于" data-keys="jieyu jy">介于</option>
                                                    <option value="notinclude" title="不包含" data-keys="bubaohan bbh">不包含</option>
                                                    <option value="belong" title="从属于" data-keys="congshuyu csy">从属于</option>
                                                </select>
                                            </td><td id="valueBox5"><select name="value5" id="value5" class="form-control searchSelect chosen chosen-controled" style="display: none;">
                                                    <option value="" selected="selected" title="" data-keys=" "></option>
                                                    <option value="dev" title="研发" data-keys="yanfa yf">研发</option>
                                                    <option value="qa" title="测试" data-keys="ceshi cs">测试</option>
                                                    <option value="pm" title="项目经理" data-keys="xiangmujingli xmjl">项目经理</option>
                                                    <option value="po" title="产品经理" data-keys="chanpinjingli cpjl">产品经理</option>
                                                    <option value="td" title="研发主管" data-keys="yanfazhuguan yfzg">研发主管</option>
                                                    <option value="pd" title="产品主管" data-keys="chanpinzhuguan cpzg">产品主管</option>
                                                    <option value="qd" title="测试主管" data-keys="ceshizhuguan cszg">测试主管</option>
                                                    <option value="top" title="高层管理" data-keys="gaocengguanli gcgl">高层管理</option>
                                                    <option value="others" title="其他" data-keys="qita qt">其他</option>
                                                    <option value="null" title="空" data-keys="kong k">空</option>
                                                </select><div class="chosen-container chosen-container-single chosen-compact chosen-highlight-selected chosen-with-search" style="width: 100%;" title="" id="value5_chosen"><a class="chosen-single chosen-default" tabindex="-1"><span title=" "> </span><div><b></b></div><div class="chosen-search"><input type="text" autocomplete="off" placeholder=" "></div></a><div class="chosen-drop chosen-auto-max-width chosen-no-wrap"><ul class="chosen-results"></ul></div></div>
                                            </td></tr><tr id="searchbox6" class="hidden"><td class="text-right w-80px"><select name="andOr6" id="andOr6" class="form-control">
                                                    <option value="and" selected="selected" title="并且" data-keys="bingqie bq">并且</option>
                                                    <option value="or" title="或者" data-keys="huozhe hz">或者</option>
                                                </select>
                                            </td><td class="fieldWidth" style="overflow: visible"><select name="field6" id="field6" onchange="setField(this, 6, userparams)" class="form-control chosen chosen-controled" style="display: none;">
                                                    <option value="realname" title="真实姓名" data-keys="zhenshixingming zsxm">真实姓名</option>
                                                    <option value="email" title="邮箱" data-keys="youxiang yx">邮箱</option>
                                                    <option value="dept" title="所属部门" data-keys="suoshubumen ssbm">所属部门</option>
                                                    <option value="account" title="用户名" data-keys="yonghuming yhm">用户名</option>
                                                    <option value="role" title="职位" data-keys="zhiwei zw">职位</option>
                                                    <option value="phone" selected="selected" title="电话" data-keys="dianhua dh">电话</option>
                                                    <option value="join" title="入职日期" data-keys="ruzhiriqi rzrq">入职日期</option>
                                                    <option value="id" title="用户编号" data-keys="yonghubianhao yhbh">用户编号</option>
                                                    <option value="commiter" title="源代码帐号" data-keys="yuandaimazhanghao ydmzh">源代码帐号</option>
                                                    <option value="gender" title="性别" data-keys="xingbie xb">性别</option>
                                                    <option value="qq" title="QQ" data-keys="qq q">QQ</option>
                                                    <option value="skype" title="Skype" data-keys="skype s">Skype</option>
                                                    <option value="dingding" title="钉钉" data-keys="dingding dd">钉钉</option>
                                                    <option value="weixin" title="微信" data-keys="weixin wx">微信</option>
                                                    <option value="slack" title="Slack" data-keys="slack s">Slack</option>
                                                    <option value="whatsapp" title="WhatsApp" data-keys="whatsapp w">WhatsApp</option>
                                                    <option value="address" title="通讯地址" data-keys="tongxundizhi txdz">通讯地址</option>
                                                    <option value="zipcode" title="邮编" data-keys="youbian yb">邮编</option>
                                                </select><div class="chosen-container chosen-container-single chosen-compact chosen-highlight-selected chosen-with-search" style="width: 100%;" title="" id="field6_chosen"><a class="chosen-single" tabindex="-1"><span title="电话">电话</span><div><b></b></div><div class="chosen-search"><input type="text" autocomplete="off" placeholder="电话"></div></a><div class="chosen-drop chosen-auto-max-width chosen-no-wrap"><ul class="chosen-results"></ul></div></div>
                                            </td><td class="operatorWidth"><select name="operator6" id="operator6" class="form-control">
                                                    <option value="=" title="=" data-keys=" ">=</option>
                                                    <option value="!=" title="!=" data-keys="! !">!=</option>
                                                    <option value=">" title=">" data-keys=" ">&gt;</option>
                                                    <option value=">=" title=">=" data-keys=" ">&gt;=</option>
                                                    <option value="<" title="<" data-keys=" ">&lt;</option>
                                                    <option value="<=" title="<=" data-keys=" ">&lt;=</option>
                                                    <option value="include" selected="selected" title="包含" data-keys="baohan bh">包含</option>
                                                    <option value="between" title="介于" data-keys="jieyu jy">介于</option>
                                                    <option value="notinclude" title="不包含" data-keys="bubaohan bbh">不包含</option>
                                                    <option value="belong" title="从属于" data-keys="congshuyu csy">从属于</option>
                                                </select>
                                            </td><td id="valueBox6"><input type="text" name="value6" id="value6" value="" class="form-control  searchInput" autocomplete="off">
                                            </td></tr>          </tbody>
                                    </table>
                                </td>
                                <td class="w-160px hidden" rowspan="2" id="userQueries">
                                    <h4>已保存的查询条件</h4>
                                    <ul>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center form-actions">
                                    <input type="hidden" name="module" id="module" value="user">
                                    <input type="hidden" name="actionURL" id="actionURL" value="/index.php?m=company&amp;f=browse&amp;param=myQueryID&amp;type=bysearch">
                                    <input type="hidden" name="groupItems" id="groupItems" value="3">
                                    <button type="submit" id="submit" class="btn btn-primary" data-loading="稍候...">搜索</button> &nbsp; <a href="/index.php?m=search&amp;f=saveQuery&amp;module=user&amp;onMenuBar=no" class="btn-save-form btn btn-secondary">保存</a>
                                    &nbsp; <button type="button" class="btn-reset-form btn">重置</button> <button type="button" class="btn-expand-form btn btn-info pull-right"><i class="icon icon-chevron-double-down"></i></button><input type="hidden" name="formType" id="formType" value="lite">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                    <script>searchCustom = "\u81ea\u5b9a\u4e49";</script>
                    <script>
                        var dtOptions =
                            {
                                language: 'zh-cn',
                                weekStart: 1,
                                todayBtn:  1,
                                autoclose: 1,
                                todayHighlight: 1,
                                startView: 2,
                                minView: 2,
                                forceParse: 0,
                                format: 'yyyy-mm-dd'
                            };
                        var userparams = {"realname":{"operator":"include","control":"input","values":""},"email":{"operator":"include","control":"input","values":""},"dept":{"operator":"belong","control":"select","values":{"ZERO":"\/","":"","1":"\/MgrBkg","2":"\/Client","3":"\/GoServer","5":"\/Python","6":"\/MatchBkg","7":"\/PM"}},"account":{"operator":"include","control":"input","values":""},"role":{"operator":"=","control":"select","values":{"":"","dev":"\u7814\u53d1","qa":"\u6d4b\u8bd5","pm":"\u9879\u76ee\u7ecf\u7406","po":"\u4ea7\u54c1\u7ecf\u7406","td":"\u7814\u53d1\u4e3b\u7ba1","pd":"\u4ea7\u54c1\u4e3b\u7ba1","qd":"\u6d4b\u8bd5\u4e3b\u7ba1","top":"\u9ad8\u5c42\u7ba1\u7406","others":"\u5176\u4ed6","null":"\u7a7a"}},"phone":{"operator":"include","control":"input","values":""},"join":{"operator":"=","control":"input","values":"","class":"date"},"id":{"operator":"=","control":"input","values":""},"commiter":{"operator":"include","control":"select","values":""},"gender":{"operator":"=","control":"select","values":{"m":"\u7537","f":"\u5973","null":"\u7a7a"}},"qq":{"operator":"=","control":"input","values":""},"skype":{"operator":"=","control":"input","values":""},"dingding":{"operator":"=","control":"input","values":""},"weixin":{"operator":"=","control":"input","values":""},"slack":{"operator":"=","control":"input","values":""},"whatsapp":{"operator":"=","control":"input","values":""},"address":{"operator":"include","control":"input","values":""},"zipcode":{"operator":"=","control":"input","values":""}};
                        var groupItems    = 3;
                        var setQueryTitle = '请输入查询标题（保存之前请先查询）：';
                        var module        = 'user';
                        var actionURL     = '/index.php?m=company&f=browse&param=myQueryID&type=bysearch';

                        function executeQuery(queryID)
                        {
                            if(!queryID) return;
                            location.href = actionURL.replace('myQueryID', queryID);
                        }

                        $(function()
                        {
                            var $searchForm = $('#searchForm-5e6239b40ba04');
                            $searchForm.find('select.chosen').chosen();
                            /* Toggle user queries action. */
                            $('#toggle-queries').click(function()
                            {
                                $('#userQueries').toggleClass('hidden');
                                if(!$('#userQueries').hasClass('hidden'))
                                {
                                    $('#toggle-queries .icon').removeClass('icon-angle-left');
                                    $('#toggle-queries .icon').addClass('icon-angle-right');
                                    $('#toggle-queries').css('right', $('#userQueries').outerWidth());
                                }
                                else
                                {
                                    $('#toggle-queries .icon').removeClass('icon-angle-right');
                                    $('#toggle-queries .icon').addClass('icon-angle-left');
                                    $('#toggle-queries').css('right', '0px');
                                }
                            });

                            /*
                             * Load queries form
                             */
                            var loadQueries = window.loadQueries = function(queryID, shortcut, name)
                            {
                                $('#userQueries ul').load($.createLink('search', 'ajaxGetQuery', 'module=' + module + '&queryID=' + queryID));
                                if(shortcut)
                                {
                                    if($('#mainMenu .btn-toolbar.pull-left #query').size() == 0)
                                    {
                                        var html = '<div class="btn-group" id="query"><a href="javascript:;" data-toggle="dropdown" class="btn btn-link " style="border-radius: 2px;">' + searchCustom + ' <span class="caret"></span></a><ul class="dropdown-menu"></ul></div>';
                                        html += '<style>#mainMenu #query.btn-group li {position: relative;} #mainMenu #query.btn-group li a{margin-right:20px;} #mainMenu #query.btn-group li .btn-delete{ padding:0 7px; position: absolute; right: -10px; top: -5px; display: block; width: 20px; text-align: center; } </style>';
                                        html += "<script> function removeQueryFromMenu(obj) { var $obj = $(obj); var link = createLink('search', 'ajaxRemoveMenu', 'queryID=' + $obj.data('id')); $.get(link, function() { $obj.closest('li').remove(); if($('#mainMenu #query.btn-group').find('li').length == 0) $('#mainMenu #query.btn-group').remove(); })}<\/script>";
                                        $('#mainMenu .btn-toolbar.pull-left #bysearchTab').before(html);
                                    }
                                    html  = "<li><a href='" + actionURL.replace('myQueryID', queryID) + "'>" + name + "</a>";
                                    html += "<a href='###' class='btn-delete' data-id='" + queryID + "' onclick='removeQueryFromMenu(this)'><i class='icon icon-close'></i></a></li>";
                                    $('#mainMenu .btn-toolbar.pull-left #query ul.dropdown-menu').append(html);
                                }
                            };

                            /*
                             * Expand or collapse form
                             *
                             * @param expand    true for expand form, false for collapse form
                             */
                            var expandForm = function(expand)
                            {
                                if (expand === undefined) expand = !$searchForm.hasClass('showmore');
                                $searchForm.toggleClass('showmore', expand);
                                for(i = 1; i <= groupItems * 2; i ++)
                                {
                                    if(i != 1 && i != groupItems + 1 )
                                    {
                                        $searchForm.find('#searchbox' + i).toggleClass('hidden', !expand);
                                    }
                                }

                                $searchForm.find('#formType').val(expand ? 'more' : 'lite');
                            };

                            /**
                             * Set date field
                             *
                             * @param  string $query
                             * @return void
                             */
                            var setDateField = function(query, fieldNO)
                            {
                                var $period = $('#selectPeriod');
                                if($period.length) $period.remove();

                                $period = $("<ul id='selectPeriod' class='dropdown-menu'><li class='dropdown-header'>或  选择时间段</li><li><a href='#lastWeek'>上周</a></li><li><a href='#thisWeek'>本周</a></li><li><a href='#yesterday'>昨天</a></li><li><a href='#today'>今天</a></li><li><a href='#lastMonth'>上月</a></li><li><a href='#thisMonth'>本月</a></li></ul>").appendTo('body');
                                $period.find('li > a').click(function(event)
                                {
                                    var target = $(query).closest('form').find('#' + $period.data('target'));
                                    if(target.length)
                                    {
                                        if(target.next('input[type=hidden]').length)
                                        {
                                            target.next('input[type=hidden]').val($(this).attr('href').replace('#', '$'));
                                            target.attr('placeholder', $(this).attr('href').replace('#', '$'));
                                        }
                                        else
                                        {
                                            target.val($(this).attr('href').replace('#', '$'));
                                        }

                                        $(query).closest('form').find('#operator' + $period.data('fieldNO')).val('between');
                                        $period.hide();
                                    }
                                    event.stopPropagation();
                                    return false;
                                });

                                $(query).datetimepicker('remove').datepicker(dtOptions).on('show', function(e)
                                {
                                    var $e = $(e.target);
                                    var ePos = $e.offset();
                                    $period.css({'left': ePos.left + 211, 'top': ePos.top + 29, 'min-height': $('.datetimepicker').outerHeight()}).show().data('target', $e.attr('id')).data('fieldNO', fieldNO).find('li.active').removeClass('active');
                                    if($e.attr('placeholder'))
                                    {
                                        $period.find("li > a[href='" + $e.attr('placeholder').replace('$', '#') + "']").closest('li').addClass('active');
                                    }
                                    else
                                    {
                                        $period.find("li > a[href='" + $e.val().replace('$', '#') + "']").closest('li').addClass('active');
                                    }
                                }).on('changeDate', function()
                                {
                                    var opt = $(query).closest('form').find('#operator' + $period.data('fieldNO'));
                                    var target = $('#' + $period.data('target'));
                                    if(target.length)
                                    {
                                        if(target.next('input[type=hidden]').length)
                                        {
                                            target.next('input[type=hidden]').val(target.val());
                                        }
                                    }
                                    if(opt.val() == 'between') opt.val('<=');
                                    $period.hide();
                                }).on('hide', function(){setTimeout(function(){$period.hide();}, 200);});
                            }

                            /**
                             * When the value of the fields select changed, set the operator and value of the new field.
                             *
                             * @param  string $obj
                             * @param  int    $fieldNO
                             * @access public
                             * @return void
                             */
                            var setField = window.setField = function(obj, fieldNO, moduleparams)
                            {
                                var params    = moduleparams;
                                var $obj      = $(obj);
                                var fieldName = $obj.val();
                                $searchForm.find('#operator' + fieldNO).val(params[fieldName]['operator']);   // Set the operator according the param setting.
                                $searchForm.find('#valueBox' + fieldNO).html($searchForm.find('#box' + fieldName).children().clone());
                                $searchForm.find('#valueBox' + fieldNO).children().attr({name : 'value' + fieldNO, id : 'value' + fieldNO});

                                if(typeof(params[fieldName]['class']) != undefined && params[fieldName]['class'] == 'date')
                                {
                                    setDateField($searchForm.find("#value" + fieldNO), fieldNO);
                                    $searchForm.find("#value" + fieldNO).addClass('date');   // Shortcut the width of the datepicker to make sure align with others.
                                    var maxNO      = 2 * groupItems;
                                    var nextNO     = fieldNO > groupItems ? fieldNO - groupItems + 1 : fieldNO + groupItems;
                                    var nextValue  = $searchForm.find('#value' + nextNO).val();
                                    var operator   = $searchForm.find("#operator" + fieldNO).val();
                                    if(nextNO <= maxNO && fieldNO < maxNO && (nextValue == '' || nextValue == 0) && operator == ">=")
                                    {
                                        $searchForm.find('#field' + nextNO).val($searchForm.find('#field' + fieldNO).val());
                                        $searchForm.find('#operator' + nextNO).val('<=');
                                        $searchForm.find('#valueBox' + nextNO).html($searchForm.find('#box' + fieldName).children().clone());
                                        $searchForm.find('#valueBox' + nextNO).children().attr({name : 'value' + nextNO, id : 'value' + nextNO});
                                        setDateField($searchForm.find("#value" + nextNO), nextNO);
                                        $searchForm.find("#value" + nextNO).addClass('date');
                                    }
                                }
                                else if(params[fieldName]['control'] == 'select')
                                {
                                    $searchForm.find("#value" + fieldNO).chosen().on('chosen:showing_dropdown', function()
                                    {
                                        var $this = $(this);
                                        var $chosen = $this.next('.chosen-container').removeClass('chosen-up');
                                        var $drop = $chosen.find('.chosen-drop');
                                        $chosen.toggleClass('chosen-up', $drop.height() + $drop.offset().top - $(document).scrollTop() > $(window).height());
                                    });
                                }
                            };

                            /*
                             * Reset form
                             */
                            window.resetForm = function()
                            {
                                for(i = 1; i <= groupItems * 2; i ++)
                                {
                                    $searchForm.find('#value' + i).val('').trigger('chosen:updated');
                                    $searchForm.find('#dateValue' + i).val('').attr('placeholder','');
                                }
                            };

                            $searchForm.on('click', '.btn-expand-form', function() {expandForm();});
                            $searchForm.on('click', '.btn-reset-form', function() {resetForm();});
                            $searchForm.on('change', 'select[id^="operator"]', function()
                            {
                                var $select = $(this);
                                var value = $select.val();
                                var $tr = $select.closest('tr');
                                if(value == '>=' && $tr.find('input[id^="value"].date').length)
                                {
                                    var fieldNO   = parseInt($(this).attr('id').replace('operator', ''));
                                    var fieldName = $tr.find("select[id^='field']").val();
                                    var maxNO      = 2 * groupItems;
                                    var nextNO     = fieldNO > groupItems ? fieldNO - groupItems + 1 : fieldNO + groupItems;
                                    var nextValue  = searchForm.find('#value' + nextNO).val();
                                    if(nextNO <= maxNO && fieldNO < maxNO && (nextValue == '' || nextValue == 0))
                                    {
                                        searchForm.find('#field' + nextNO).val(searchForm.find('#field' + fieldNO).val());
                                        searchForm.find('#operator' + nextNO).val('<=');
                                        searchForm.find('#valueBox' + nextNO).html(searchForm.find('#box' + fieldName).children().clone());
                                        searchForm.find('#valueBox' + nextNO).children().attr({name : 'value' + nextNO, id : 'value' + nextNO});
                                        setDateField(searchForm.find("#value" + nextNO), nextNO);
                                        searchForm.find("#value" + nextNO).addClass('date');
                                    }
                                }
                            });

                            $searchForm.find('.btn-save-form').modalTrigger({width:650, type:'iframe', title: setQueryTitle});

                            if($('#formType').val() == 'more') expandForm(true);
                            $searchForm.on('click', '.user-query .icon-close', function(e)
                            {
                                var $query = $(this).closest('.user-query');
                                var queryId = $query.data('queryId');
                                var deleteQueryLink = $.createLink('search', 'deleteQuery', 'queryID=' + queryId);
                                $.get(deleteQueryLink, function(data)
                                {
                                    if(data == 'success') $query.remove();
                                });
                                e.stopPropagation();
                            });

                            /* Init datepicker for search. */
                            $searchForm.find('.table-condensed input.date').each(function()
                            {
                                setDateField($(this), $(this).attr('id').substr(5));
                            });
                        });
                    </script>
                </div>
                <form class="main-table table-user" data-ride="table" action="/index.php?m=user&amp;f=batchEdit&amp;deptID=0" method="post" id="userListForm">
                    <table class="table has-sort-head" id="userList">
                        <thead>
                        <tr>
                            <th class="c-id" title="ID">
                                <a href="/index.php?m=company&amp;f=browse&amp;param=0&amp;type=bydept&amp;orderBy=id_asc&amp;recTotal=31&amp;recPerPage=20" class="sort-down">ID</a>
                            </th>
                            <th title="真实姓名"><a href="/index.php?m=company&amp;f=browse&amp;param=0&amp;type=bydept&amp;orderBy=realname_asc&amp;recTotal=31&amp;recPerPage=20" class="header">真实姓名</a>
                            </th>
                            <th title="用户名"><a href="/index.php?m=company&amp;f=browse&amp;param=0&amp;type=bydept&amp;orderBy=account_asc&amp;recTotal=31&amp;recPerPage=20" class="header">用户名</a>
                            </th>
                            <th class="w-90px" title="职位"><a href="/index.php?m=company&amp;f=browse&amp;param=0&amp;type=bydept&amp;orderBy=role_asc&amp;recTotal=31&amp;recPerPage=20" class="header">职位</a>
                            </th>
                            <th class="c-url" title="邮箱"><a href="/index.php?m=company&amp;f=browse&amp;param=0&amp;type=bydept&amp;orderBy=email_asc&amp;recTotal=31&amp;recPerPage=20" class="header">邮箱</a>
                            </th>
                            <th class="c-type" title="性别"><a href="/index.php?m=company&amp;f=browse&amp;param=0&amp;type=bydept&amp;orderBy=gender_asc&amp;recTotal=31&amp;recPerPage=20" class="header">性别</a>
                            </th>
                            <th title="电话"><a href="/index.php?m=company&amp;f=browse&amp;param=0&amp;type=bydept&amp;orderBy=phone_asc&amp;recTotal=31&amp;recPerPage=20" class="header">电话</a>
                            </th>
                            <th title="QQ"><a href="/index.php?m=company&amp;f=browse&amp;param=0&amp;type=bydept&amp;orderBy=qq_asc&amp;recTotal=31&amp;recPerPage=20" class="header">QQ</a>
                            </th>
                            <th class="c-date" title="最后登录"><a href="/index.php?m=company&amp;f=browse&amp;param=0&amp;type=bydept&amp;orderBy=last_asc&amp;recTotal=31&amp;recPerPage=20" class="header">最后登录</a>
                            </th>
                            <th class="w-90px" title="访问次数"><a href="/index.php?m=company&amp;f=browse&amp;param=0&amp;type=bydept&amp;orderBy=visits_asc&amp;recTotal=31&amp;recPerPage=20" class="header">访问次数</a>
                            </th>
                            <th class="c-actions" title="操作">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="c-id">
                                001                      </td>
                            <td><a href="/index.php?m=user&amp;f=view&amp;account=admin" title="admin">admin</a>
                            </td>
                            <td>admin</td>
                            <td class="w-90px" title=""></td>
                            <td class="c-url" title=""></td>
                            <td class="c-type">男</td>
                            <td></td>
                            <td></td>
                            <td class="c-date">2020-03-06</td>
                            <td class="c-num text-center">57</td>
                            <td class="c-actions">
                                <a href="/index.php?m=user&amp;f=delete&amp;userID=1" title="删除用户" class="btn disabled"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="c-id">
                                002                      </td>
                            <td><a href="/index.php?m=user&amp;f=view&amp;account=hzn" title="黄子南">黄子南</a>
                            </td>
                            <td>hzn</td>
                            <td class="w-90px" title="产品经理">产品经理</td>
                            <td class="c-url" title=""></td>
                            <td class="c-type">男</td>
                            <td></td>
                            <td></td>
                            <td class="c-date">2020-03-06</td>
                            <td class="c-num text-center">285</td>
                            <td class="c-actions">
                                <a href="/index.php?m=user&amp;f=delete&amp;userID=2" title="删除用户" class="btn disabled"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="c-id">
                                003                      </td>
                            <td><a href="/index.php?m=user&amp;f=view&amp;account=ousy" title="欧盛勇">欧盛勇</a>
                            </td>
                            <td>ousy</td>
                            <td class="w-90px" title="研发">研发</td>
                            <td class="c-url" title=""></td>
                            <td class="c-type">男</td>
                            <td></td>
                            <td></td>
                            <td class="c-date">2020-03-06</td>
                            <td class="c-num text-center">382</td>
                            <td class="c-actions">
                                <a href="/index.php?m=user&amp;f=delete&amp;userID=3" title="删除用户" class="btn disabled"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="c-id">
                                004                      </td>
                            <td><a href="/index.php?m=user&amp;f=view&amp;account=galen" title="李辉">李辉</a>
                            </td>
                            <td>galen</td>
                            <td class="w-90px" title="研发">研发</td>
                            <td class="c-url" title=""></td>
                            <td class="c-type">男</td>
                            <td></td>
                            <td></td>
                            <td class="c-date">2020-03-06</td>
                            <td class="c-num text-center">568</td>
                            <td class="c-actions">
                                <a href="/index.php?m=user&amp;f=delete&amp;userID=4" title="删除用户" class="btn disabled"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="c-id">
                                005                      </td>
                            <td><a href="/index.php?m=user&amp;f=view&amp;account=carmen" title="张嘉文">张嘉文</a>
                            </td>
                            <td>carmen</td>
                            <td class="w-90px" title="测试">测试</td>
                            <td class="c-url" title="425225677@qq.com"> <a href="mailto:425225677@qq.com">425225677@qq.com</a></td>
                            <td class="c-type">男</td>
                            <td></td>
                            <td></td>
                            <td class="c-date">2020-03-06</td>
                            <td class="c-num text-center">521</td>
                            <td class="c-actions">
                                <a href="/index.php?m=user&amp;f=delete&amp;userID=5" title="删除用户" class="btn disabled"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="c-id">
                                006                      </td>
                            <td><a href="/index.php?m=user&amp;f=view&amp;account=lhui33" title="晓强">晓强</a>
                            </td>
                            <td>lhui33</td>
                            <td class="w-90px" title="研发">研发</td>
                            <td class="c-url" title=""></td>
                            <td class="c-type">男</td>
                            <td></td>
                            <td></td>
                            <td class="c-date">2020-03-06</td>
                            <td class="c-num text-center">267</td>
                            <td class="c-actions">
                                <a href="/index.php?m=user&amp;f=delete&amp;userID=6" title="删除用户" class="btn disabled"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="c-id">
                                007                      </td>
                            <td><a href="/index.php?m=user&amp;f=view&amp;account=tanyu" title="谭宇">谭宇</a>
                            </td>
                            <td>tanyu</td>
                            <td class="w-90px" title="研发">研发</td>
                            <td class="c-url" title=""></td>
                            <td class="c-type">男</td>
                            <td></td>
                            <td></td>
                            <td class="c-date">2020-03-06</td>
                            <td class="c-num text-center">107</td>
                            <td class="c-actions">
                                <a href="/index.php?m=user&amp;f=delete&amp;userID=7" title="删除用户" class="btn disabled"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="c-id">
                                008                      </td>
                            <td><a href="/index.php?m=user&amp;f=view&amp;account=lsf" title="李少锋">李少锋</a>
                            </td>
                            <td>lsf</td>
                            <td class="w-90px" title="研发">研发</td>
                            <td class="c-url" title=""></td>
                            <td class="c-type">男</td>
                            <td></td>
                            <td></td>
                            <td class="c-date">2020-03-06</td>
                            <td class="c-num text-center">142</td>
                            <td class="c-actions">
                                <a href="/index.php?m=user&amp;f=delete&amp;userID=8" title="删除用户" class="btn disabled"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="c-id">
                                009                      </td>
                            <td><a href="/index.php?m=user&amp;f=view&amp;account=zxp" title="周晓苹">周晓苹</a>
                            </td>
                            <td>zxp</td>
                            <td class="w-90px" title="研发">研发</td>
                            <td class="c-url" title=""></td>
                            <td class="c-type">女</td>
                            <td></td>
                            <td></td>
                            <td class="c-date">2020-03-06</td>
                            <td class="c-num text-center">97</td>
                            <td class="c-actions">
                                <a href="/index.php?m=user&amp;f=delete&amp;userID=9" title="删除用户" class="btn disabled"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="c-id">
                                010                      </td>
                            <td><a href="/index.php?m=user&amp;f=view&amp;account=hnz" title="浩楠">浩楠</a>
                            </td>
                            <td>hnz</td>
                            <td class="w-90px" title="研发">研发</td>
                            <td class="c-url" title=""></td>
                            <td class="c-type">男</td>
                            <td></td>
                            <td></td>
                            <td class="c-date">2020-01-19</td>
                            <td class="c-num text-center">30</td>
                            <td class="c-actions">
                                <a href="/index.php?m=user&amp;f=delete&amp;userID=10" title="删除用户" class="btn disabled"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="c-id">
                                011                      </td>
                            <td><a href="/index.php?m=user&amp;f=view&amp;account=ldd" title="柳旦旦">柳旦旦</a>
                            </td>
                            <td>ldd</td>
                            <td class="w-90px" title=""></td>
                            <td class="c-url" title=""></td>
                            <td class="c-type">男</td>
                            <td></td>
                            <td></td>
                            <td class="c-date">2020-03-06</td>
                            <td class="c-num text-center">1032</td>
                            <td class="c-actions">
                                <a href="/index.php?m=user&amp;f=delete&amp;userID=11" title="删除用户" class="btn disabled"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="c-id">
                                012                      </td>
                            <td><a href="/index.php?m=user&amp;f=view&amp;account=bin" title="谭彬">谭彬</a>
                            </td>
                            <td>bin</td>
                            <td class="w-90px" title="研发">研发</td>
                            <td class="c-url" title=""></td>
                            <td class="c-type">男</td>
                            <td></td>
                            <td></td>
                            <td class="c-date">2020-03-06</td>
                            <td class="c-num text-center">638</td>
                            <td class="c-actions">
                                <a href="/index.php?m=user&amp;f=delete&amp;userID=12" title="删除用户" class="btn disabled"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="c-id">
                                013                      </td>
                            <td><a href="/index.php?m=user&amp;f=view&amp;account=junjun" title="卢俊">卢俊</a>
                            </td>
                            <td>junjun</td>
                            <td class="w-90px" title="研发">研发</td>
                            <td class="c-url" title=""></td>
                            <td class="c-type">男</td>
                            <td></td>
                            <td></td>
                            <td class="c-date">2020-02-18</td>
                            <td class="c-num text-center">87</td>
                            <td class="c-actions">
                                <a href="/index.php?m=user&amp;f=delete&amp;userID=13" title="删除用户" class="btn disabled"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="c-id">
                                014                      </td>
                            <td><a href="/index.php?m=user&amp;f=view&amp;account=qiaofu" title="侯国江">侯国江</a>
                            </td>
                            <td>qiaofu</td>
                            <td class="w-90px" title=""></td>
                            <td class="c-url" title=""></td>
                            <td class="c-type">男</td>
                            <td></td>
                            <td></td>
                            <td class="c-date">2020-03-06</td>
                            <td class="c-num text-center">248</td>
                            <td class="c-actions">
                                <a href="/index.php?m=user&amp;f=delete&amp;userID=14" title="删除用户" class="btn disabled"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="c-id">
                                015                      </td>
                            <td><a href="/index.php?m=user&amp;f=view&amp;account=bbc" title="叶燕锋">叶燕锋</a>
                            </td>
                            <td>bbc</td>
                            <td class="w-90px" title="研发">研发</td>
                            <td class="c-url" title=""></td>
                            <td class="c-type">男</td>
                            <td></td>
                            <td></td>
                            <td class="c-date">2020-03-06</td>
                            <td class="c-num text-center">716</td>
                            <td class="c-actions">
                                <a href="/index.php?m=user&amp;f=delete&amp;userID=15" title="删除用户" class="btn disabled"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="c-id">
                                016                      </td>
                            <td><a href="/index.php?m=user&amp;f=view&amp;account=wahaha" title="兰晓东">兰晓东</a>
                            </td>
                            <td>wahaha</td>
                            <td class="w-90px" title="研发">研发</td>
                            <td class="c-url" title=""></td>
                            <td class="c-type">男</td>
                            <td></td>
                            <td></td>
                            <td class="c-date">2020-03-06</td>
                            <td class="c-num text-center">403</td>
                            <td class="c-actions">
                                <a href="/index.php?m=user&amp;f=delete&amp;userID=16" title="删除用户" class="btn disabled"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="c-id">
                                017                      </td>
                            <td><a href="/index.php?m=user&amp;f=view&amp;account=btx" title="李天宝">李天宝</a>
                            </td>
                            <td>btx</td>
                            <td class="w-90px" title="研发">研发</td>
                            <td class="c-url" title=""></td>
                            <td class="c-type">男</td>
                            <td></td>
                            <td></td>
                            <td class="c-date">2020-03-06</td>
                            <td class="c-num text-center">575</td>
                            <td class="c-actions">
                                <a href="/index.php?m=user&amp;f=delete&amp;userID=17" title="删除用户" class="btn disabled"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="c-id">
                                018                      </td>
                            <td><a href="/index.php?m=user&amp;f=view&amp;account=pg1" title="潘高辉">潘高辉</a>
                            </td>
                            <td>pg1</td>
                            <td class="w-90px" title="研发">研发</td>
                            <td class="c-url" title=""></td>
                            <td class="c-type">男</td>
                            <td></td>
                            <td></td>
                            <td class="c-date">2020-03-06</td>
                            <td class="c-num text-center">878</td>
                            <td class="c-actions">
                                <a href="/index.php?m=user&amp;f=delete&amp;userID=18" title="删除用户" class="btn disabled"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="c-id">
                                019                      </td>
                            <td><a href="/index.php?m=user&amp;f=view&amp;account=lemonash" title="柳红辉">柳红辉</a>
                            </td>
                            <td>lemonash</td>
                            <td class="w-90px" title="研发">研发</td>
                            <td class="c-url" title=""></td>
                            <td class="c-type">男</td>
                            <td></td>
                            <td></td>
                            <td class="c-date">2020-03-06</td>
                            <td class="c-num text-center">971</td>
                            <td class="c-actions">
                                <a href="/index.php?m=user&amp;f=delete&amp;userID=19" title="删除用户" class="btn disabled"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="c-id">
                                020                      </td>
                            <td><a href="/index.php?m=user&amp;f=view&amp;account=zx1" title="张小蛟">张小蛟</a>
                            </td>
                            <td>zx1</td>
                            <td class="w-90px" title="研发">研发</td>
                            <td class="c-url" title=""></td>
                            <td class="c-type">男</td>
                            <td></td>
                            <td></td>
                            <td class="c-date">2020-03-06</td>
                            <td class="c-num text-center">221</td>
                            <td class="c-actions">
                                <a href="/index.php?m=user&amp;f=delete&amp;userID=20" title="删除用户" class="btn disabled"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="table-footer" style="left: 0px; bottom: 0px;">
                        <ul class="pager" data-page-cookie="pagerCompanyBrowse" data-ride="pager" data-rec-total="31" data-rec-per-page="20" data-page="1" data-link-creator="/index.php?m=company&amp;f=browse&amp;param=0&amp;type=bydept&amp;orderBy=id&amp;recTotal=31&amp;recPerPage={recPerPage}&amp;pageID={page}"><li><div class="pager-label">共 <strong>31</strong> 项</div></li><li><div class="btn-group pager-size-menu dropup"><button type="button" class="btn dropdown-toggle" data-toggle="dropdown" style="border-radius: 2px;">每页 <strong>20</strong> 项 <span class="caret"></span></button><ul class="dropdown-menu"><li><a href="###" data-size="5">5</a></li><li><a href="###" data-size="10">10</a></li><li><a href="###" data-size="15">15</a></li><li class="active"><a href="###" data-size="20">20</a></li><li><a href="###" data-size="25">25</a></li><li><a href="###" data-size="30">30</a></li><li><a href="###" data-size="35">35</a></li><li><a href="###" data-size="40">40</a></li><li><a href="###" data-size="45">45</a></li><li><a href="###" data-size="50">50</a></li><li><a href="###" data-size="100">100</a></li><li><a href="###" data-size="200">200</a></li><li><a href="###" data-size="500">500</a></li><li><a href="###" data-size="1000">1000</a></li><li><a href="###" data-size="2000">2000</a></li></ul></div></li><li class="active disabled pager-item-left"><a title="第 1 页" class="pager-item" data-page="1" href="/index.php?m=company&amp;f=browse&amp;param=0&amp;type=bydept&amp;orderBy=id&amp;recTotal=31&amp;recPerPage=20&amp;pageID=1"><i class="icon icon-first-page"></i></a></li><li class="disabled pager-item-right"><a title="第 0 页" class="pager-item" data-page="0" href="###"><i class="icon icon-angle-left"></i></a></li><li><div class="pager-label"><strong>1</strong>/<strong>2</strong></div></li><li class="pager-item-left"><a title="第 2 页" class="pager-item" data-page="2" href="/index.php?m=company&amp;f=browse&amp;param=0&amp;type=bydept&amp;orderBy=id&amp;recTotal=31&amp;recPerPage=20&amp;pageID=2"><i class="icon icon-angle-right"></i></a></li><li class="pager-item-right"><a title="第 2 页" class="pager-item" data-page="2" href="/index.php?m=company&amp;f=browse&amp;param=0&amp;type=bydept&amp;orderBy=id&amp;recTotal=31&amp;recPerPage=20&amp;pageID=2"><i class="icon icon-last-page"></i></a></li></ul>      </div>
                </form>
            </div>
        </div>
        <script lanugage="javascript">$('#dept0').addClass('active');</script>
    </div>
@endsection

<!DOCTYPE html>
<html lang='zh-cn'>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <title>用户登录 - 禅道</title>
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
            "currentModule": "user",
            "currentMethod": "login",
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
    <style>#featurebar ul.nav li .chosen-container a.chosen-single {
            background: #F8FAFE;
            border: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            padding-top: 5px;
        }

        .w-verifyPassword {
            width: 120px !important;
        }

        .w-enVerifyPassword {
            width: 150px !important;
        }

        body {
            background: #1183fb linear-gradient(-90deg, #0a48d1 0%, #1183fb 100%);
            background-color: #1183fb;
        }

        #login {
            max-width: 600px !important;
            margin: 0 auto;
            margin-top: 5%;
        }

        #loginPanel {
            background: #fff;
            overflow: hidden;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, .1);
            border-radius: 3px;
        }

        #loginPanel > header {
            padding: 20px;
            border-bottom: 1px #eee solid;
            position: relative;
        }

        #loginPanel > header > h2 {
            font-size: 16px;
            margin: 0;
            line-height: 32px;
            max-width: 83%;
        }

        #loginPanel > header > .actions {
            position: absolute;
            right: 20px;
            top: 20px;
        }

        #loginPanel > .table-row {
            margin: 20px 0;
        }

        #loginPanel .table-form > tbody > tr > th {
            width: 60px;
        }

        html[lang='en'] #loginPanel .table-form > tbody > tr > th {
            width: 80px;
        }

        #loginPanel form {
            margin-right: 40px;
        }

        #loginPanel > footer {
            background: #eee;
            padding: 20px;
            color: #838a9d
        }

        #loginPanel > footer a {
            display: inline-block;
            margin-left: 5px;
        }

        #info {
            margin-top: 10px;
            color: #fff;
        }

        #info .btn + .btn {
            margin-left: 5px;
        }

        #langs > .btn,
        #langs > .dropdown-menu {
            min-width: 0;
            width: 85px;
        }

        #logo-box img {
            margin-left: 40px;
            width: 100px;
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
<script src='http://cdn.zentaopm.com/12.0/js/md5.js?v=biz3.6'></script>
<style>
    #loginPanel form {
        margin-right: 10px;
    }

    .form-actions .btn {
        margin-right: 5px;
    }

    #keeplogin .checkbox-primary {
        width: 120px;
        display: inline-block;
    }
</style>
<main id="main" class="fade no-padding">
    <div class="container" id="login">
        <div id="loginPanel">
            <header>
                <h2>easyedu</h2>
                <div class="actions dropdown dropdown-hover" id='langs'>
                    <ul class="dropdown-menu pull-right">
                        <li><a class="switch-lang" data-value="zh-cn">简体</a></li>
                        <li><a class="switch-lang" data-value="zh-tw">繁體</a></li>
                        <li><a class="switch-lang" data-value="en">English</a></li>
                        <li><a class="switch-lang" data-value="de">Deutsch</a></li>
                        <li><a class="switch-lang" data-value="fr">Français</a></li>
                    </ul>
                </div>
            </header>
            <div class="table-row">
                <div class="col-4 text-center" id='logo-box'>
                    <img src='http://zui.5upm.com/theme/default/images/main/zt-logo.png?v=biz3.6' width='100'
                         height='150'/></div>
                <div class="col-8">
                    <form method='post' target='hiddenwin'>
                        <table class='table table-form'>
                            <tbody>
                            <tr>
                                <th>用户名</th>
                                <td><input class='form-control' type='text' name='account' id='account' autofocus/></td>
                            </tr>
                            <tr>
                                <th>密码</th>
                                <td><input class='form-control' type='password' name='password'/></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td id="keeplogin">
                                    <div class='checkbox-primary'><input type='checkbox' name='keepLogin[]' value='on'
                                                                         id='keepLoginon'/> <label for='keepLoginon'>保持登录</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="form-actions">
                                    <button type='submit' id='submit' class='btn btn-primary' data-loading='稍候...'>登录
                                    </button>
                                    <button type='submit' id='submit' class='btn btn-primary' data-loading='稍候...'>注册
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <div id="info" class="table-row">
            <div class="table-col text-middle text-center">
                <div id="poweredby">
                    <iframe id='updater' class='hidden' frameborder='0' width='100%' scrolling='no'
                            allowtransparency='true'
                            src="https://api.zentao.net/updater-isLatest-biz3.6-c7994c7fe02183b869563cb4eb087901.html?lang=zh_cn"></iframe>
                </div>
            </div>
        </div>
    </div>
</main>
<script type='text/javascript'>
    $(document).ready(function () {
        $('#keeplogin').append("<div class='checkbox-primary'><input type='checkbox' name='https[]' value=''  id='https' \/> <label for='https'>\u5b89\u5168\u767b\u5f55<\/label><\/div>");
        $('#https').change(function () {
            if ($(this).prop('checked')) {
                $('form').attr('action', "https:\/\/zui.5upm.com\/user-login.html");
                var referer = $('#referer').val();
                $('#referer').val(referer.replace(/^http:\/\//, 'https://'));
            } else {
                $('form').attr('action', "http:\/\/zui.5upm.com\/user-login.html");
                var referer = $('#referer').val();
                $('#referer').val(referer.replace(/^https:\/\//, 'http://'));
            }
        })
    })
</script>
<iframe frameborder='0' name='hiddenwin' id='hiddenwin' scrolling='no' class='debugwin hidden'></iframe>
<script>
    /**
     * Switch account
     *
     * @param  string $account
     * @param  string $method
     * @access public
     * @return void
     */
    $(document).ready(function () {
        var verifyEncrypted = false;
        $('#verifyPassword').change(function () {
            verifyEncrypted = false
        })
        $('#verifyPassword').closest('form').find('#submit').click(function () {
            var password = $('input#verifyPassword').val().trim();
            var rand = $('input#verifyRand').val();
            if (!verifyEncrypted && password) $('input#verifyPassword').val(md5(md5(password) + rand));
            verifyEncrypted = true;
        });
    });

    function switchAccount(account, method) {
        if (method == 'dynamic') {
            link = createLink('user', method, 'period=' + period + '&account=' + account);
        } else if (method == 'todo') {
            link = createLink('user', method, 'account=' + account + '&type=' + type);
        } else {
            link = createLink('user', method, 'account=' + account);
        }
        location.href = link;
    }

    var mailsuffix = '';
    var account = [];

    function setDefaultEmail(num) {
        var mailValue = $('.email_' + num).val();
        if (mailValue.indexOf('@') <= 0) return;
        if (mailValue.indexOf('@') > 0) mailValue = mailValue.substr(mailValue.indexOf('@'));
        mailsuffix = mailValue;
    }

    function changeEmail(num) {
        var mailValue = $('.email_' + num).val();
        if (mailsuffix != '' && (mailValue == '' || mailValue == account[num] + mailsuffix)) $('.email_' + num).val($('.account_' + num).val() + mailsuffix);
        account[num] = $('.account_' + num).val();
    }

    function checkPassword(password) {
        $('#passwordStrength').html(password == '' ? '' : passwordStrengthList[computePasswordStrength(password)]);
        $('#passwordStrength').css('display', password == '' ? 'none' : 'table-cell');
    }

    // Prevent login page show in a iframe modal
    if (window.self !== window.top) window.top.location.href = window.location.href;

    $(document).ready(function () {
        /* Fix bug for misc-ping */
        $('#hiddenwin').removeAttr('id');

        var $login = $('#login');
        var adjustPanelPos = function () {
            var bestTop = Math.max(0, Math.floor($(window).height() - $login.outerHeight()) / 2);
            $login.css('margin-top', bestTop);
        };
        adjustPanelPos();
        $(window).on('resize', adjustPanelPos);

        $('#account').focus();

        $("#langs li > a").click(function () {
            selectLang($(this).data('value'));
        });

        $('#loginPanel #submit').click(function () {
            var account = $('#account').val().trim();
            var password = $('input:password').val().trim();
            var passwordStrength = computePasswordStrength(password);

            var hasMD5 = typeof (md5) == 'function';
            var rand = $('input#verifyRand').val();
            var referer = $('#referer').val();
            var link = createLink('user', 'login');
            var keepLogin = $('#keepLoginon').attr('checked') == 'checked' ? 1 : 0;

            $.ajax
            ({
                url: link,
                dataType: 'json',
                method: 'POST',
                data:
                    {
                        "account": account,
                        "password": hasMD5 ? md5(md5(password) + rand) : password,
                        'passwordStrength': passwordStrength,
                        'referer': referer,
                        'verifyRand': rand,
                        'keepLogin': keepLogin,
                    },
                success: function (data) {
                    if (data.result == 'fail') {
                        alert(data.message);
                        return false;
                    } else {
                        location.href = data.locate;
                    }
                }
            })

            return false;
        });
    });

    function setFeedback(obj) {
        var $obj = $(obj);
        var developer = $obj.prop('checked') ? '0' : '1';
        var feedbacker = $obj.prop('checked') ? '1' : '0';
        $(obj).closest('.input-group-addon').find('[name^=feedback]').val(feedbacker);
        $.get(createLink('group', 'ajaxGetPairs', "developer=" + developer), function (data) {
            var $group = $obj.closest('tr').find('select[id^=group]');
            var value = $group.val();
            var chosen = $group.hasClass('chosen');
            var index = $obj.attr('id').replace('feedback', '');

            if (typeof (defaultGroup) != 'undefined') value = defaultGroup;
            var preIndex = index - 1;
            if (preIndex >= 0) {
                var $preFeedback = $('input[id=feedback' + preIndex + ']');
                if ($obj.prop('checked') != $preFeedback.prop('checked') && value == 'ditto') value = 0;
            }

            $group.closest('td').html(data);
            $objGroup = $obj.closest('tr').find('#group');
            $objGroup.attr('id', 'group' + index).attr('name', 'group[' + index + ']');
            if (typeof (ditto) != 'undefined') $objGroup.append("<option value='ditto'>" + ditto + "</option>");
            $objGroup.val(value);
            if (chosen) $obj.closest('tr').find('select[id^=group]').addClass('chosen').chosen();
        });
    }

    function appendFeedback(obj, feedback, feedbackName, feedbackNotice) {
        if (typeof ('feedback') == 'undefined') feedback = '0';
        if (typeof ('feedbackName') == 'undefined') feedbackName = '';
        if (typeof ('feedbackNotice') == 'undefined') feedbackNotice = '';
        $(obj).wrap("<div class='input-group'></div>");
        $(obj).after("<span class='input-group-addon'><label class='checkbox-inline' for='feedback' title='" + feedbackNotice + "'><input type='hidden' name='feedback' id='realFeedback' value='" + feedback + "' /><input type='checkbox' id='feedback'" + (feedback == '1' ? ' checked ' : '') + "onchange='setFeedback(this)'/> " + feedbackName + "</label></span>");
    }
</script>
</body>
</html>
<script>
    $(function () {
        $('#poweredby').append("");
    })
</script>

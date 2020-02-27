<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>easyedu-后台管理系统</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link crossorigin="anonymous" integrity="sha384-6SClQBVFSY83VyPkr36mKEIuaHcXN69N5F076i0mYvEIsVK73AlDn/6vL2PyunVW" href="//lib.baomitu.com/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #17a2b8;
            height: 100vh;
        }

        #login .container #login-row #login-column #login-box {
            margin-top: 120px;
            max-width: 600px;
            height: 320px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }

        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        }

        #login .container #login-row #login-column #login-box #login-form #register-link {
            margin-top: -85px;
        }
    </style>
</head>

<body>
<div id="login">
    <h3 class="text-center text-white pt-5">easyEdu管理后台</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="{{ route('admin.loginRequest') }}" method="POST">
                        {{ csrf_field() }}

                        <h3 class="text-center text-info">注册</h3>
                        <div class="form-group">
                            <label for="username" class="text-info">用户名:</label><br>
                            <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">密码:</label><br>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-info">
                                <span>记住我</span> 
                                <span>
                                    <input id="remember-me" name="remember-me" value="1" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                </span>
                            </label>
                            <br>
                            <input type="submit" name="submit" class="btn btn-info btn-md">
                        </div>
                        <div id="register-link" class="text-right">
                            <a href="#" class="text-info">没有账号？点击注册</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdn.bootcss.com/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script crossorigin="anonymous" integrity="sha384-yhphg78T9x4D5MygsNWDAL6NRy6UurEwbp81HAeiKaBIh7rUi1+BIwJMlYJuPBlW" src="//lib.baomitu.com/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

<script>
    @if(get_first_flash('success'))
    swal("成功", "{{get_first_flash('success')}}", "success");
    @endif
    @if(get_first_flash('warning'))
    swal("警告", "{{get_first_flash('warning')}}", "warning");
    @endif
    @if(get_first_flash('error'))
    swal("错误", "{{get_first_flash('error')}}", "error");
    @endif
</script>
</html>
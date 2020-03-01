@extends('admin.layouts.app')
@section('content')
    <header class="header header-inverse">
        <div class="container">
            <div class="header-info">
                <div class="left">
                    <br>
                    <h2 class="header-title"><strong>系统设置</strong> <small class="subtitle">List of all your tickets are
                            available in this page.</small></h2>
                </div>
            </div>

            <div class="header-action">
                <nav class="nav">
                    <a class="nav-link active" href="{{ route('admin.administrator.index') }}">管理员</a>
                    <a class="nav-link" href="{{ route('admin.administrator_role.index') }}">角色</a>
                    <a class="nav-link" href="{{ route('admin.administrator_permission.index') }}">权限</a>
                    <a class="nav-link" href="{{ route('admin.administrator_menu.index') }}">添加后台菜单</a>
                </nav>
            </div>
        </div>
    </header><!--/.header -->

    <div class="main-content">
        <div class="container">
            <div class="row">

                <div class="col-lg-7">
                    <div class="card shadow-1">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th class="w-100px text-center">管理员姓名</th>
                                <th class="w-100px text-center">slug</th>
                                <th class="w-100px text-center">说明</th>
                                <th class="w-100px text-center">请求方法</th>
                                <th class="w-100px text-center">请求地址</th>
                                <th class="w-100px text-center">编辑</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><span class="badge"></span>小明</td>
                                <td><span class="badge"></span>1212121</td>
                                <td><span class="badge"></span>127.0.0.1</td>
                                <td><span class="badge"></span>127.0.0.1</td>
                                <td><span class="badge"></span>2020-02-27</td>
                                <td>
                                    <nav class="nav gap-2 fs-16">
                                        <a class="nav-link hover-primary cat-edit" href="#" data-provide="tooltip"
                                           title="Edit"
                                           data-perform="edit" data-target="modal-cat-edit.html"><i
                                                    class="ti-pencil"></i></a>
                                        <a class="nav-link hover-danger cat-delete" href="#" data-provide="tooltip"
                                           title="Delete" data-perform="delete" data-target="#"><i class="ti-trash"></i></a>
                                    </nav>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="col-lg-5">
                    <form class="card shadow-1">
                        <h5 class="card-title"><strong>添加管理员</strong></h5>

                        <div class="card-body">
                            <div class="form-group">
                                <label class="require">姓名</label>
                                <input class="form-control" type="text" name="name" id="cat-name"
                                       placeholder="请输入姓名">
                            </div>

                            <div class="form-group">
                                <label class="require">邮箱</label>
                                <input class="form-control" type="text" name="email" id="cat-email"
                                       placeholder="请输入邮箱">
                            </div>

                            <div class="form-group">
                                <label class="require">密码</label>
                                <input class="form-control" type="password" name="password" id="cat-password"
                                       placeholder="请输入密码">
                            </div>

                            <div class="form-group">
                                <label class="require">重复密码</label>
                                <input class="form-control" type="password" name="password" id="cat-password"
                                       placeholder="请再输入一次密码">
                            </div>

                        </div>

                        <footer class="card-footer text-right">
                            <button class="btn btn-primary">添加</button>
                        </footer>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

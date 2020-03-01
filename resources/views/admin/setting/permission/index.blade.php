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
                    <a class="nav-link" href="{{ route('admin.administrator.index') }}">管理员</a>
                    <a class="nav-link" href="{{ route('admin.administrator_role.index') }}">角色</a>
                    <a class="nav-link active" href="{{ route('admin.administrator_permission.index') }}">权限</a>
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
                                <th>权限名称</th>
                                <th>slug</th>
                                <th>说明</th>
                                <th>请求方法</th>
                                <th>请求地址</th>
                                <th>编辑</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($permissions as $permission)
                                <tr>
                                    <td><span class="badge"></span>{{$permission->display_name}}</td>
                                    <td>{{$permission->slug}}</td>
                                    <td>{{$permission->description}}</td>
                                    <td>{{$permission->method}}</td>
                                    <td>{{$permission->url}}</td>
                                    <td>
                                        <nav class="nav gap-2 fs-16">
                                            <a class="nav-link hover-primary" title="编辑"
                                               href="{{route('admin.administrator_permission.edit',$permission)}}">
                                                <i class="ti-pencil"></i>
                                            </a>
                                            @include('admin.components.destroy', ['url' => route('admin.administrator_permission.destroy', $permission)])

                                        </nav>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="5">暂无记录</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="col-lg-5">
                    <form class="card shadow-1" action="{{ route('admin.administrator_permission.store') }}"
                          method="POST">
                        <h5 class="card-title"><strong>添加权限</strong></h5>

                        <div class="card-body">
                            <div class="form-group">
                                <label class="require">权限名称</label>
                                <input class="form-control" type="text" name="display_name" id="display_name"
                                       placeholder="请输入姓名" required>
                            </div>

                            <div class="form-group">
                                <label class="require">Slug</label>
                                <input class="form-control" type="text" name="slug" id="cat-slug"
                                       placeholder="请输入邮箱" required>
                            </div>

                            <div class="form-group">
                                <label class="require">描述</label>
                                <input class="form-control" type="text" name="description" id="cat-description"
                                       placeholder="请输入密码" required>
                            </div>

                            <div class="form-group">
                                <label class="require">请求方式</label>
                                <select class="form-control" id="select" name="method[]" required>
                                    <option value="GET">GET</option>
                                    <option value="POST">POST</option>
                                    <option value="PUT">PUT</option>
                                    <option value="DELETE">DELETE</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="require">请求地址</label>
                                <input class="form-control" type="text" name="url" id="cat-url"
                                       placeholder="请求地址" required>
                            </div>


                        </div>

                        <footer class="card-footer text-right">
                            <button class="btn btn-primary" type="submit">添加</button>
                        </footer>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

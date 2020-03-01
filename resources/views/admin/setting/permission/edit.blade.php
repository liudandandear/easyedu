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
                    <a class="nav-link active" href="{{ route('admin.administrator_role.index') }}">角色</a>
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
                    <form class="card shadow-1" action="{{ route('admin.administrator_permission.update',$permission->id)}}"
                          method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <h5 class="card-title"><strong>编辑权限</strong></h5>

                        <div class="card-body">
                            <div class="form-group">
                                <label class="require">权限名称</label>
                                <input class="form-control" type="text" name="display_name"
                                       value="{{$permission->display_name}}"
                                       placeholder="请输入角色名" required>
                            </div>

                            <div class="form-group">
                                <label class="require">Slug</label>
                                <input class="form-control" type="text" name="slug" value="{{$permission->slug}}"
                                       placeholder="请输入 Slug" required>
                            </div>

                            <div class="form-group">
                                <label class="require">说明</label>
                                <input class="form-control" type="text" name="description"
                                       value="{{$permission->description}}"
                                       placeholder="请输入说明" required>
                            </div>

                            <div class="form-group">
                                <label class="require">请求方式</label>
                                <select class="form-control" id="select" name="method[]" required>
                                    <option value="GET" {{in_array('GET', $permission->getMethodArray()) ? 'selected' : ''}}>GET</option>
                                    <option value="POST" {{in_array('POST', $permission->getMethodArray()) ? 'selected' : ''}}>POST</option>
                                    <option value="PUT" {{in_array('PUT', $permission->getMethodArray()) ? 'selected' : ''}}>PUT</option>
                                    <option value="DELETE" {{in_array('DELETE', $permission->getMethodArray()) ? 'selected' : ''}}>DELETE</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="require">请求地址</label>
                                <input class="form-control" type="text" name="url"
                                       value="{{$permission->url}}"
                                       placeholder="请输入说明" required>
                            </div>
                        </div>

                        <footer class="card-footer text-right">
                            <button class="btn btn-primary" type="submit">保存</button>
                        </footer>

                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

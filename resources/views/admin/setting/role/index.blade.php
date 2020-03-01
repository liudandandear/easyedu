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
                    <div class="card shadow-1">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>角色名</th>
                                <th>Slug</th>
                                <th>描述</th>
                                <th>创建时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($roles as $role)
                                <tr>
                                    <td><span class="badge"></span>{{$role->display_name}}</td>
                                    <td>{{$role->slug}}</td>
                                    <td>{{$role->description}}</td>
                                    <td>{{$role->created_at}}</td>
                                    <td>
                                        <nav class="nav gap-2 fs-16">
                                            <a class="nav-link hover-primary" title="编辑"
                                               href="{{route('admin.administrator_role.edit',$role)}}">
                                                <i class="ti-pencil"></i>
                                            </a>
                                            @include('admin.components.destroy', ['url' => route('admin.administrator_role.destroy', $role)])

                                            <a class="nav-link hover-warning" title="授权"
                                               href="{{route('admin.administrator_role.permission')}}">
                                                <i class="ti-star"></i>
                                            </a>
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
                    <form class="card shadow-1" action="{{ route('admin.administrator_role.store') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <h5 class="card-title"><strong>创建角色</strong></h5>

                        <div class="card-body">
                            <div class="form-group">
                                <label class="require">角色名</label>
                                <input class="form-control" type="text" name="display_name"
                                       placeholder="请输入角色名" required>
                            </div>

                            <div class="form-group">
                                <label class="require">Slug</label>
                                <input class="form-control" type="text" name="slug"
                                       placeholder="请输入 Slug" required>
                            </div>

                            <div class="form-group">
                                <label class="require">说明</label>
                                <input class="form-control" type="text" name="description"
                                       placeholder="请输入说明" required>
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

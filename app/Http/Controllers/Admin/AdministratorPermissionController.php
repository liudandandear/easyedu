<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminPermissionRequest;
use App\Models\AdminPermission;

class AdministratorPermissionController extends Controller
{

    /**
     * 权限管理主页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $permissions = AdminPermission::paginate(10);
        return view('admin.setting.permission.index', compact('permissions'));
    }

    /**
     * 添加权限保存请求
     * @param AdminPermissionRequest $request
     * @param AdminPermission $permission
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AdminPermissionRequest $request, AdminPermission $permission)
    {
        $permission->fill($request->filldata())->save();
        flash('添加成功', 'success');

        return back();
    }

    /**
     * 编辑权限视图路由
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $permission = AdminPermission::findOrFail($id);

        return view('admin.setting.permission.edit', compact('permission'));
    }

    /**
     * 编辑权限保存请求
     * @param AdminPermissionRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AdminPermissionRequest $request, $id)
    {
        $permission = AdminPermission::findOrFail($id);
        $permission->fill($request->filldata())->save();
        flash('权限编辑更新成功', 'success');

        return redirect()->to('/admin/administrator_permission');
    }

    /**
     * 删除权限请求
     * @param $id
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $permission = AdminPermission::findOrFail($id);
        if ($permission->roles()->exists()) {
            return response()->json([
                'status' => 201,
                'message' => '该权限下还有角色，请先删除该角色',
            ], 201);
        } else {
            $permission->delete();
            return response()->json([
                'status' => 200,
                'message' => '删除成功!',
            ], 200);
        }

        return back();
    }
}
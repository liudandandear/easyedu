<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminRoleRequest;
use App\Models\AdminRole;

class AdministratorRoleController extends Controller
{

    /**
     * 角色管理主页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $roles = AdminRole::paginate(10);
        return view('admin.setting.role.index', compact('roles'));
    }

    /**
     * 添加角色请求
     * @param AdminRoleRequest $request
     * @param AdminRole $role
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AdminRoleRequest $request, AdminRole $role)
    {
        $role->fill($request->filldata())->save();
        flash('角色添加成功', 'success');
        return back();
    }

    /**
     * 更新角色请求
     * @param AdminRoleRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AdminRoleRequest $request, $id)
    {
        $role = AdminRole::findOrFail($id);
        $role->fill($request->filldata())->save();
        flash('角色编辑更新成功！', 'success');

        return redirect()->to('/admin/administrator_role');
    }

    /**
     * 编辑角色视图路由
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $role = AdminRole::findOrFail($id);
        return view('admin.setting.role.edit', compact('role'));
    }

    /**
     * 删除角色请求
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $role = AdminRole::findOrFail($id);
        if ($role->adminUsers()->exists()) {
            return response()->json([
                'status' => 201,
                'message' => '该角色下还存在管理员，请先删除相应的管理员',
            ], 201);
        } else {
            $role->delete();
            return response()->json([
                'status' => 200,
                'message' => '删除成功!',
            ], 200);
        }
    }

    public function permission()
    {
    }
}
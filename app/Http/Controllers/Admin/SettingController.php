<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class SettingController extends Controller
{

    public function index()
    {
        $subHeaders = ["管理员", "角色", "权限", "后台菜单"];
        return view('admin.setting.administrator.index', compact('subHeaders'));
    }

    public function administrator()
    {
    }
}
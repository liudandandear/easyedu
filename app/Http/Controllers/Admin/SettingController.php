<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class SettingController extends Controller
{

    public function index()
    {
        $subHeaders = [
            "title" => "权限"
        ];
        return view('admin.setting.administrator.index', compact('subHeaders'));
    }

    public function administrator()
    {
    }
}
<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function index()
    {
        $subHeaders = [
            "学生"
        ];
        return view('admin.user.index',compact('subHeaders'));
    }
}
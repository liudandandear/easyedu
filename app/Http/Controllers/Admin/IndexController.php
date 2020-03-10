<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index()
    {
        $subHeaders = [
            "面板"
        ];
        return view('admin.index', compact('subHeaders'));
    }
}
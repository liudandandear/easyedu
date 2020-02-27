<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $guard = 'admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(
            'check.admin.status',
            [
                'except' => [
                    'login', 'loginRequest',
                ],
            ]
        );
    }

    /**
     * 用户登录
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login()
    {
        return view('admin.login');
    }

    /**
     * 用户退出
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout()
    {
        Auth::guard($this->guard)->logout();
        flash('您已安全退出！', 'success');
        return redirect(route('admin.login'));
    }

    /**
     * 用户登录请求
     * @link 教程 https://blog.csdn.net/MShow006/article/details/81585234
     * @param LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function loginRequest(LoginRequest $request)
    {
        $users = $request->only(['email', 'password']);
        if (Auth::guard($this->guard)->attempt($users)) {
            flash('您已登录成功！', 'success');
            return redirect(route('admin.index.index'));
        } else {
            flash('您的邮箱或密码不正确，请重新输入');
            return back()->withInput(['email']);
        }
    }

    /**
     * 用户注册
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register()
    {
        return view('admin.register');
    }
}

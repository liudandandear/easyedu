<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

/**
 * 检查管理员的登录状态
 * Class CheckAdminStatus
 * @package App\Http\Middleware
 */
class CheckAdminStatus
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('admin')->check()) {
            flash('您未登录，请登录后操作！');
            return redirect(route('admin.login'));
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //判断session() 辅助函数
        if(session('uname')){
            //就是你判断成功了 可以往路由的规则里面进行访问
            return $next($request);
        } else {
            return redirect('/login');
        }
    }
}

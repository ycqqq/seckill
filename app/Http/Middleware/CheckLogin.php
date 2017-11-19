<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = $request->cookie('token');
        $isLogin = true;
        $decrypted = [];
        try {
            if ($token) {
                $decrypted = Crypt::decrypt($token);
                $isLogin = array_get($decrypted, 'expireTime', '') > time() ? true : false;
            } else {
                $isLogin = false;
            }
        } catch (DecryptException $e) {
            $isLogin = false;
        }

        if ( ! $isLogin && ! $request->is('admin')) {
            return redirect('/login');
        }

        $request->attributes->add(['token_name' => array_get($decrypted, 'name', '')]);

        return $next($request);
    }
}

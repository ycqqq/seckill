<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Tool\Token;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    use Token;

    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $this->validate(
            $request, [
                'username' => 'required',
                'password' => 'required',
            ]
        );
        $username = $request->username;
        $password = $request->password;
        $res = User::where(['telephone' => $username])->first();
        if ($res) {
            if ( ! Hash::check($password, $res->password)) {
                return response()->json(['code' => 300, 'msg' => '用户名或密码错误']);
            }
        } else {
            return response()->json(['code' => 300, 'msg' => '用户名或密码错误']);
        }
        $token = $this->generateToken($res->username);
        $cookie = cookie('token', $token, $this->tokenExpireIn / 60);

        return response()->json(['code' => 200, 'msg' => '登录成功', 'token' => $token])->cookie($cookie);
    }

    public function logout()
    {
        $cookie = Cookie::forget('token');

        return redirect('/admin')->cookie($cookie);
    }
}

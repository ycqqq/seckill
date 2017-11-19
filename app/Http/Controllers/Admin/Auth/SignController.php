<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Tool\Token;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class SignController extends Controller
{
    use Token;

    public function index()
    {
        return view('admin.sign');
    }

    public function sign(Request $request)
    {
        $this->validate(
            $request, [
                'username'   => 'required|telephone',
                'password'   => 'required',
                'repassword' => 'required',
                'name'       => 'required',
            ]
        );
        $username = $request->username;
        $password = $request->password;
        $repassword = $request->repassword;
        $name = $request->name;
        if ($password != $repassword) {
            return response()->json(['code' => 300, 'msg' => '密码输入不一致']);
        }
        //判断是否注册
        if (User::whereTelephone($username)->first()) {
            return response()->json(['code' => 300, 'msg' => '用户名已存在']);
        }
        //添加用户
        $user = User::insertGetId(
            [
                'telephone' => $username,
                'password'  => Hash::make($password),
                'username'  => $name,
            ]
        );
        if ($user) {
            $token = $this->GenerateToken($name);
            $cookie = cookie('token', $token, $this->tokenExpireIn / 60);

            return response()->json(['code' => 200, 'msg' => '注册成功', 'token' => $token])->cookie($cookie);
        } else {
            return response()->json(['code' => 300, 'msg' => '注册失败~']);
        }
    }
}

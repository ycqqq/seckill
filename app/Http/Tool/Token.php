<?php
/**
 * Created by PhpStorm.
 * User: qyc
 * Date: 2017/11/19
 * Time: 下午9:18
 */

namespace App\Http\Tool;

use Illuminate\Support\Facades\Crypt;

trait Token
{
    private $tokenExpireIn = 86400;

    public function GenerateToken($name)
    {
        $payload = ['name'       => $name, 'expireIn' => $this->tokenExpireIn,
                    'expireTime' => time() + $this->tokenExpireIn];

        return Crypt::encrypt($payload);
    }
}
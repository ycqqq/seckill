<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\User
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $telephone 手机号码
 * @property string $password 密码
 * @property string $username 姓名
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\User whereUsername($value)
 */
class User extends Model
{
    protected $table = 'ms_admin_user';

    public $timestamps = false;

}

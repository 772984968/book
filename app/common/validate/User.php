<?php
namespace app\common\validate;
use think\Validate;
//用户验证类
class User extends Validate{

    protected $rule =   [
        'username'  => 'require',
        'password'   => 'require',
    ];

    protected $message  =   [
        'username.require' => '用户名必须',
        'password.require'   => '密码必须',
    ];
    protected $scene = [
        'login'  =>  ['username','password'],
    ];
}

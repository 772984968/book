<?php
namespace app\common\validate;
use think\Validate;
//用户验证类
class Admin extends Validate{

    protected $rule =   [
        'username'  => 'require|unique:admin|max:25',
        'password'   => 'require',
        'repassword'=>'require|confirm:password',
        'role_id' => 'require|number',
        'is_admin'  => 'require|number',
    ];

    protected $message  =   [
        'username.require' => '用户名必须',
        'username.unique'     => '用户名已存在',
        'password.require'   => '密码必须',
        'repassword.require'   => '确认密码必须',
        'repassword.confirm'   => '两次密码不一致',
        'role_id.require'  => '所属角色必须',
        'is_admin.require'        => '是否管理员必须',
    ];

    protected $scene = [
        'add'  =>  ['username','password','role_id','is_admin','repassword'],
        'edit'  =>  ['username','password','role_id','is_admin'],
    ];

}

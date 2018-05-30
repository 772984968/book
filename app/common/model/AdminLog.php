<?php

namespace app\common\model;

use think\Model;

class AdminLog extends Model
{
    protected $name="admin_log";
    //登录日志
    public  static function log(){
        $data['ip']=request()->ip();
        $data['admin_username']=session('username');
        self::create($data);
        return true;
    }

}

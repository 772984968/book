<?php

namespace app\common\model;

use think\Model;

class Role extends Model
{
    public function getStateAttr($value)
    {
        $state = [0=>'禁用',1=>'正常'];
        return $state[$value];
    }
    //角色模型
    //关联用户表
    public function admin(){
        return  $this->hasMany('Admin','role_id');
    }
}

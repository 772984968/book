<?php

namespace app\common\model;

use think\Model;
//用户模型
class Comments extends Model
{

    public function getStatusAttr($value)
    {
        $state = [0=>'审核中',1=>'正常'];
        return $state[$value];
    }
    //关联角色
    public function user()
    {
        return $this->belongsTo('User','uid')->field('id,name');
    }
    public function list()
    {
        return $this->belongsTo('lists','list_id')->field('id,biaoti');
    }
}

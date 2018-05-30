<?php

namespace app\common\model;

use think\Model;
//用户模型
class Lists extends Model
{
    protected $table = 'b_list';
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
    public function type()
    {
        return $this->belongsTo('type','type_id')->field('name');
    }
}

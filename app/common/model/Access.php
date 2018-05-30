<?php

namespace app\common\model;

use think\Model;

class Access extends Model
{
    public function getStateAttr($value)
    {
        $state = [0=>'禁用',1=>'正常'];
        return $state[$value];
    }
    public function getClassAttr($value)
    {
        $state = [0=>'一级',1=>'二级',2=>'三级'];
        return $state[$value];
    }

}

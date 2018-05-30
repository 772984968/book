<?php

namespace app\common\model;

use think\Model;
use think\model\relation\BelongsTo;

class Admin extends Model
{
    //用户模型
    protected $name = 'admin';

    public function getStateAttr($value)
    {
        $state = [0=>'禁用',1=>'正常'];
        return $state[$value];
    }

    public function getIsAdminAttr($value)
    {
        $status = [0=>'否',1=>'是'];
        return $status[$value];
    }
     //关联角色
    public function role()
    {
        return $this->belongsTo('Role')->field('id,name');
    }
    //检查用户名
   public  static function  cheackAdmin($username,$password=""){
        $where=[];
        $where['username']=$username;
         if ($password!=''){
         $where['password']=md5($password);
    }
    $data=self::get($where);
        if (!$data){
            return false;
        }
        return  $data;
    }

}

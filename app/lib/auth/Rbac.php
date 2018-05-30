<?php
namespace  app\lib\auth;
use think\Db;
use think\console\Input;
/**
 * 权限认证类
 */
class Rbac {
    //默认配置
    protected  $config = array(
        'rbac_on'           => true,                      // 认证开关
      //  'Rbac_type'         => 2,                         // 认证方式，1为实时认证；2为登录认证。
        'rbac_access' => 'b_access', // 权限规则表
        'rbac_role'         => 'b_role',         //用户角色表
        'rbac_admin'         => 'b_admin'  ,           // 用户信息表
        'rbac_log'         => 'b_system_log'             // 用户信息表


    );
    //验证用户
    public function  check($name,$uid){
        //判断是否开启验证
        if ($this->config['rbac_on']===false){
           return true;
        }
        $adminData=$this->getAdmin($uid);
        //判断是否管理员
        if ($adminData['is_admin']==1){
           return true;
        }

        //通过验证的规则列表
        if (session('rules')){
           if (in_array($name,session('rules')))
               return true;
        }
        //取出所有的用户权限
        $roles=$this->getList($adminData['role_id']);
        if (!$roles||$roles['state']!=1){
            return false;
        }
        //取出规则
        $access=$this->getAccess($roles['access']);
        if (!$access){
            return false;
        }

        foreach ($access as $vo){
            if($vo['url']==$name){
                    if (session('rules')){
                    $rules=session('rules');
                    array_push($rules,$name);
                    session('rules',$rules);
                }else{
                    session('rules',[$name]);
                }
                return true;
            }
        }
        return false;

    }
    //获取权限ID
    public function getList($role_id){
        $roles=Db::table($this->config['rbac_role'])->where(['id'=>$role_id])->find();
        if ($roles){
            $roles['access']=explode(',',$roles['access_id']);
            return $roles;
        }
        return  false;
    }
    //获取具体权限
    public function getAccess($access_id){
        $access=Db::table($this->config['rbac_access'])->where('id','in',$access_id)->select();
        if ($access){
            return $access;
        }
        return false;



    }
    //获取用户信息
    public function getAdmin($uid){
       return Db::table($this->config['rbac_admin'])->where(['id'=>$uid])->find();

    }
    //操作日志表
    public  function addLog(){
        //get、post操作进行记录
        $query=array_merge(input('post.'),input('get.'));
        if (empty($query))return;
        $data['query_params']=json_encode($query);
        $data['admin_username']=session('username');
        $data['ip']=request()->ip();
        $data['target_url']=$_SERVER['REQUEST_URI']??'';
        $data['ua']=$_SERVER['HTTP_USER_AGENT']??'';
        Db::table($this->config['rbac_log'])->insert($data);
        return ;
    }
}
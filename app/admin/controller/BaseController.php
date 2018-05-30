<?php
namespace app\admin\controller;
use think\Controller;
use app;
use think\Db;
use app\lib\auth\Rbac;
use app\lib\factory\Factory;
/**
 *
 * @author Administrator
 *  基本控制器
 *
 */
class BaseController extends Controller
{

    public  function _initialize(){
        if (session('username')==''||session('adminId')==''){
            self::redirect('login/index','','400');
        }
        //权限认证
        $auth=Factory::getRbac();
        $rules=request()->controller().'/'.request()->action();
        $system=config('system');
        if (!in_array($rules,$system['url'])){
            if (!$auth->check($rules, session('adminId'))){
                $this->redirect('index/outerror');
            }
         }
 //        var_dump($rules);
         //根据权限生成菜单
         $admin=$auth->getAdmin(session('adminId'));
         if ($admin['is_admin']!=1){
             $role=$auth->getList($admin['role_id']);
             $menu=$auth->getAccess($role['access']);
         }else{
           $menu=Db('access')->select();
         }
         //管理员生成全部菜单
        $list=[];
        foreach ($menu as $key=>$vo){
            if ($vo['pid']==0){
               $vo['son']=tree_son($menu,$vo['id']);
               $list[]=$vo;
            }
        }
        $auth->addLog();
        self::assign('menu',$list);
    }



}

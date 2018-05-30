<?php

namespace app\api\controller;

use think\Controller;
use app\lib\factory\Factory;
use think\Cache;


/**
 *
 * @author Administrator
 * api基本控制器
 */
class BaseController extends Controller
{
    public  function _initialize(){

        $route=$this->request->controller().'/'.$this->request->action();
        $route = $route ? $route : 'Index/index';
        //不需要登录的方法
        $noLoginMethods=config('api')['noLogin'];
        $checkMethods=config('api')['check'];
        if( in_array($route,$noLoginMethods) ) {
            return true;
        }
        if(!in_array($route,$checkMethods) ) {
            $this->jsonError('请求方法不存在','404');
        }
        //线上环境或测试环境
        if (HUANG_JING>1){
            $userId = $this->request->get('userId');
            $token = $this->request->get('token');
            if (empty($userId)||empty($token)){
                $this->jsonError('缺少用户信息或token信息');
           }
           $userModel=Factory::getInstance()->getUser($userId);
           if (!$userModel){
               $this->jsonError('不存在该用户！');
           }
           if (!$userModel->loginByToken($token)){
               $this->jsonError('登录过期或用户未登录');
           }
           return true;
       }

        //本地环境
        if(HUANG_JING === 1) {
            $userKey=session('userKey');
              if( $userKey ) {

                $factory=Factory::getInstance();
                $user=$factory->getUser($userKey);
                if (!$user){
                $this->jsonError('用户不存在','404');
                }
            } else {

                $this->jsonError('请登入后再操作!','401');
            }
        }
        //不需要验证权限的方法
   }

    //返回错误信息
    public static function  jsonError($msg='系统错误',$code='400',$data=[]){
        if (HUANG_JING===1){
            // 允许 runapi.showdoc.cc 发起的跨域请求
            header("Access-Control-Allow-Origin: http://runapi.showdoc.cc");
            header("Access-Control-Allow-Credentials : true");
        }
        header('Content-type: application/json');
        echo json_encode(['code'=>$code,'msg'=>$msg,'data'=>$data]);
      die();

   }
   //返回成功信息
   public static function jsonSuccess($msg='ok',$code='200',$data=[]){
       if (HUANG_JING===1){
           // 允许 runapi.showdoc.cc 发起的跨域请求
           header("Access-Control-Allow-Origin: http://runapi.showdoc.cc");
           header("Access-Control-Allow-Credentials : true");
       }
       header('Content-type: application/json');
       echo json_encode(['code'=>$code,'msg'=>$msg,'data'=>$data]);
       die();

   }
}

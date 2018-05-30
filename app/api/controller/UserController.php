<?php

namespace app\api\controller;

use think\Controller;
use app\common\model\User;
use app\lib\factory\Factory;

class UserController extends BaseController
{

    //用户登录
    public function login(){
        $data=input('post.');
        $result = $this->validate($data,'User.login');
        if(true !== $result){
            $this->jsonError($result);
        }
        $userModel=User::get(['username'=>$data['username'],'password'=>md5($data['password'])]);
        if (!$userModel){
            $this->jsonError('用户不存在或密码错误');
        }
        $data=Factory::getInstance()->getUser($userModel->id)->login();
        if ($data){
            $this->jsonSuccess('用户登录成功','200',$data);
        }else{
            $this->jsonSuccess('用户登录成功','200',$data);
        }
 }
 //用户退出
 public function logout(){
    session(null);
    $this->jsonSuccess('用户退出成功','200');
 }


}

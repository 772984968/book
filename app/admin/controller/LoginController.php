<?php

namespace app\admin\controller;

use think\Controller;
use app\common\model\Admin;
use think\captcha\Captcha;
class LoginController extends Controller
{

    //登录控制器首页
    public function index(){
            return $this->fetch();
    }
        // 用户登录
    public function login()
    {
        $data = input('post.');
        $captcha = new Captcha();
      if (! $captcha->check($data['captcha'])) {
            return json([
                'code' => 400,
                'msg' => '验证码错误！'
            ]);
            return false;
        }
        $rs=Admin::cheackAdmin($data['username'], $data['password']);
        if (!$rs) {
            return json([
                'code' => 400,
                'msg' => '用户名或密码错误']);
        }
       session('username',$rs->username);
       session('adminId',$rs->id);
       //添加登录日志
       \app\common\model\AdminLog::log();
        return json([
                'code' => 200,
                'msg' => '登陆成功',
                'url'=>url('index/index'),
        ]);
            }

            //用户登出
    public function logout(){
        session(null);
        $this->redirect('login/index');
    }
}

<?php

namespace app\api\controller;

use think\Controller;
use think\Request;
use app\common\lib\message\Msg;
class MsgController extends BaseController
{
    //注册验证码
    public  function sendRegister(){
        $usrename = $this->request->post('username');
        if(!isMobile( $usrename ) ) {
            $this->jsonError('帐号需为手机号码!');
        }
        $msg=new Msg();
        $msg->username=$usrename;
        $msg->userIp=$this->request->ip();
        if (!$msg->register()){
            $this->jsonError($msg->error);
        }
        $this->jsonSuccess('验证码发送成功,有效时间'.$msg->validMinute.'秒');

    }
    //找回密码
    public function sendFindPassoword(){
        $usrename = $this->request->post('username');
        if(!isMobile( $usrename ) ) {
            $this->jsonError('帐号需为手机号码!');
        }
        $msg=new Msg();
        $msg->username=$usrename;
        $msg->userIp=$this->request->ip();
        if (!$msg->findPassword()){
            $this->jsonError($msg->error);
        }
        $this->jsonSuccess('验证码发送成功,有效时间'.$msg->validMinute.'秒');
    }

}

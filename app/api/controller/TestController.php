<?php

namespace app\api\controller;

use think\Controller;
use app\lib\factory\Factory;


/**
 *
 *测试接口控制器
 *
 */
class TestController
{
    public function  test(){

     //   $abc=json_decode('{"code":200,"msg":"9607","obj":"1723"}');
       $ab= \app\common\lib\message\Msg::getFindpasswordNote('15899595363');
          $abc=\app\common\lib\message\Msg::getRegisterNote('15899595363');
          var_dump($ab);
        var_dump($abc);die;


    }

}

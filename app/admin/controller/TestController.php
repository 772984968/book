<?php

namespace app\admin\controller;

use think\Controller;

class TestController extends Controller
{

    public  function datatable(){

        return $this->fetch();
    }
    public function jeditable(){
        return $this->fetch();
    }
    //表单示例
    public function formtest(){
        return $this->fetch();


    }
    //layerui表单示例
    public  function layerFrom(){
        return $this->fetch();

    }


 }

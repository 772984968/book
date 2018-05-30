<?php
namespace app\admin\controller;

use think\Controller;
class IndexController extends BaseController
{
    //系统首页
    public function index()
    {
        return $this->fetch();
    }

    //菜单默认页
    public function default(){
        return $this->fetch();
    }
    //菜单默认页
    public function outerror(){
        return $this->fetch();
    }
}

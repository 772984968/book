<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class AdminLogController extends TemplateController
{


    public $config = [
     'modelName' => 'app\common\model\AdminLog', // 模型字段
     'field' => [
     'id',
     'admin_username',
     'ip',
     'time',
     ], // 查询的字段
     'bars' => [
     'title' => '管理员登录日志',
         'url'=>'adminLog/index',
     ],//标题
   //  'del'=>['title'=>'删除管理员日志','url'=>'adminLog/del'],
     ];

    public function getTitle()
    {


         return [[
      //   ['type'=>'checkbox'],
         ['field'=>'id','title'=>'ID','sort'=>'true'],
         ['field'=>'admin_username','title'=>'登录用户'],
         ['field'=>'ip','title'=>'登录IP'],
             ['field'=>'time','title'=>'登录时间','sort'=>true],
     //    ['field'=>'right','title'=>'数据操作','align'=>'center','toolbar'=>'#barDemo','width'=>300],
         ]];

    }


    public function getOption()
    {
         return [
         ];


    }


}

<?php

namespace app\admin\controller;

use think\Controller;

class SystemLogController extends TemplateController
{

   public $config = [
     'modelName' => 'app\common\model\SystemLog', // 模型字段
     'field' => [
     'id',
     'admin_username',
     'target_url',
     'query_params',
     'ua',
     'ip',
     'note',
      'create_time',
     ], // 查询的字段
     'bars' => [
     'title' => '系统管理',
     'url' => 'SystemLog/index'
     ],//标题
    // 'del'=>['title'=>'删除记录','url'=>'SystemLog/del'],
     ];


    public function getTitle()
    {
        return [[
        // ['type'=>'checkbox'],
         ['field'=>'id','title'=>'ID','sort'=>true],
         ['field'=>'admin_username','title'=>'操作用户名'],
         ['field'=>'target_url','title'=>'操作路由'],
         ['field'=>'query_params','title'=>'操作参数'],
         ['field'=>'ua','title'=>'浏览器信息'],
         ['field'=>'ip','title'=>'操作ip'],
         ['field'=>'note','title'=>'备注'],
         ['field'=>'create_time','title'=>'操作时间','sort'=>true],
      //   ['field'=>'right','title'=>'数据操作','align'=>'center','toolbar'=>'#barDemo','width'=>300],
         ]];

    }


    public function getOption()
    {

        return [];

    }


}

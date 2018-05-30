<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;

class AccessController extends TemplateController
{


    public $config = [
        'modelName' => 'app\common\model\Access', // 模型字段
        'field' => [
            'id',
            'title',
            'url',
            'pid',
            'state',
            'class',

        ], // 查询的字段
        'bars' => [
            'title' => '权限管理',
            'url'=>'access/index',
        ],
        'add'=>['title'=>'添加权限菜单','url'=>'Access/add'],
        'edit'=>['title'=>'编辑权限','url'=>'Access/edit'],
        'del'=>['title'=>'删除权限','url'=>'Access/del'],
        'delall'=>['title'=>'批量删除','url'=>'Access/delall'],
    ];

    //取搜索框字段
    protected function getSearch()
    {
    }
    // 显示首页
    public function index()
    {
        if ($this->request->isAjax()){
                return $this->getField();
        }
        $this->assign('data',$this->getData());
        return $this->fetch();
    }


    public function getOption()
    {
        $data=Db('access')->field('pid,id,title as name')->select();
        $data=tree($data);
        foreach ($data as $key=>$vo){
            $data[$key]['name']=$vo['level'].$vo['name'];
        }
        array_unshift($data,['id'=>0,'name'=>'顶级菜单','level'=>'']);
        return [
            ['key'=>'title','title'=>'菜单标题','value'=>'','html'=>'text','option'=>['placeholder'=>'请输入菜单标题']],
            ['key'=>'url','title'=>'权限URl','value'=>'','html'=>'text','option'=>['placeholder'=>'请输入菜单URL:admin/index']],
            ['key'=>'img','title'=>'图标','value'=>'fa fa-table','html'=>'text','option'=>['placeholder'=>'请输入菜单图标']],
            ['key'=>'pid','title'=>'所属权限','value'=>'','html'=>'select','option'=>$data],
            ['key'=>'class','title'=>'菜单等级','value'=>'','html'=>'radio','option'=>[
                ['id'=>0,'name'=>'一级菜单','check'=>'checked'],
                ['id'=>1,'name'=>'二级菜单'],
                ['id'=>2,'name'=>'三级菜单'],
            ]],
           ['key'=>'state','title'=>'状态','value'=>'','html'=>'radio','option'=>[
               ['id'=>1,'name'=>'正常','check'=>'checked'],
               ['id'=>0,'name'=>'禁用'],
           ]
               ],
        ];
   }

    public function getTitle()
    {
        return [[
            ['type'=>'checkbox'],
            ['field'=>'id','title'=>'ID','sort'=>'true'],
            ['field'=>'title','title'=>'权限标题'],
            ['field'=>'url','title'=>'权限URL','sort'=>true],
            ['field'=>'pid','title'=>'上级ID'],
            ['field'=>'class','title'=>'菜单等级'],
            ['field'=>'state','title'=>'状态','sort'=>true],
            ['field'=>'right','title'=>'数据操作','align'=>'center','toolbar'=>'#barDemo','width'=>300],
        ]];
    }

    // 获取字段
    public function getField(){
        $model=new $this->config['modelName'];
        $where=[];
        if (input('id')!=null){
            $paramas=input('id');
            $where=['id'=>$paramas];
        }
       $paginate=$model->field($this->config['field'])->where($where)->select();
        $data=tree($paginate);
        foreach ($data as $key=>$vo){
            $data[$key]['title']=$vo['level'].$vo['title'];
        }
        return json(['code'=>0,'msg'=>'','count'=>$model->count(),'data'=>$data]);
    }

}

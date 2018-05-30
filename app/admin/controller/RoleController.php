<?php

namespace app\admin\controller;

use think\Controller;
use think\console\Input;

class RoleController extends TemplateController
{

   public $config = [
        'modelName' => 'app\common\model\Role', // 模型字段
        'field' =>['id','name','state','access_id','update_time','remark'], // 查询的字段
        'bars' => [
            'title' => '角色管理',
            'url'=>'role/index'
        ],//标题
        'add'=>['title'=>'添加角色','url'=>'role/add'],
        'del'=>['title'=>'删除角色','url'=>'role/del'],
        'edit'=>['title'=>'编辑角色','url'=>'role/edit'],
        'delall'=>['title'=>'批量删除','url'=>'role/delall'],

    ];
    public function getTitle()
    {
        return [[
            ['type'=>'checkbox'],
            ['field'=>'id','title'=>'ID','sort'=>'true'],
            ['field'=>'name','title'=>'角色名称'],
            ['field'=>'access_id','title'=>'权限ID','sort'=>true],
            ['field'=>'update_time','title'=>'更新时间'],
            ['field'=>'remark','title'=>'备注'],
            ['field'=>'state','title'=>'状态','sort'=>true],
            ['field'=>'right','title'=>'数据操作','align'=>'center','toolbar'=>'#barDemo','width'=>300],
        ]];
    }
    //添加
    public function add(){
        if ($this->request->isAjax()){
            $data=input('post.');
            $list['name']=$data['name'];
            $list['remark']=$data['remark'];
            $list['state']=$data['state'];
            $list['access_id']='';
            if (isset($data['access_ids'])){
                $list['access_id']=implode(',',$data['access_ids']);
            }
            $model=new $this->config['modelName'];
            if($model->allowField(true)->save($list)){
                return  json(['code'=>200,'msg'=>'添加成功']);
            }else{
                return json(['code'=>400,'msg'=>$model->getError]);
            }

        }
        $data['config']=$this->config;//获取配置
        $this->assign('data',$data);
        return   $this->fetch();

    }
    public function getOption()
    {
        return [
            ['key'=>'name','title'=>'角色名称','value'=>'','html'=>'text','option'=>['placeholder'=>'请输入角色名称']],
            ['key'=>'remark','title'=>'备注','value'=>'','html'=>'text','option'=>['placeholder'=>'角色描述']],
            ['key'=>'state','title'=>'状态','value'=>'','html'=>'radio','option'=>[
            ['id'=>0,'name'=>'禁用'],
            ['id'=>1,'name'=>'正常','check'=>'checked'],
            ]
            ]
        ];

    }

    //编辑
    public function edit(){
        $model=new $this->config['modelName'];
        if ($this->request->isAjax()){
            $data=input('post.');
            $list['id']=$data['id'];
            $list['name']=$data['name'];
            $list['remark']=$data['remark'];
            $list['state']=$data['state'];
            $list['access_id']='';
            if (isset($data['access_ids'])){
                $list['access_id']=implode(',',$data['access_ids']);
            }
            $model=new $this->config['modelName'];
            if($model->allowField(true)->update()->save($list)){
                return  json(['code'=>200,'msg'=>'添加成功']);
            }else{
                return json(['code'=>400,'msg'=>$model->getError]);
            }

        }
        $data=$model->where(['id'=>input('id')])->find()->getData();
        $data['access_id']=explode(',',$data['access_id']);
        $data['config']=$this->config;
        $this->assign('data',$data);
            return $this->fetch();

    }


}

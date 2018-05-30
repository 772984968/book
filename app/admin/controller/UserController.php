<?php

namespace app\admin\controller;

use think\Controller;
use think\console\Input;

class UserController extends TemplateController
{
   public $config = [
        'modelName' => 'app\common\model\User', // 模型字段
        'field' =>['id','username','name','head','grade','integer','introduction','attention','fans'], // 查询的字段
        'bars' => [
            'title' => '用户管理',
            'url'=>'user/index'
        ],//标题
        //'add'=>['title'=>'添加用户','url'=>'user/add'],
        'del'=>['title'=>'删除用户','url'=>'user/del'],
        //'edit'=>['title'=>'编辑用户','url'=>'user/edit'],
        'delall'=>['title'=>'批量删除','url'=>'user/delall'],

    ];
    public function getTitle()
    {
        return [[
            ['type'=>'checkbox'],
            ['field'=>'id','title'=>'ID','sort'=>'true'],
            ['field'=>'username','title'=>'用户账号'],
            ['field'=>'name','title'=>'用户名'],
            ['field'=>'head','title'=>'头像'],
            ['field'=>'grade','title'=>'等级'],
            ['field'=>'integer','title'=>'积分'],
            ['field'=>'introduction','title'=>'简介'],
            ['field'=>'attention','title'=>'关注人数','sort'=>true],
            ['field'=>'fans','title'=>'粉丝人数'],
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
            ['key'=>'name','title'=>'用户名称','value'=>'','html'=>'text','option'=>['placeholder'=>'请输入用户名称']],
            ['key'=>'remark','title'=>'备注','value'=>'','html'=>'text','option'=>['placeholder'=>'用户描述']],
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

<?php

namespace app\admin\controller;

use think\Controller;
use think\App;
use app\common\model\Admin;
use app\common\model\Role;
use think\console\Input;



class AdminController extends TemplateController
{

    public $config = [
        'modelName' => 'app\common\model\Admin', // 模型字段
        'field' => [
            'id',
            'username',
            'role_id',
            'is_admin',
            'reg_time',
            'update_time',
            'state'
        ], // 查询的字段
        'bars' => [
            'title' => '管理员列表',
            'url'=>'admin/index',
        ],//标题
        'add'=>['title'=>'添加管理员','url'=>'admin/add'],
        'del'=>['title'=>'删除管理员','url'=>'admin/del'],
        'edit'=>['title'=>'编辑管理员','url'=>'admin/edit'],
        'delall'=>['title'=>'批量删除','url'=>'admin/delall'],


      ];
    //取搜索框字段
    protected function getSearch()
    {
        return[
            ['field'=>'id','name'=>'ID查询'],
            ['field'=>'username','name'=>'名称查询']
        ];

    }
    //获取标题
    public function getTitle()
    {
        return [[
            ['type'=>'checkbox'],
            ['field'=>'id','title'=>'ID','sort'=>'true'],
            ['field'=>'username','title'=>'登录名称'],
            ['field'=>'role_id','title'=>'所属用户组','sort'=>true],
            ['field'=>'is_admin','title'=>'是否管理员'],
            ['field'=>'reg_time','title'=>'注册时间'],
            ['field'=>'update_time','title'=>'更新时间','sort'=>true],
            ['field'=>'state','title'=>'状态','sort'=>true],
            ['field'=>'right','title'=>'数据操作','align'=>'center','toolbar'=>'#barDemo','width'=>300],
        ]];
    }

    //添加修改中定主的字段
     public function getOption()
    {
        $roles=Db('role')->field('id,name')->select();
        return [
            ['key'=>'username','title'=>'用户名','value'=>'','html'=>'text','option'=>['placeholder'=>'请输入用户名']],
            ['key'=>'password','title'=>'密码','value'=>'','html'=>'password','option'=>''],
            ['key'=>'repassword','title'=>'确认密码','value'=>'','html'=>'password','option'=>''],
            ['key'=>'is_admin','title'=>'是否管理员','value'=>'','html'=>'radio','option'=>[
                ['id'=>1,'name'=>'是','check'=>'checked'],
                ['id'=>0,'name'=>'否']]
            ],
            ['key'=>'state','title'=>'状态','value'=>'','html'=>'radio','option'=>[
                ['id'=>1,'name'=>'正常','check'=>'checked'],
                ['id'=>0,'name'=>'禁用']]
            ],
            ['key'=>'role_id','title'=>'所属用户组','value'=>'','html'=>'select','option'=>$roles],
        ];
    }

    // 获取字段
    public function getField(){
        $model=new $this->config['modelName'];
        $page=input('page')??'1';
        $limit=input('limit')??'10';
        $where=[];
        if (input('id')!=null){
            $paramas=input('id');
            $where['id']=['like','%'.$paramas.'%'];
        }
        if (input('username')!=null){
            $paramas=input('username');
            $where['username']=['like','%'.$paramas.'%'];
        }
        $paginate=$model::field($this->config['field'])->where($where)->paginate($limit,false,['page'=>$page])->each(function($item, $key){
            return $item['role_id']=$item['role']['name'];
        });
        $data=$paginate->toArray();
        return json(['code'=>0,'msg'=>'','count'=>$data['total'],'data'=>$data['data']]);
    }
    //添加
    public function add(){
        if ($this->request->isAjax()){
            $model=new $this->config['modelName'];
            $data=input('post.');
            $result = $this->validate($data,'Admin.add');
            if(true !== $result){
                return json(['code'=>400,'msg'=>$result]);
            }
            $data['password']=md5($data['password']);
            if($model->allowField(true)->save($data)){
                return  json(['code'=>200,'msg'=>'添加成功']);

            }else{
                return json(['code'=>400,'msg'=>$model->getError]);
            }

        }
        $data=$this->getData();
        $data['option']=$this->getOption();
        $this->assign('data',$data);
        return   $this->fetch('./template/add');

    }
    //编辑

    public function edit(){
        $model=new $this->config['modelName'];
        if ($this->request->isAjax()){
            $data=input('post.');
            $result = $this->validate($data,'Admin.edit');
            if(true !== $result){
                return json(['code'=>400,'msg'=>$result]);

            }
            $admin=$model::get(['id'=>$data['id']]);

            if ($admin->password!=$data['password']){
                $data['password']=md5($data['password']);
            }
            if($model->allowField(true)->isUpdate(true)->save($data)){
                return  json(['code'=>200,'msg'=>'编辑成功']);
            }else{
                return json(['code'=>400,'msg'=>$model->getError]);
            }

        }
        $attribute=$model::get(function ($query) {
            $query->where(['id'=>input('id')]);
        });
            $option=$this->getOption();
            foreach ($option as $key=>$vo){
                if (isset($attribute[$vo['key']])){
                    $option[$key]['value']=$attribute->getData($vo['key']);
                }

            }
            $option[]=['key'=>'id','title'=>'用户ID','value'=>$attribute['id'],'html'=>'hidden'];
            $data['option']=$option;
            $data['config']=$this->config;
            $this->assign('data',$data);
            return $this->fetch('./template/edit');

    }

}

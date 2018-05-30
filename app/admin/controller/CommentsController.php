<?php

namespace app\admin\controller;

use think\Controller;
use think\console\Input;

class CommentsController extends TemplateController
{
   public $config = [
        'modelName' => 'app\common\model\Comments', // 模型字段
        'field' =>['id','list_id','comments','date','uid','status'], // 查询的字段
        'bars' => [
            'title' => '评论管理',
            'url'=>'comments/index'
        ],//标题
        //'add'=>['title'=>'添加用户','url'=>'user/add'],
        'del'=>['title'=>'删除用户','url'=>'comments/del'],
        'edit'=>['title'=>'审核通过','url'=>'comments/edit'],
        'delall'=>['title'=>'批量删除','url'=>'comments/delall'],

    ];
   public function index()
   {
       if ($this->request->isAjax()){
           return $this->getField();
       }
       $this->assign('data',$this->getData());
       return $this->fetch();
   }
    public function getTitle()
    {
        return [[
            ['type'=>'checkbox'],
            ['field'=>'id','title'=>'ID','sort'=>'true'],
            ['field'=>'list_id','title'=>'帖子内容'],
            ['field'=>'comments','title'=>'评论'],
            ['field'=>'date','title'=>'评论日期'],
            ['field'=>'status','title'=>'状态'],
            ['field'=>'right','title'=>'数据操作','align'=>'center','toolbar'=>'#barDemo','width'=>300],


        ]];
    }
    //删除
    public  function edit(){
        $model=new $this->config['modelName'];
        $ids=$this->request->post('id');
         $data['status']=1;
        if($model->save($data,['id'=>$ids])){
            return  json(['code'=>200,'msg'=>'审核通过']);
        }else{
            return json(['code'=>400,'msg'=>$model->getError]);
        }


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
    // 获取字段
    public function getField(){
        $model=new $this->config['modelName'];
        $page=input('page')??'1';
        $limit=input('limit')??'10';
        $where=[];
        $where['status']=0;
        $paginate=$model::field($this->config['field'])->where($where)->paginate($limit,false,['page'=>$page])->each(function($item, $key){

            $item['uid']=$item['user']['name'];
            $item['list_id']=$item['list']['biaoti'];
            return $item;
        });
            $data=$paginate->toArray();
            return json(['code'=>0,'msg'=>'','count'=>$data['total'],'data'=>$data['data']]);
    }

}

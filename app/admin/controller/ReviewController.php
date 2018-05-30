<?php

namespace app\admin\controller;

use think\Controller;
use think\console\Input;
use think\Db;

class ReviewController extends TemplateController
{
   public $config = [
        'modelName' => 'app\common\model\Lists', // 模型字段
        'field' =>['id','uid','biaoti','src','date','type_id','voice','status'], // 查询的字段
        'bars' => [
            'title' => '帖子管理',
            'url'=>'review/index'
        ],//标题
        //'add'=>['title'=>'添加用户','url'=>'user/add'],
        'del'=>['title'=>'删除用户','url'=>'review/del'],
        'edit'=>['title'=>'编辑用户','url'=>'review/edit'],
        'delall'=>['title'=>'批量删除','url'=>'review/delall'],

    ];
   // 显示首页
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
            ['field'=>'uid','title'=>'用户ID'],
            ['field'=>'biaoti','title'=>'标题'],
            ['field'=>'src','title'=>'资源地址'],
            ['field'=>'date','title'=>'发布日期'],
            ['field'=>'type_id','title'=>'资源类型'],
            ['field'=>'status','title'=>'资源状态'],
            ['field'=>'right','title'=>'数据操作','align'=>'center','toolbar'=>'#barDemo','width'=>300],


        ]];
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
        if ($this->request->isPost()){
            if(db('list')->where('id',input('id'))->update(['status'=>1])){
                return  json(['code'=>200,'msg'=>'审核通过']);
            }else{
                return json(['code'=>400,'msg'=>'审核失败']);
            }
        }
        $data=Db::table('b_list')
        ->alias('l')
        ->join('b_user u','l.uid = u.id')
        ->field('l.*,u.*,l.id as detail_id')
        ->where('l.id',input('id'))
        ->find();

        /*
        $model=new $this->config['modelName'];
        $data=$model::get(function ($query) {
            $query->where(['id'=>input('id')]);
        });
        */
        $this->assign('data',$data);
            return $this->fetch();

    }
    // 获取字段
    public function getField(){

        $model=new $this->config['modelName'];
        $page=input('page')??'1';
        $limit=input('limit')??'10';
        $paginate=$model::field($this->config['field'])->where('status',0)->paginate($limit,false,['page'=>$page])->each(function($item, $key){
            $item['uid']=$item['user']['name'];
           $item['type_id']=$item['type']['name'];
            return $item;
        });
            $data=$paginate->toArray();
            return json(['code'=>0,'msg'=>'','count'=>$data['total'],'data'=>$data['data']]);
    }

}

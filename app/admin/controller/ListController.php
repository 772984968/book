<?php

namespace app\admin\controller;

use think\Controller;
use think\console\Input;

class listController extends TemplateController
{
   public $config = [
        'modelName' => 'app\common\model\Lists', // 模型字段
        'field' =>['id','uid','zan','cai','biaoti','src','date','comment','type_id','voice','status'], // 查询的字段
        'bars' => [
            'title' => '用户管理',
            'url'=>'List/index'
        ],//标题
        //'add'=>['title'=>'添加用户','url'=>'user/add'],
        'del'=>['title'=>'删除用户','url'=>'list/del'],
        //'edit'=>['title'=>'编辑用户','url'=>'user/edit'],
        'delall'=>['title'=>'批量删除','url'=>'list/delall'],

    ];
    public function getTitle()
    {
        return [[
            ['type'=>'checkbox'],
            ['field'=>'id','title'=>'ID','sort'=>'true'],
            ['field'=>'uid','title'=>'用户ID'],
            ['field'=>'zan','title'=>'点赞人数'],
            ['field'=>'cai','title'=>'踩人数'],
            ['field'=>'biaoti','title'=>'标题'],
            ['field'=>'src','title'=>'资源地址'],
            ['field'=>'date','title'=>'发布日期'],
            ['field'=>'comment','title'=>'评论人数','sort'=>true],
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
$where['status']=1;
        $paginate=$model::field($this->config['field'])->where($where)->paginate($limit,false,['page'=>$page])->each(function($item, $key){

            $item['uid']=$item['user']['name'];
           $item['type_id']=$item['type']['name'];
            return $item;
        });
            $data=$paginate->toArray();
            return json(['code'=>0,'msg'=>'','count'=>$data['total'],'data'=>$data['data']]);
    }

}

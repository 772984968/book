<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Admin;
use think\console\Input;

//模板类
 abstract  class  TemplateController extends BaseController{

/*
 * public $config = [
        'modelName' => 'app\common\model\Admin', // 模型字段
        'field' => [
            'id',
            'username',
            'role_id',
            'is_admin',
            'reg_time',
            'update_time',
            'status'
        ], // 查询的字段
        'bars' => [
            'title' => '管理员列表',
            'url'=>'admin/getfield',
        ],
        //标题
        'add'=>['title'=>'添加管理员','url'=>'admin/add'],
        'del'=>['title'=>'删除管理员','url'=>'admin/del'],
        'edit'=>['title'=>'编辑管理员','url'=>'admin/edit'],

      ];
 */

     //取搜索框字段
     protected function getSearch()
     {
/*
        return[
            ['field'=>'id','name'=>'ID查询'],
        ];
*/
     }


    // 显示首页
    public function index()
    {
        if ($this->request->isAjax()){
            return $this->getField();
        }
        $this->assign('data',$this->getData());
        return $this->fetch('./template/index');
    }

    // 设置首页的字段
    public function getData()
    {
        $data=[];
        $data['title']=json_encode($this->getTitle());// 标题
        $data['config']=$this->config;//获取配置
        $data['search']=$this->getSearch();//获取查询
        return $data;

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
          $paginate=$model::field($this->config['field'])->where($where)->paginate($limit,false,['page'=>$page]);
           $data=$paginate->toArray();
           return json(['code'=>0,'msg'=>'','count'=>$data['total'],'data'=>$data['data']]);


   }
/*
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
   */
    abstract function getTitle();
    /*显示添加的字段
     *  $roles=Db('role')->field('id,name')->select();
       return [
            ['key'=>'password','title'=>'密码','value'=>'','html'=>'password','option'=>['placeholder'=>'请输入密码']],
            ['key'=>'wenben','title'=>'普通文本','value'=>'','html'=>'text','option'=>''],
            ['key'=>'city','title'=>'城市','value'=>'','html'=>'select','option'=>[
                ['id'=>0,'name'=>'北京'],
                ['id'=>1,'name'=>'上海'],
                ['id'=>2,'name'=>'广州'],
                ['id'=>3,'name'=>'深圳'],
                ['id'=>4,'name'=>'杭州'],
                ['id'=>5,'name'=>'南宁'],
                ]
            ],
            ['key'=>'radio','title'=>'性别','value'=>'','html'=>'radio','option'=>[
                ['id'=>0,'name'=>'男'],
                ['id'=>1,'name'=>'女','check'=>'checked'],

            ]
            ],
            ['key'=>'data','title'=>'日期','value'=>'','html'=>'date','option'=>''],
            ['key'=>'checkebox','title'=>'兴趣','value'=>'','html'=>'checkbox','option'=>[
                ['id'=>0,'name'=>'写作'],
                ['id'=>1,'name'=>'阅读','check'=>'checked'],
                ['id'=>2,'name'=>'发呆'],
            ]],
            ['key'=>'switch','title'=>'开关','value'=>'','html'=>'switch','option'=>
                [

                ]
            ],
            ['key'=>'textarea','title'=>'文本框','value'=>'','html'=>'textarea','option'=>''],
        ];
     */
    abstract  function getOption();
    //添加
    public function add(){
        if ($this->request->isAjax()){
           $model=new $this->config['modelName'];
           if($model->allowField(true)->save(input('post.'))){
             return  json(['code'=>200,'msg'=>'添加成功']);
           }else{
                return json(['code'=>400,'msg'=>$model->getError]);
           }
        }
        $data['option']=$this->getOption();
        $data['config']=$this->config;//获取配置
        $this->assign('data',$data);
        return   $this->fetch('./template/add');

    }

    //删除
    public  function del(){
        $model=new $this->config['modelName'];
        $ids[]=$this->request->post('id');
        if($model::destroy($ids)){
            return  json(['code'=>200,'msg'=>'删除成功']);
        }else{
            return json(['code'=>400,'msg'=>$model->getError]);
        }


    }

    //编辑
    public function edit(){

        $model=new $this->config['modelName'];
        if ($this->request->isAjax()){
            if($model->allowField(true)->isUpdate(true)->save(input('post.'))){
                return  json(['code'=>200,'msg'=>'添加成功']);
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

    //批量删除
    public  function delAll(){
        $data=input('post.');
        foreach ($data as $vo){
            $data=json_decode($vo);
        }
        foreach ($data as $vo){
            $ids[]=$vo->id;
        }
        $model=new $this->config['modelName'];
        if($model::destroy($ids)){
            return  json(['code'=>200,'msg'=>'删除成功']);
        }else{
            return json(['code'=>400,'msg'=>$model->getError]);
        }





    }
 }

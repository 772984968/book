<?php
namespace app\book\controller;
use think\Controller;
use think\captcha\Captcha;
use think\Db;

class IndexController extends BaseController
{
    public function  index($type=''){

            $data=$this->getdata('index',$type);
            $this->assign('data',$data);
            if ($type=='old'){
                $this->assign('old','j-nav-active');
                $this->assign('jinghua','');
            }else{
                $this->assign('old','');
                $this->assign('jinghua','j-nav-active');
            }
            return $this->fetch();
    }

    //获取数据/*
    /*
     *list=列表
     *$type='类型'
     */
    public  function  getdata($list='',$type=''){
        $data=Db::table('b_list')
            ->alias('l')
            ->join('b_user u','l.uid = u.id')->field('l.*,u.*,l.id as detail_id');
            $data->where(['status'=>1]);
        if ($list!='index'&&$list!='hot'){
            $data->where(['type_id'=>$list]);
        }
        if ($list=='hot')
        {
            $data->order('zan','asc');
        }
            if ($type== 'old'){
                $data->order('date','asc');
            }else{

                $data->order('comment','desc');

            }

              return  $data->paginate(5);


    }
    //详情
    public function detail($id=''){
            if ($this->request->post()){
            $uid=session('uid');
            $list_id=$this->request->post('list_id');
            $comments=$this->request->post('comments');
            if (!isset($uid)){
                $this->error('请先登录');

            }
            if (empty($comments)){
                $this->error('请先输入内容');
            }
            $data['uid']=session('uid');
            $data['comments']=$comments;
            $data['list_id']=$list_id;
            if (db('comments')->insert($data)){
                db('list')->where('id',$list_id)->setInc('comment',1);
                return $this->success('发表成功,等待审核');
            }else{
                return $this->error('发布失败');
            }
        }
        $data=Db::table('b_list')
        ->alias('l')
        ->join('b_user u','l.uid = u.id')
        ->where('l.id',$id)->field('l.*,u.*,l.id as detail_id')->find();
        $this->assign('list',$data);
        $this->assign('new',$this->getcomments('new'));
        $this->assign('hot',$this->getcomments('hot'));
        return $this->fetch();
    }
    public function getcomments($type){
        $data=Db::table('b_comments')
        ->alias('c')
        ->join('b_user u','c.uid = u.id')
        ->field('c.*,u.*,c.id as comments_id')
        ->where('status',1);
        if ($type=='hot')
        {
            $data->order('zan','desc');
            $data->limit(3);
        }
        if ($type== 'new'){
            $data->order('date','desc');
        }
        return  $data->select();

    }
    //登录
    public function  login(){
           if ($this->request->isPost()){
            $data=$this->request->post();
            $username=$data['username'];
            $password=md5($data['password']);
            if ($username==''){
                return json([
                    'code'=>400,'msg'=>'手机号不能为空！']);
            }
            if ($password==''){
                return json([
                    'code'=>400,'msg'=>'密码不能为空！']);
            }
            $rs=db('user')->where(['username'=>$username,'password'=>$password])->find();
            if (!$rs){
                return json([
                    'code'=>400,'msg'=>'用户名或密码不正确']);
            }
               session('name',$rs['name']);
               session('uid',$rs['id']);
            $attentions=db('attention')->where('uid',$rs['id'])->field('attention_id')->select();
            if ($attentions)
            {
                $ids = array_column($attentions, 'attention_id');
                session('attentions',$ids);            }
            return json([
                'code'=>200,'msg'=>'登录成功！']);
        }
        return $this->fetch();
    }
//注册
    public  function register(){
    if ($this->request->isPost()){
        $data=$this->request->post();
        $username=$data['username'];
        $name=$data['name'];
        $password=$data['password'];
        $code=$data['captcha'];
        $captcha = new Captcha();
        if ($username==''){
            return json([
                'code'=>400,'msg'=>'手机号不能为空']);

          }
        if ($name==''){
            return json([
                'code'=>400,'msg'=>'用户名不能为空']);

        }
          if ($password==''){
              return json([
                  'code'=>400,'msg'=>'密码不能为空！']);
          }
          if ($captcha==''){
              return json([
                  'code'=>400,'msg'=>'验证码不能为空！']);
          }

          if (! $captcha->check($code)) {
              return json([
                  'code'=>400,'msg'=>'验证码不正确']);
          }
      $rs=db('user')->where('username',$username)->find();
      if ($rs!=null){
          return json([
              'code'=>400,'msg'=>'账号已被注册！']);
      }
        $data=['username'=>$username,
            'password'=>md5($password),
            'name'=>$name,
            'head'=>'http://'.$_SERVER['SERVER_NAME'].'/book/Images/default.jpg',
            'introduction'=>'这家伙很懒，神马都木有写'
        ];
        $rs=db('user')->insert($data);
        if (!$rs){
            return json([
                'code'=>400,'msg'=>'注册失败！']);
        }else{
            return json([
                'code'=>200,'msg'=>'注册成功！']);
     }
    }
return  $this->fetch();
}
        //用户登出
        public function logout(){
            session(null);
            $this->redirect('index/index');
        }

        //视频
        public function video($type=''){
            $data=$this->getdata(1,$type);
            $this->assign('data',$data);
            if ($type=='old'){
                $this->assign('old','j-nav-active');
                $this->assign('jinghua','');
            }else{
                $this->assign('old','');
                $this->assign('jinghua','j-nav-active');
            }
            return $this->fetch('video');
        }
        //图片
        public function images($type=''){

            $data=$this->getdata(2,$type);
            $this->assign('data',$data);
            if ($type=='old'){
                $this->assign('old','j-nav-active');
                $this->assign('jinghua','');
            }else{
                $this->assign('old','');
                $this->assign('jinghua','j-nav-active');
            }
            return $this->fetch('images');
        }
        //文字
        public function text($type=''){
            $data=$this->getdata(3);
            $this->assign('data',$data);
            if ($type=='old'){
                $this->assign('old','j-nav-active');
                $this->assign('jinghua','');
            }else{
                $this->assign('old','');
                $this->assign('jinghua','j-nav-active');
            }
           return $this->fetch('text');
        }
        //声音
        public function voice($type=''){

            $data=$this->getdata(4,$type);
            $this->assign('data',$data);
            if ($type=='old'){
                $this->assign('old','j-nav-active');
                $this->assign('jinghua','');
            }else{
                $this->assign('old','');
                $this->assign('jinghua','j-nav-active');
            }
           return $this->fetch('voice');
        }
        //热门
        public function hot($type=""){
        $data=$this->getdata('hot',$type);
             $this->assign('data',$data);
        if ($type=='old'){
            $this->assign('old','j-nav-active');
            $this->assign('jinghua','');
        }else{
            $this->assign('old','');
            $this->assign('jinghua','j-nav-active');
        }
          return $this->fetch('hot');
        }
    //热门
    public function old(){
        return $this->fetch('old');
    }
      }

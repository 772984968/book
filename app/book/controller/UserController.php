<?php
namespace app\book\controller;
use think\Controller;
use think\captcha\Captcha;
use app\lib\factory\Factory;
use think\Db;
use app\common\model\User;
class UserController extends BaseController
{
    public function  publish(){
        if ($this->request->isPost()){
            $uid=session('uid');
            $src=$this->request->post('src');
            $biaoti=$this->request->post('biaoti');
            if (!isset($uid)){
                $this->error('请先登录');

            }
            if (empty($src)){
                $this->error('请先上传视频');

            }
            if (empty($biaoti)){
                $this->error('请输入标题');

            }
            $data['uid']=session('uid');
            $data['src']=$src;
            $data['biaoti']=$biaoti;
            $data['type_id']=1;
            if (db('list')->insert($data)){
                return $this->success('发表成功');
            }else{
                return $this->error('发布失败');
            }

                   }
                       return $this->fetch('video');
    }
    public function follow(){
        $uid=$this->request->param('uid');
        $user=db('user')->where('id',$uid)->find();
        $this->assign('user',$user);
        $this->assign('user_attentions',$this->getAttention($uid));
        return $this->fetch();

    }
    public function fans(){
        $uid=$this->request->param('uid');
        $user=db('user')->where('id',$uid)->find();
        $this->assign('user',$user);
        $this->assign('user_fans',$this->getFans($uid));
        return $this->fetch();

    }
    public function  voice(){

        if ($this->request->isPost()){
            $uid=session('uid');
            $src=$this->request->post('src');
            $biaoti=$this->request->post('biaoti');
            $voice=$this->request->post('voice');
            if (!isset($uid)){
                $this->error('请先登录');

            }
            if (empty($src)){
                $this->error('请先上传图片');

            }
            if (empty($voice)){
                $this->error('请先上传音源');

            }
            $data['uid']=session('uid');
            $data['src']=$src;
            $data['biaoti']=$biaoti;
            $data['type_id']=4;
            $data['voice']=$voice;
            if (db('list')->insert($data)){
                return $this->success('发表成功');
            }else{
                return $this->error('发布失败');
            }

        }
        return $this->fetch('voice');

    }
    public function  image(){

        if ($this->request->isPost()){
            $uid=session('uid');
            $src=$this->request->post('src');
            $biaoti=$this->request->post('biaoti');
            if (!isset($uid)){
                $this->error('请先登录');

            }
            if (!isset($src)){
                $this->error('请先上传图片');

            }
            $data['uid']=session('uid');
            $data['src']=$src;
            $data['biaoti']=$biaoti;
            $data['type_id']=2;
            if (db('list')->insert($data)){
                return $this->success('发表成功');
            }else{
                return $this->error('发布失败');
            }

        }
        return $this->fetch('image');
    }
    public function  text(){

        if ($this->request->isPost()){
            $uid=session('uid');
            $biaoti=$this->request->post('biaoti');
            if (!isset($uid)){
                $this->error('请先登录');

            }
            if (empty($biaoti)){
                $this->error('内容不能为空');

            }
            $data['uid']=session('uid');
            $data['biaoti']=$biaoti;
            $data['type_id']=3;
            if (db('list')->insert($data)){
                return $this->success('发表成功');
            }else{
                return $this->error('发布失败');
            }

        }
        return $this->fetch('text');
    }
    public function  link()
    {
        return $this->fetch('link');
    }
    //发表的帖子
    public function  topic()
    {
        $uid=$this->request->param('uid');
        $type=$this->request->param('type');
        if (!$type||$type=='publish'){
            $publish=$this->getPost('publish', $uid);
            $this->assign('pub','j-nav-active');
            $this->assign('com','');
            $this->assign('publish',$publish);
        }else{
            $comments=$this->getPost('comments', $uid);
            $this->assign('com','j-nav-active');
            $this->assign('pub','');
            $this->assign('comments',$comments);
        }

        $user=db('user')->where('id',$uid)->find();
        $this->assign('user',$user);
        $this->assign('user_attentions',$this->getAttention($uid));
        $this->assign('user_fans',$this->getFans($uid));
        return $this->fetch('topic');
    }
    //获取关注者
    public function getAttention($uid){
        $list=Db::table('b_attention')
        ->alias('a')
        ->join('b_user u','a.attention_id = u.id')
        ->where('a.uid',$uid)->select();
        if ($list){
        return $list;
        }
        return [];

}
//获取关注者
public function getFans($uid){
    $list=Db::table('b_attention')
    ->alias('a')
    ->join('b_user u','a.uid = u.id')
    ->where('a.attention_id',$uid)->select();
    if ($list){
        return $list;
    }
    return [];

}
    //获取帖子
    public function  getPost($type,$uid)
    {
        if ($type=='publish'){
            $list=db('list')->where('uid',$uid)->select();
        }
        if ($type=='comments'){
            $list=Db::table('b_comments')
            ->alias('c')
            ->join('b_list l','c.list_id = l.id')
            ->field('l.*,c.*,c.id as comments_id')
            ->where('c.uid',$uid)->select();
        }
        return $list;
    }
    public function upload(){
          $factory=Factory::getInstance();
          $upload=$factory->getUpload($_FILES['video']);
          $upload->uploadPath='/video'.'/'.date('Ymd');
             $src=$upload->uploadPath;
                   if ($upload->uploadFile()===true){
                       $src='http://'.$_SERVER['SERVER_NAME'].$src.'/'.$upload->fileName.'.'.$upload->ext;
           $data=['code'=>1,'msg'=>'添加成功','data'=>['src'=>$src]];
            return json($data);
        }else{
            $data=['code'=>0,'msg'=>$upload->error];
            return json($data);
        };

           }
    public function uploadImage(){
               $factory=Factory::getInstance();
               $upload=$factory->getUpload($_FILES['image']);
               $upload->uploadPath='/image'.'/'.date('Ymd');
               $src=$upload->uploadPath;
               if ($upload->uploadFile()===true){
                   $src="http://".$_SERVER['SERVER_NAME'].$src.'/'.$upload->fileName.'.'.$upload->ext;
                   $data=['code'=>1,'msg'=>'添加成功','data'=>['src'=>$src]];
                   return json($data);
               }else{
                   $data=['code'=>0,'msg'=>$upload->error];
                   return json($data);
               };

           }
    public function uploadVoice(){
               $factory=Factory::getInstance();
               $upload=$factory->getUpload($_FILES['voice']);
               $upload->uploadPath='/voice'.'/'.date('Ymd');
               $src=$upload->uploadPath;
               if ($upload->uploadFile()===true){
                   $src="http://".$_SERVER['SERVER_NAME'].$src.'/'.$upload->fileName.'.'.$upload->ext;
                   $data=['code'=>1,'msg'=>'添加成功','data'=>['voice'=>$src]];
                   return json($data);
               }else{
                   $data=['code'=>0,'msg'=>$upload->error];
                   return json($data);
               };

           }
    //个人中心
    public  function  person(){

        if ($this->request->isPost()){
            $model=new User();
            $data=input('post.');
            $user=$model::get(['id'=>$data['id']]);
            if ($user->password!=$data['password']){
                $data['password']=md5($data['password']);
            }
            if($model->allowField(true)->isUpdate(true)->save($data)){
                $this->success('更新资料成功');
            }else{
                $this->error('更新资料失败');
            }












        }



        $uid=$this->request->param('uid');
        $type=$this->request->param('type');
        if (!$type||$type=='publish'){
            $publish=$this->getPost('publish', $uid);
            $this->assign('pub','j-nav-active');
            $this->assign('com','');
            $this->assign('publish',$publish);
        }else{
            $comments=$this->getPost('comments', $uid);
            $this->assign('com','j-nav-active');
            $this->assign('pub','');
            $this->assign('comments',$comments);
        }

        $user=db('user')->where('id',$uid)->find();
        $this->assign('user',$user);
        $this->assign('user_attentions',$this->getAttention($uid));
        $this->assign('user_fans',$this->getFans($uid));
        return $this->fetch();

    }
}
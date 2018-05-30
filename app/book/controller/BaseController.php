<?php
namespace  app\book\controller;
use think\Controller;

class BaseController extends Controller{
    public function _initialize(){
        $this->assign('jinhua',db('list')->where('type_id',2)->order('comment','desc')->find());
        $this->assign('allsee',db('list')->where('type_id',2)->order('zan desc,comment')->limit(8)->select());
        $this->assign('allhot',db('list')->where('type_id',2)->order('comment desc,date')->limit(8)->select());
        $this->assign('oldhot',db('list')->where('type_id',2)->order('comment desc,date asc')->limit(8)->select());
    }
    //关注人
    public function attention(){
        $uid=input('uid');
        if (!session('uid')){
            return json(['code'=>400,'msg'=>'用户未登录']);
        }

        $session_id=session('uid');
        if ($uid==$session_id){
            return json(['code'=>400,'msg'=>'不能关注自己！']);
        }
        if (db('attention')->where(['uid'=>$session_id,'attention_id'=>$uid])->find()){
            return json(['code'=>400,'msg'=>'已经关注了该用户！']);
        }
        if(db('attention')->insert(['uid'=>$session_id,'attention_id'=>$uid])){
            db('user')->where('id',$session_id)->setInc('attention',1);
            db('user')->where('id',$uid)->setInc('fans',1);
            $attentions=db('attention')->where('uid',$session_id)->field('attention_id')->select();
            if ($attentions)
            {
                $ids = array_column($attentions, 'attention_id');
                session('attentions',$ids);            }
            return json(['code'=>200,'msg'=>'关注成功!']);
        }else{
            return json(['code'=>400,'msg'=>'关注失败,请重试']);

        }

    }
    //关注人
    public function cancel(){
        $uid=input('uid');
        if (!session('uid')){
            return json(['code'=>400,'msg'=>'用户未登录']);
        }

        $session_id=session('uid');
        if ($uid==$session_id){
            return json(['code'=>400,'msg'=>'不能操作自己！']);
        }
        if(db('attention')->where(['uid'=>$session_id,'attention_id'=>$uid])->delete()){
            db('user')->where('id',$session_id)->setDec('attention',1);
            db('user')->where('id',$uid)->setDec('fans',1);
            $attentions=db('attention')->where('uid',$session_id)->field('attention_id')->select();
            if ($attentions)
            {
                $ids = array_column($attentions, 'attention_id');
                session('attentions',$ids);
            }else{
                session('attentions',null);
            }
            return json(['code'=>200,'msg'=>'取消成功!']);
        }else{
            return json(['code'=>400,'msg'=>'取消失败,请重试']);

        }

    }
    //关注人
    public function cancelfans(){

        $fansid=input('uid');
        if (!session('uid')){
            return json(['code'=>400,'msg'=>'用户未登录']);
        }

        $session_id=session('uid');
        if ($fansid==$session_id){
            return json(['code'=>400,'msg'=>'不能操作自己！']);
        }
        if(db('attention')->where(['uid'=>$fansid,'attention_id'=>$session_id])->delete()){
            db('user')->where('id',$session_id)->setDec('fans',1);
            db('user')->where('id',$fansid)->setDec('attention',1);
            $attentions=db('attention')->where('uid',$session_id)->field('attention_id')->select();
            if ($attentions)
            {
                $ids = array_column($attentions, 'attention_id');
                session('attentions',$ids);
            }else{
                session('attentions',null);
            }
            return json(['code'=>200,'msg'=>'取消成功!']);
        }else{
            return json(['code'=>400,'msg'=>'取消失败,请重试']);

        }

    }

    //关注人
    public function del(){

        $listid=input('listid');
        if (!session('uid')){
            return json(['code'=>400,'msg'=>'用户未登录']);
        }
        if(db('list')->where('id',$listid)->delete())
{
    return json(['code'=>200,'msg'=>'删除成功!']);

}else{
    return json(['code'=>400,'msg'=>'删除失败,请重试']);
}

    }
    //关注人
    public function commentsdel(){

        $commentsid=input('commentsid');
        if (!session('uid')){
            return json(['code'=>400,'msg'=>'用户未登录']);
        }
        if(db('comments')->where('id',$commentsid)->delete())
        {
            return json(['code'=>200,'msg'=>'删除成功!']);

        }else{
            return json(['code'=>400,'msg'=>'删除失败,请重试']);
        }

    }
}

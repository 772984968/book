<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:54:"/var/www/book/public/../app/book/view/user/follow.html";i:1521337887;s:56:"/var/www/book/public/../app/book/view/common/header.html";i:1521190226;s:56:"/var/www/book/public/../app/book/view/common/footer.html";i:1521191972;}*/ ?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">


        <title>好书荐读－内涵段子，冷笑话，搞笑图片，成人笑话，不得姐分享社区，第1页</title>




        <meta name="keywords" content="内涵段子,冷笑话,好书荐读,好书荐读官网,不得姐"/>




        <meta name="description" content="好书荐读官网是一个在线发布和分享内涵段子、冷笑话，搞笑图片，成人笑话的热门社区，大家可以对爆笑的内涵图和其他玩家一起交流互动。"/>


    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit|ie-stand"/>
    <meta property="qc:admins" content="2241171675625452156375" />


        <meta name="mobile-agent" content="format=html5;url=http://m.budejie.com/1"/>
        <meta name="mobile-agent" content="format=xhtml;url=http://m.budejie.com/1"/>


    <!--[if IE]>
    <script src="__static__/Scripts/json2.min.js"></script>
    <script src="__static__/Scripts/html5.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="http://wimg.spriteapp.cn/logo/favicon.ico"/>
    <link rel="apple-touch-icon" href="http://mstatic.spriteapp.cn/xx/1/img/touchicon.png"/>
    <link rel="stylesheet" href="__static__/Css/ui.css">
    <script type="text/javascript">
        if (!window.console) {
            window.console = {
                log: function () {
                }
            }
        }
    </script>
    <link rel="stylesheet" href="__static__/Css/page.css">


    <link rel="stylesheet" href="__static__/Css/user.css">
    <link rel="stylesheet" href="__static__/Css/index.css">

</head>
<body>
<h1 style="display: none">
    好书荐读－内涵段子，冷笑话，搞笑图片，成人笑话，不得姐分享社区
</h1>
<!-- 顶部 header -->
<div class="j-header">
    <div class="j-top">
        <a href="<?php echo url('index/index'); ?>" class="logo">
            <i class="icon-logo">
                <img src="__static__/Picture/logo_new.png" alt="好书荐读" title="好书荐读官网">
            </i>
        </a>

        <div class="link">
            <!-- gaga type: 1  None -->
            <a  class="[all]"  href="<?php echo url('index/index'); ?>">全部</a>
            <a class="[video]" href="<?php echo url('index/video'); ?>">视频</a>
            <a class="[images]" href="<?php echo url('index/images'); ?>">图片</a>
            <a class="[text]" href="<?php echo url('index/text'); ?>">文字</a>
            <a class="[voice]" href="<?php echo url('index/voice'); ?>">声音</a>
            <a class="[hot]" href="<?php echo url('index/hot'); ?>">排行</a>
        </div>
<?php if(empty(\think\Session::get('name')) || ((\think\Session::get('name') instanceof \think\Collection || \think\Session::get('name') instanceof \think\Paginator ) && \think\Session::get('name')->isEmpty())): ?>
        <div class="login" id="jLoginBar">
            <a href="javascript:login();">登录</a><em>|</em><a
                href="javascript:register();">注册</a>
        </div>
       			     <?php else: ?>
        <div class="login user-login" id="jUserLoginBar" style="">
            <a href="<?php echo url('user/topic',['uid'=>\think\Session::get('uid')]); ?>" id="jUserLoginName" style="max-width: 84px; overflow: hidden; height: 22px;"><?php echo \think\Session::get('name'); ?></a>|&nbsp;
            <i id="userNewsIcon" class="icon-msg"></i>
            <a href="<?php echo url('index/logout'); ?>" id="jLoginExit">退出</a>
            <a href="<?php echo url('user/publish'); ?>" class="j-post"
               onclick="jie.gaSend('pc官网-点击发帖button','点击右上角发帖button','')">发帖</a>
        </div>

<?php endif; ?>
    </div>
</div>

    <!--中间内容-->
    <div class="j-content">
        <div class="g-bd f-cb">


            <div class="g-mn">

<div class="j-r-c">
        <!--标签导航-->
        <div class="j-r-nav">
            <ul>
                <li class="j-nav-active"><a href="javascript:void(0);">
               <?php echo $user['name']; ?> 关注（<span id="labMyUserFans"><?php echo $user['attention']; ?></span>）</a></li>
            </ul>
        </div>
        <!--我的粉丝-->
        <div class="j-r-list p-fan">
            <ul id="fansList" scrollpagination="enabled">
   <?php if(is_array($user_attentions) || $user_attentions instanceof \think\Collection || $user_attentions instanceof \think\Paginator): $i = 0; $__LIST__ = $user_attentions;if( count($__LIST__)==0 ) : echo "无关注人" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="<?php echo url('user/topic',['uid'=>$vo['id']]); ?>" target="_blank">
                <input type="hidden" id='userid' value="<?php echo $vo['id']; ?>"/>
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2017/11/28/5a1cd9941d213_mini.jpg" src="<?php echo $vo['head']; ?>" style="display: block;"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="<?php echo url('user/topic',['uid'=>$vo['id']]); ?>" target="_blank"><?php echo $vo['name']; ?></a></div>
                <div class="p-fan-number">关注：<span><?php echo $vo['attention']; ?></span>
                    | 粉丝：<span><?php echo $vo['fans']; ?></span>
                </div>
                <div class="p-fan-signature"><?php echo $vo['introduction']; ?></div>
            </div>
            <div class="p-fan-buttons">

             <?php if(\think\Session::get('attentions')==null): ?>
             <div class="p-fan-focus j-follow" data-userid="21792388">
             <a href="javascript:attention();" class="focus" id="attention">+ 关注</a>
             </div>
<?php elseif(in_array($vo['id'],\think\Session::get('attentions'))): ?>
                               <div class="p-fan-focus p-fan-cancel-focus j-un-follow"  data-userid="20385456">
                               <a href="javascript:cancel();" class="focus cancel-focus j-un-follow"  id="cancel" style="">取消关注</a>
 </div>
<?php else: ?>
               <div class="p-fan-focus j-follow" data-userid="21792388">         <a href="javascript:attention();" class="focus" id="attention">+ 关注</a>
</div>
<?php endif; ?>












            </div>
            <?php endforeach; endif; else: echo "无关注人" ;endif; ?>
        </li>

</ul>
        </div>
        <p id="scrollNoMoreMsg" class="f-tac no-more-comment" style=" display: none;">“已显示全部内容”</p>
    </div>



    <!-- 个人页模板 -->
            </div>

            <!--right -->
            <div class="g-sd">

    <div class="j-l-c">
        <!--个人主页-->
            <div class="p-age">
            <div class="p-age-message" id="userInfo">
                <div class="p-age-img">
                    <a href="">
                        <img class="p-logo" src="<?php echo $user['head']; ?>" alt=""/>
                        <input type="hidden" id='userid' value="<?php echo $user['id']; ?>"/>
                    </a>
                </div>
                <div class="p-age-mess">
                    <div class="p-age-name">
                        <a href="" class="p-age-netname"><?php echo $user['name']; ?></a>
                        <i class="icon-rank"></i>
 <?php if(\think\Session::get('attentions')==null): ?>
                         <a href="javascript:attention();" class="focus" id="attention">+ 关注</a>
<?php elseif(in_array($user['id'],\think\Session::get('attentions'))): ?>
                        <a href="javascript:cancel();" class="focus cancel-focus j-un-follow"  id="cancel" style="">取消关注</a>

<?php else: ?>
                        <a href="javascript:attention();" class="focus" id="attention">+ 关注</a>

<?php endif; ?>
                    </div>
                    <div class="p-age-lein">
                        <span class="level">等级：<?php echo $user['grade']; ?></span>
                        <span class="integral">积分：<?php echo $user['integer']; ?></span>
                    </div>
                    <div class="signature"></div>
                </div>
            </div>
        </div>
        <!--投稿审稿-->
        <!--投稿-->
<div class="j-sent">
    <a href="<?php echo url('user/publish'); ?>" onclick="jie.gaSend('pc官网-点击发帖button','点击大发帖button','')" class="left icon-contribute">
        <i class="icon-page-contribute"></i>发帖
    </a>
</div>


        <!--大家的在看-->

<div class="j-r-wrst j-all-like j-r-list j-everyone">
    <div class="n-title">
        <h2 class="u-tt u-tt-md">好书荐读网友都在看</h2>
    </div>
    <div class="j-list">
        <div class="j-list-c">
          <?php if(is_array($allsee) || $allsee instanceof \think\Collection || $allsee instanceof \think\Paginator): $i = 0; $__LIST__ = $allsee;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="j-item">
                <a href="<?php echo url('index/detail',['id'=>$vo['id']]); ?>"
                data-title="<?php echo $vo['biaoti']; ?>"
                data-id="27260416"
                data-date=""
                data-time="">
                <div class="j-item-img">
                    <img src="<?php echo $vo['src']; ?>"
                         class="lazy"
                         data-original="<?php echo $vo['src']; ?>"
                         alt="<?php echo $vo['biaoti']; ?>"/>
                    <!--<div class="j-item-play">-->
                        <!--<i class="icon-play"></i>-->
                    <!--</div>-->
                </div>
                </a>
                <div class="j-item-des">
                    <a href="/detail-27260416.html"><?php echo $vo['biaoti']; ?></a>
                </div>
            </div>
<?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
        </div>
    </div>
</div>
 </div>
            </div>
        </div>
    </div>
    <div id="jDownloadVideo" style="display: none;"></div>
<!--footer -->
<div class="j-footer">
    <!--联系-->
    <div class="j-contect">
        <div class="box" style="width:140px;">
            <h3>关于好书荐读</h3>

            <div class="main">
                <ul>
                    <li>
                        <a rel="nofollow" href="#" target="_blank">关于好书荐读</a>
                    </li>
                    <li>
                        <a rel="nofollow" href="#" target="_blank">媒体合作</a>
                    </li>
                    <li>
                        <a rel="nofollow" href="#" target="_blank">好书荐读</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="box" style="width:170px;">
            <h3>关注好书荐读</h3>

            <div class="main">
                <ul>
                    <li>
                        <a rel="nofollow" href="#" target="_blank">好书荐读新浪微博</a>
                    </li>
                    <li>
                        <a rel="nofollow" href="javascript:void(0)" class="j-qq">好书荐读QQ公众号</a>

                    </li>
                    <li>
                        <a rel="nofollow" href="#"
                           target="_blank">贴吧</a>
                    </li>
                    <li>
                        <a rel="nofollow" href="#" target="_blank">好书荐读QQ空间</a>
                    </li>
                    <li>
                        <a rel="nofollow" href="javascript:void(0)" class="j-weixin">好书荐读微信公众号</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="box last">
            <h3>友情链接</h3>

            <div class="main">
                <ul>
                    <li>
                        <a  href="#" target="_blank">单机游戏大全</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="box">
            <h3>好书荐读粉丝交流群</h3>

            <div class="main">
                <ul>
                    <li>
                        <a rel="nofollow" href="#">好书荐读粉丝群1:133084754</a>
                    </li>
                    <li>
                        <a rel="nofollow" href="#">好书荐读粉丝群2:251857413</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--公司-->
    <div class="j-footer-c">
        好书荐读©2011<a target="_blank" href=" ">京公网安备11010802021522号</a >|京ICP备11038795号|<a target="_blank" class="wangwen"  href="http://wimg.spriteapp.cn/picture/2077378.jpg">京网文[2015]2077-378号</a >
    </div>
</div>
<script src="__static__/Scripts/jquery.min.js"></script>
<script src="__static__/Scripts/underscore-min.js"></script>
<script src="__static__/Scripts/base.js"></script>
<script src="__static__/Scripts/jquery.placeholder.min.js"></script>
<script type="text/javascript"
        src="__static__/Scripts/98ee4c1acbf848e9bc11f3e7f8996103.js"></script>
<script src="__static__/Scripts/require.js"></script>
<script type="text/javascript" src="__static__/layui/layui.all.js"></script>
     <script type="text/javascript">

     function attention(){
      	  $.ajax({
   		url:"<?php echo url('base/attention'); ?>",
   		type:'POST',
   		dataType:'json',
   		data:{'uid':$('#userid').attr('value')},
   		 success:function(data){
   			 if(data.code=='200'){
   					layer.msg(data.msg,{icon:1,time:1*1000});
   				}else{
   					layer.msg(data.msg,{icon:5});
   				}
            },
            error:function(data){
           	 layer.msg('数据发送失败',{icon:5});
            }

   	  });
        }
    function cancel(){
    	 $.ajax({
    			url:"<?php echo url('base/cancel'); ?>",
    			type:'POST',
    			dataType:'json',
    			data:{'uid':$('#userid').attr('value')},
    			 success:function(data){
    				 if(data.code=='200'){
    						layer.msg(data.msg,{icon:1,time:1*1000});
    					}else{
    						layer.msg(data.msg,{icon:5});
    					}
    	         },
    	         error:function(data){
    	        	 layer.msg('数据发送失败',{icon:5});
    	         }

    		  });

     }
     </script>
</body>

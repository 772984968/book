<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:55:"/var/www/book/public/../app/book/view/index/detail.html";i:1521344270;s:56:"/var/www/book/public/../app/book/view/common/header.html";i:1521190226;s:56:"/var/www/book/public/../app/book/view/common/footer.html";i:1521191972;}*/ ?>

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

 <link rel="stylesheet" href="__static__/Css/detail.css">
    <!--面包屑-->
    <div class="bread-crumbs">
        <ul class="bread-crumbs-con">
            <li>
                <a href="/">好书荐读官网</a>
            </li>
            <li class="greater">
                >
            </li>
            <li>


                    <a  href="/pic/">详情</a>



            </li>
            <li class="greater">
                >
            </li>
            <li>
            </li>
        </ul>
    </div>



    <!--中间内容-->
    <div class="j-content">
        <div class="g-bd f-cb">


            <div class="g-mn">



    <input type="hidden" id="hidPid" value="27291868"/>

    <div class="j-r-c">
        <!--帖子列表-->
        <div class="j-r-list">
            <ul>
            <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
         	   <a onclick="javascript :history.back(-1);">没有数据,点击返回</a>
<?php else: ?>
                <li>


<!--用户信息-->
<div class="j-list-user">
    <div class="u-img">
        <a href="<?php echo url('user/topic',['uid'=>$list['id']]); ?>" target="_blank">
            <img class="u-logo lazy"
                 src="Picture/d_user_logo.jpg"
                 data-original="http://mpic.spriteapp.cn/profile/large/2018/02/07/5a7a903fb7bcc_mini.jpg"
                 alt="<?php echo $list['name']; ?>"/>
        </a>
    </div>
    <div class="u-txt">
        <a href="<?php echo url('user/topic',['uid'=>$list['id']]); ?>" class="u-user-name" target="_blank"><?php echo $list['name']; ?> </a>
        <span class="u-time  f-ib f-fr"><?php echo $list['date']; ?></span>
    </div>
</div>





<div class="j-r-list-c">
    <!--因为头像单独占位 所以内容需要 移动 一个头像高度 30px+间距10px -->
    <!--描述 段子 直接 只有它 宽度212 高度256-->
    <div class="j-r-list-c-desc">

            <h1><?php echo $list['biaoti']; ?></h1>

    </div>
     <div class="j-r-list-c-img">
       <?php switch($list['type_id']): case "1": ?>
   <video width="500" height="300" controls="controls">
  <source src="<?php echo $list['src']; ?>" type="video/mp4" />
  <object data="<?php echo $list['src']; ?>" width="320" height="240">
    <embed src="<?php echo $list['src']; ?>" width="320" height="240" />
  </object>
</video><?php break; case "2": ?><img src="<?php echo $list['src']; ?>" width="300"><?php break; case "4": ?>
     <img src="<?php echo $list['src']; ?>" width="300">
      <audio controls="controls" height="100" width="100">
							<source src="<?php echo $list['voice']; ?>" type="audio/mp3" />
							<source src="song.ogg" type="audio/ogg" />
							<embed height="100" width="100" src="<?php echo $list['voice']; ?>" />
							</audio><?php break; default: endswitch; ?>
    </div>
</div>




                    <!--操作工具条-->
<div class="j-r-list-tool"
     data-type="10"
     data-video_mlen=""
     data-id="27291868"
     data-title="<?php echo $list['name']; ?>"
     data-date="<?php echo $list['date']; ?>"
     data-time="15:26"
     data-playcount=""
     data-playfcount=""
        >
    <div class="j-r-list-tool-l " data-id="27291868">
        <ul>
            <li class="j-r-list-tool-l-up">
                <i class="icon-up ui-icon-up"></i>&nbsp;&nbsp;<span><?php echo $list['zan']; ?></span>
            </li>
            <li class="j-r-list-tool-l-down ">
                <i class="icon-down"></i>&nbsp;&nbsp;<span><?php echo $list['cai']; ?></span>
            </li>
        </ul>
    </div>
    <!--分享-->
    <div class="j-r-list-tool-ct">
        <div class="j-r-list-tool-ct-share-c">
            <span>分享&nbsp;&nbsp;22&nbsp;&nbsp;</span>
        </div>
        <div class="j-r-list-tool-ct-fx">

            <div class="bdsharebuttonbox fx-bd-27291868"
                 data-id="27291868"

                 data-url="/detail-27291868.html"
                 data-pic="http://mpic.spriteapp.cn/ugc/2018/03/05/5a9d613fdc4ae_a_1_1.jpg"
                 data-text="这是一款国产的世界上最薄的手机，看着很轻薄的样子，真怕...">
                <a href="javascript:void(0);" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                <a href="javascript:void(0);" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                <a href="javascript:void(0);" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                <a href="javascript:void(0);" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                <a class="bds_more" data-cmd="more"></a>
            </div>

        </div>
    </div>
    <!-- 评论收藏 -->
    <div class="j-r-list-tool-r j-r-list-tool-cc">
        <ul>

            <li style="display: none" class=" f-tar j-collect j-collect-width  j-collect-down-width">
                <i class="icon-cc"></i>
            </li>
            <li class=" f-tac j-comment j-comment-width  j-comment-down-width">


                    <a href="#comment"><i class="icon-comment"></i>&nbsp;<span class="comment-counts"><?php echo $list['comment']; ?></span></a>


            </li>


        </ul>
    </div>

</div>

                </li>
                <?php endif; ?>
            </ul>
        </div>
        <!--上一条 下一条-->
        <div class="c-next">
            <div class="c-next-btn-content">

                    <a class="c-prev-btn"
                       href="<?php echo url('index/detail',['id'=>($list['detail_id']-1)]); ?>"
                       data-id="26076827">上一条</a>


                    <a class="c-next-btn"
                       href="<?php echo url('index/detail',['id'=>($list['detail_id']+1)]); ?>"
                       data-id="27304591">下一条</a>

            </div>
        </div>
        <!--往日神贴-->

        <div class="j-r-wrst gud-put  detail-wst "
             style="border-bottom: 1px solid #e8e8e8;">
            <div class="n-title">
                <h2 class="u-tt u-tt-md">好书荐读往日神贴</h2>
            </div>
            <div class="j-list">
                <div class="j-list-c">
<?php if(is_array($oldhot) || $oldhot instanceof \think\Collection || $oldhot instanceof \think\Paginator): $i = 0; $__LIST__ = $oldhot;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                        <div class="j-item">
                            <a href="<?php echo url('index/detail',['id'=>$vo['id']]); ?>"
                                data-title=" <?php echo $vo['biaoti']; ?>"
                                data-id="27286443"
                                data-date="2018-03-10"
                                data-time="15:26">
                                <div class="j-item-img">
                                    <img src="<?php echo $vo['src']; ?>"
                                             class="lazy"
                                             data-original="<?php echo $vo['src']; ?>" alt="<?php echo $vo['biaoti']; ?>" />
                                    <!--<div class="j-item-play">-->
                                        <!--<i class="icon-play"></i>-->
                                    <!--</div>-->
                                </div>
                            </a>
                            <div class="j-item-des">
                                <a href="<?php echo url('index/detail',['id'=>$vo['id']]); ?>">怎么把女票调教成一个合格的老司机？</a>
                            </div>
                        </div>

<?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
                </div>
            </div>
        </div>

        <!-- 往日神贴下 左边广告 -->
        <div class="c-advertising">
            <script type="text/javascript">
                /*614*60 pc官网评论上方*/
                var cpro_id = "u2328308";
            </script>
            <script src="__static__/Scriptss/c.js" type="text/javascript"></script>
        </div>
        <!--评论-->
        <div class="c-comment" id="comment" style="padding-bottom:20px; ">
            <!--header-->
            <div class="c-comment-c">
                <div class="g-mn1">
                    <div class="g-mnc1">
                        <h2 class="u-tt u-tt-md">评论(102)</h2>
                    </div>
                </div>
                <div class="g-sd1 f-tar">
                    <button type="button" id="userRepty" class="ui-btn ui-btn-danger" onclick="comment();">发表评论</button>
                </div>
            </div>
       <div class="n-title" id="hotComment" style="display: ;">
                <h2 class="u-tt u-tt-sm">热门评论</h2>
            </div>
            <!-- 热门评论列表 -->
            <div class="c-comment-list">
                <div class="m-list3">
                    <ul class="f-cb" id="hotCommentList">
                     <?php if(is_array($new) || $new instanceof \think\Collection || $new instanceof \think\Paginator): $i = 0; $__LIST__ = $new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<li data-id="97167261">
            <div class="u-img ">
                <a href="/user/others-9186169.html" target="_blank">
                    <img class="user-logo" src="<?php echo $vo['head']; ?>">
                </a>
            </div>
            <div class="txt">
                <h3>
                    <a href="/user/others-9186169.html" target="_blank"><?php echo $vo['name']; ?></a>
                </h3>
                <div class="txt-c">
                    <div class="g-mn1">
                        <div class="g-mnc1">
                            <p><?php echo $vo['comments']; ?></p>
                        </div>
                    </div>
                    <div class="g-sd1">
                        <div class="u-dian">
                            <i class="icon-up j-u-dialog"></i>&nbsp;<span><?php echo $vo['zan']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>  </ul>
                </div>
            </div>
            <div class="n-title new-comment-title" style="display: ;">
                <h2 class="u-tt u-tt-sm">最新评论</h2>
            </div>

            <div class="c-comment-list">
                <div class="m-list3">
                    <ul class="f-cb" id="newCommentList">
                    <?php if(is_array($new) || $new instanceof \think\Collection || $new instanceof \think\Paginator): $i = 0; $__LIST__ = $new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<li data-id="97167261">
            <div class="u-img ">
                <a href="/user/others-9186169.html" target="_blank">
                    <img class="user-logo" src="<?php echo $vo['head']; ?>">
                </a>
            </div>
            <div class="txt">
                <h3>
                    <a href="/user/others-9186169.html" target="_blank"><?php echo $vo['name']; ?></a>
                </h3>
                <div class="txt-c">
                    <div class="g-mn1">
                        <div class="g-mnc1">
                            <p><?php echo $vo['comments']; ?></p>
                        </div>
                    </div>
                    <div class="g-sd1">
                        <div class="u-dian">
                            <i class="icon-up j-u-dialog"></i>&nbsp;<span><?php echo $vo['zan']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>

            </div>
            <p id="commentNoMoreMsg" class="f-tac no-more-comment" style="">“已显示全部内容”</p>
        </div>
    </div>

            </div>

            <!--right -->
            <div class="g-sd">

    <div class="j-l-c">
        <!--投稿审稿-->
        <!--投稿-->
<div class="j-sent">
    <a href="<?php echo url('user/publish'); ?>" onclick="jie.gaSend('pc官网-点击发帖button','点击大发帖button','')" class="left icon-contribute">
        <i class="icon-page-contribute"></i>发帖
    </a>
</div>
        <!--广告1-->
<div class="item"><a style="" target="blank" href="http://m.baidu.com/mobads.php?K00000008H0vknKVBxAGWvodjaWtMWcpNcO51IEeCx3k5nZYp9VAmLaXgv-u-Y_M_xgVqBXMEtMvUMlsbhysLGzy-KYNTL4xIh5sZEKeDUE-hhheegERucsJG6tdcsUaZRzNH4PmZP5DI1FTY87zBXqd1va757-fJAp31WJM3OJruwSpT0.7D_iwt5-wX17-XzBKnYIH_AVMPKLsRP5QAeKPa-BqM764mgwRDkRr8a9G4I2UM3PQZgKfYtVKnv-B1o6CpXy7YNKnNKWj4e_r1I9q81j4SrZdSyZxgMsSXOjELmxgl3x5GseO9seOodsRP5Qa1Gk_Edwnmx5I9LS8Zdtt5M33IhOj_tNnUlaR1Hrh4mTTzs1f_IPIX1GR0.pywW5yIlUMn0mLKGujdKPYc4nDu7nDDsnjTdnRNjP1nkfWnYwWuAnHn1fRn1n6KhpgF1I7qYTh7buHYs0ZP-mvq8u7qYTh7buHYs0ZKzULuGUhP-5Hf0mv-YXHY4nsKWpAdb5HD0TvPCUyfqnfK1TjYk0ZI_5HD0mv99Uh4-UjYs0ZN1ugFxIZ-suHYs0AN3mv99UhI-gLw4TARqn0KVmgwWp7qWUvw-5H00mywWUA71T1Ys0Zwd5gRzn1cknH640ZwV5H00IAfqnWnznHD3rfKYmgcqn0K1TL0qnfKhUWdBmy-bIgPGIAN-TMFET-qWTZc0IZws5HD0UMwYTjYk0AFz5HDz0Aw-Ih-WuNqGujYk0AwYTjYk0ZNzUjdCIZwsrBtEILILQhFEUv_8mvqVQv-8uAN3QMKCTaqBUvqoQv-8uAN3Qvw-IA7GUaqGuatd0APC5H00uh4z5HD0Tv3qfHIarHKAwHKKnj0LPH77f1T1nRc1PDmvwWD1nY7jn1c0mgwEUNqGujYs0Ad-uA-9gLw4TARqn6K8UL0q0A7sgv-b5fKbuguxIZ0q0ZPbp1Y0TvwogLmq0AwWgLF-TNqspvTq0AwWgvPdpyfq0A7WmLfq0A7sTA-b5yFEUv_8mvqV0Aq1gv-b5fKBTh78ujY0Iv7sgvPEUvVGuHdKPYc4nDu7nDDsnjTdnRNjP1nkfWnYwWuAnHn1fRn1n6K9UhwzUv-bgv-b5fK1TL0z5HD0mLwo5fKLpHYv0A7bgLnqPHbkuH04nARLPvDzmW-WuNts0A7sTAP9IANxpyfq0ZNzU7q9TZKWmgw-gv-b5fK_mMPxpyfq0AFdTv-8ugP1gv-b5fKbpgPYTh-WI7qGujY0myPYpgu-gv7sTjY0myPYpgu-gvP9IANMULF45fKhpgF1I7qGIjY0TvNWUv4bgv-Y5fKspAq8uHYs0AP_pv7YIZ0qmv99ThI-0ZPCULTqn0KWUA-Wp1Yk0A4Y5Hc0ULKYgLw4TARqnfK9mLfqnfKkIAYqnHRznHD4nW6kr0Kzm1dCIZwsrBtEILILQhFEUv_8mvqVQv-8uAN3QMKCTaqBUvqoQv-8uAN3Qv-8uAN30ZF9Uh_qn0K35H00TZFEujY0mhIYTjYs0A-vIZcqn0K-TMKWUvw-5N0zP1f10A7WIA-vmgw-5H00uZPspyfqP6K1ThPxIvbqnHm0TAPvTWYs0A7bmWYs0AI-Uhw-TWYznjD0myI-5HD4n6KWThnqn1R3n1c0" title="sz.lianjia.com" id="res0"><img style="" src="http://ubmcmm.baidustatic.com/media/v1/0f0005iWq0PoFKD501Zoqf.jpg"></a></div>

        <!--广告2-->
<div class="item"><a style="" target="blank" href="http://m.baidu.com/mobads.php?K00000008H0vknKVBULMsVIG0u7YpRC54w8YIzSs4ladj9kLuKNwcrFBZF-CSvnnWvn4br7NH4ppqAHvKYvsi-wpA_7on4KDUBMKCwmrDzvwFEIVE62hBYkjR3l_wt8i_cHH20GxFooTEyu3qkE3yCLrTahjd9OoPw5OgdL59-WMuUXJpf.DY_iwt5b1BxJIhwKwuB8xh6sw5I7KV4qt7jHzlRL5spycTT5gKfYtVKnv-Wo6CpXy7YNKnNKWFgE_LqMZIdsRP5QWC_sGYGBCnIT7jHzk8sHfGmksLw3S8a9G4myIrP-SJFWqE_1OSjxMzXyHcGWxfihpuYLQjWhyAp7B81GvIB6.pywW5yIlUMn0mLKGujdKPYc4nDu7nDDsnjTdnRNjP1nkfWnYwWuAnHn1fRn1n6KhpgF1I7qYTh7buHYs0ZP-mvq8u7qYTh7buHYs0ZKzULuGUhP-5Hf0mv-YXHY4nsKWpAdb5HD0TvPCUyfqnfK1TjYk0ZI_5HD0mv99Uh4-UjYs0ZN1ugFxIZ-suHYk0AN3mv99UhI-gLw4TARqn0KVmgwWp7qWUvw-5H00mywWUA71T1Ys0Zwd5gRzn1cknH640ZwV5H00IAfqnWnznHD3rfKYmgcqn0K1TL0qnfKhUWdBmy-bIgPGIAN-TMFET-qWTZc0IZws5HD0UMwYTjYk0AFz5HDz0Aw-Ih-WuNqGujYk0AwYTjYk0ZNzUjdCIZwsrBtEILILQhFEUv_8mvqVQv-8uAN3QMKCTaqBUvqoQv-8uAN3Qvw-IA7GUaqGuatd0APC5H00uh4z5HD0Tv3qfHIarHKAwHKKnj0LPH77f1T1nRc1PDmvwWD1nY7jn1c0mgwEUNqGujYs0Ad-uA-9gLw4TARqn6K8UL0q0A7sgv-b5fKbuguxIZ0q0ZPbp1Y0TvwogLmq0AwWgLF-TNqspvTq0AwWgvPdpyfq0A7WmLfq0A7sTA-b5yFEUv_8mvqV0Aq1gv-b5fKBTh78ujY0Iv7sgvPEUvVGuHdKPYc4nDu7nDDsnjTdnRNjP1nkfWnYwWuAnHn1fRn1n6K9UhwzUv-bgv-b5fK1TL0z5HD0mLwo5fKLpHYv0A7bgLnqPWfkmW0LrH9BnjIBPv7Wu7ts0A7sTAP9IANxpyfq0ZNzU7q9TZKWmgw-gv-b5fK_mMPxpyfq0AFdTv-8ugP1gv-b5fKbpgPYTh-WI7qGujY0myPYpgu-gv7sTjY0myPYpgu-gvP9IANMULF45fKhpgF1I7qGIjY0TvNWUv4bgv-Y5fKspAq8uHYs0AP_pv7YIZ0qmv99ThI-0ZPCULTqn0KWUA-Wp1Yk0A4Y5Hc0ULKYgLw4TARqP0K9mLfqnfKkIAYqnHRznHD4nWbsn0Kzm1dCIZwsrBtEILILQhFEUv_8mvqVQv-8uAN3QMKCTaqBUvqoQv-8uAN3Qv-8uAN30ZF9Uh_qn0K35H00TZFEujY0mhIYTjYk0A-vIZcqn0K-TMKWUvw-5N0zP1f10A7WIA-vmgw-5H00uZPspyfqP6K1ThPxIvbqnHm0TAPvTWY1nWDkPjm40A7bmWYs0AI-Uhw-TWYznjD0myI-5HD4n6KWThnqnH64rjm0" title="sz.aidigong.com" id="res0"><img style="" src="http://ubmcmm.baidustatic.com/media/v1/0f000Zc17pP0MiiW7KNpqf.jpg"></a></div>

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
                    <a href="<?php echo url('index/detail',['id'=>$vo['id']]); ?>"><?php echo $vo['biaoti']; ?></a>
                </div>
            </div>
<?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>

        </div>
    </div>
</div>


        <!--广告3-->
     <div class="item"><a style="" target="blank" href="http://m.baidu.com/mobads.php?K00000008H0vknKVBglAmhf0IO0Q0KxuBTa2z4XwfUEvngUDC_JfMBKIsYJrBHBRlOwtP6F6M7nBJaRVLIvb562bVtr0XeYidfOHza0WayXMX_ru6h_iQ_tdT6Sqlwx5QrUKTAg7-yUU-3xGPPjA-g4aauGfe30FflDE5WunDhNGoPX5P6.7b_iwt5-wX17-XzBKnYIH_AVMPKLsRP5QAeKPa-BqM764mgwRDkRr8a9G4I2UM3PQZgKfYtVKnv-B1o6CpXy7YNKnNKBEWkzyyX5Zo6CpXy7MHWuxJBmsSXejEqT5o43x5ksePSZu34t5M8sePvZven5M33xg4mIqXZ1L3ISejlOgj4qrZxtrZxqNnUlaR1Hrh4mTTzs1f_ur1GlXkf.pywW5yIlUMn0mLKGujdKPYc4nDu7nDDsnjTdnRNjP1nkfWnYwWuAnHn1fRn1n6KhpgF1I7qYTh7buHYs0ZP-mvq8u7qYTh7buHYs0ZKzULuGUhP-5Hf0mv-YXHY4nsKWpAdb5HD0TvPCUyfqnfK1TjYk0ZI_5HD0mv99Uh4-UjYs0ZN1ugFxIZ-suHYs0AN3mv99UhI-gLw4TARqn0KVmgwWp7qWUvw-5H00mywWUA71T1Ys0Zwd5gRzn1cknH640ZwV5H00IAfqnWnznHD3rfKYmgcqn0K1TL0qnfKhUWdBmy-bIgPGIAN-TMFET-qWTZc0IZws5HD0UMwYTjYk0AFz5HDz0Aw-Ih-WuNqGujYk0AwYTjYk0ZNzUjdCIZwsrBtEILILQhFEUv_8mvqVQv-8uAN3QMKCTaqBUvqoQv-8uAN3Qvw-IA7GUaqGuatd0APC5H00uh4z5HD0Tv3qfHIarHKAwHKKnj0LPH77f1T1nRc1PDmvwWD1nY7jn1c0mgwEUNqGujYs0Ad-uA-9gLw4TARqn6K8UL0q0A7sgv-b5fKbuguxIZ0q0ZPbp1Y0TvwogLmq0AwWgLF-TNqspvTq0AwWgvPdpyfq0A7WmLfq0A7sTA-b5yFEUv_8mvqV0Aq1gv-b5fKBTh78ujY0Iv7sgvPEUvVGuHdKPYc4nDu7nDDsnjTdnRNjP1nkfWnYwWuAnHn1fRn1n6K9UhwzUv-bgv-b5fK1TL0z5HD0mLwo5fKLpHYv0A7bgLnqPhc3PWDvPyF-P1DvuH7-P7ts0A7sTAP9IANxpyfq0ZNzU7q9TZKWmgw-gv-b5fK_mMPxpyfq0AFdTv-8ugP1gv-b5fKbpgPYTh-WI7qGujY0myPYpgu-gv7sTjY0myPYpgu-gvP9IANMULF45fKhpgF1I7qGIjY0TvNWUv4bgv-Y5fKspAq8uHYs0AP_pv7YIZ0qmv99ThI-0ZPCULTqn0KWUA-Wp1Yk0A4Y5Hc0ULKYgLw4TARqnfK9mLfqnfKkIAYqnHRznHD4nWbvnfKzm1dCIZwsrBtEILILQhFEUv_8mvqVQv-8uAN3QMKCTaqBUvqoQv-8uAN3Qv-8uAN30ZF9Uh_qn0K35H00TZFEujY0mhIYTjYs0A-vIZcqn0K-TMKWUvw-5N0zP1f10A7WIA-vmgw-5H00uZPspyfqP6K1ThPxIvbqnHm0TAPvTWYs0A7bmWYs0AI-Uhw-TWYznjD0myI-5HD4n6KWThnqnWnLPWb0" title="sz.lianjia.com" id="res0"><img style="" src="http://ubmcmm.baidustatic.com/media/v1/0f000PbfnJzGsTvX7kBA10.jpg"></a></div>

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
        src="__static__/Scripts/2053796bc7e14f9683db2b9a434e4a49.js"></script>


<script src="__static__/Scripts/require.js"></script>
<script type="text/javascript" src="__static__/layui/layui.all.js"></script>
<script type="text/javascript">
function comment(){
	layer.open({
	  type: 1,
	  skin: 'layui-layer-rim', //加上边框
	  area: ['300px', '100px'], //宽高
	  content:"<form method='post' action=<?php echo url('index/detail'); ?>><input name='list_id' type='hidden' value='<?php echo $list['detail_id']; ?>'/> <textarea rows='' cols='' value='' name='comments'></textarea><input type='submit' value='提交评论'></form>"
	});
}
</script>
<script type="text/javascript">
function login(){
	layer.open({
	  type: 2,
	  skin: 'layui-layer-rim', //加上边框
	  area: ['1000px', '510px'], //宽高
	  content:["<?php echo url('index/login'); ?>", 'no']
	});
}

function register(){
	layer.open({
	  type: 2,
	  skin: 'layui-layer-rim', //加上边框
	  area: ['1000px', '650px'], //宽高
	  content:["<?php echo url('index/register'); ?>", 'no']
	});

}
</script>
    <script src="__static__/Scripts/detail.config.js"></script>

</body>

<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:54:"/var/www/book/public/../app/book/view/index/index.html";i:1527675746;s:46:"/var/www/book/app/book/view/common/header.html";i:1527675746;s:46:"/var/www/book/app/book/view/common/footer.html";i:1527675746;}*/ ?>

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
    <script src="/book/Scripts/json2.min.js"></script>
    <script src="/book/Scripts/html5.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="http://wimg.spriteapp.cn/logo/favicon.ico"/>
    <link rel="apple-touch-icon" href="http://mstatic.spriteapp.cn/xx/1/img/touchicon.png"/>
    <link rel="stylesheet" href="/book/Css/ui.css">
    <script type="text/javascript">
        if (!window.console) {
            window.console = {
                log: function () {
                }
            }
        }
    </script>
    <link rel="stylesheet" href="/book/Css/page.css">


    <link rel="stylesheet" href="/book/Css/user.css">
    <link rel="stylesheet" href="/book/Css/index.css">

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
                <img src="/book/Picture/logo_new.png" alt="好书荐读" title="好书荐读官网">
            </i>
        </a>

        <div class="link">
            <!-- gaga type: 1  None -->
            <a  class="cur"  href="<?php echo url('index/index'); ?>">全部</a>
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

    <div class="j-app-banner" id="j_ad_app" >
        <script type="text/javascript">
            /*pc官网顶部*/
            var cpro_id = "u2606979";
        </script>
        <script src="/book/Scripts/c.js" type="text/javascript"></script>
    </div>


            <div class="g-mn">


    <!--坐标内容-->
    <div class="j-r-c">
        <!--标签导航-->
        <!-- type: 1 cate:  - -->


            <div class="j-r-nav">
                <ul>

                        <li    class="<?php echo $jinghua; ?>"><a href="<?php echo url('index/index'); ?>">精华</a>
                        </li>
                        <li class="<?php echo $old; ?>"><a href="<?php echo url('index/index',['type'=>'old']); ?>">穿越</a>
                        </li>

                </ul>
            </div>

        <!--帖子列表1-->
        <div class="j-r-list">
            <ul>

                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                    <li>



<!--用户信息-->
<div class="j-list-user">
    <div class="u-img">
        <a href="<?php echo url('user/topic',['uid'=>$vo['id']]); ?>" target="_blank">
            <img class="u-logo lazy"
                 src="/book/Picture/d_user_logo.jpg"
                 data-original="<?php echo $vo['head']; ?>"
                 alt="<?php echo $vo['name']; ?>"/>
        </a>
    </div>
    <div class="u-txt">
        <a href="<?php echo url('index/detail',['id'=>$vo['detail_id']]); ?>" class="u-user-name" target="_blank"><?php echo $vo['name']; ?></a>
        <span class="u-time  f-ib f-fr"><?php echo $vo['date']; ?></span>
    </div>
</div>



<div class="j-r-list-c">
    <!--因为头像单独占位 所以内容需要 移动 一个头像高度 30px+间距10px -->
    <!--描述 段子 直接 只有它 宽度230 高度190-->
    <div class="j-r-list-c-desc">
        <a href="<?php echo url('index/detail',['id'=>$vo['detail_id']]); ?>"><?php echo $vo['biaoti']; ?></a>
    </div>
    <div class="j-r-list-c-img">
       <?php switch($vo['type_id']): case "1": ?>
   <video width="500" height="300" controls="controls">
  <source src="<?php echo $vo['src']; ?>" type="video/mp4" />
  <object data="<?php echo $vo['src']; ?>" width="320" height="240">
    <embed src="<?php echo $vo['src']; ?>" width="320" height="240" />
  </object>
</video><?php break; case "2": ?><img src="<?php echo $vo['src']; ?>" width="300"><?php break; case "4": ?>
     <img src="<?php echo $vo['src']; ?>" width="300">
      <audio controls="controls" height="100" width="100">
							<source src="<?php echo $vo['voice']; ?>" type="audio/mp3" />
							<source src="song.ogg" type="audio/ogg" />
							<embed height="100" width="100" src="<?php echo $vo['voice']; ?>" />
							</audio><?php break; default: endswitch; ?>
    </div>
</div>




                        <!--操作工具条-->
<div class="j-r-list-tool"
     data-type="10"
     data-video_mlen=""
     data-id="27298511"
     data-title="<?php echo $vo['biaoti']; ?>"
     data-date="2018-03-09"
     data-time="05:52"
     data-playcount="0"
     data-playfcount="0"
        >
    <div class="j-r-list-tool-l " data-id="27298511">
        <ul>
            <li class="j-r-list-tool-l-up">
                <i class="icon-up ui-icon-up"></i>&nbsp;&nbsp;<span><?php echo $vo['zan']; ?></span>
            </li>
            <li class="j-r-list-tool-l-down ">
                <i class="icon-down"></i>&nbsp;&nbsp;<span><?php echo $vo['cai']; ?></span>
            </li>
        </ul>
    </div>
    <!--分享-->
    <div class="j-r-list-tool-ct">
        <div class="j-r-list-tool-ct-share-c">
            <span>分享&nbsp;&nbsp;22&nbsp;&nbsp;</span>
        </div>
        <div class="j-r-list-tool-ct-fx">

            <div class="bdsharebuttonbox fx-bd-27298511"
                 data-id="27298511"

                 data-url="/detail-27298511.html"
                 data-pic="http://mpic.spriteapp.cn/ugc/2018/03/07/5a9ff3d2cd44a_a_1_1.jpg"
                 data-text="诞生地时候爱好上帝 ！">
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


                    <a href="<?php echo url('index/detail',['id'=>$vo['detail_id']]); ?>" class="j-list-comment" target="_blank">
                        <i class="icon-comment "></i>&nbsp;<span class="comment-counts"><?php echo $vo['comment']; ?></span></a>


            </li>


        </ul>
    </div>

</div>

                    </li>
                <?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
                    <li>
            </ul>
        </div>


    </div>

    <!--分页:  上一页 ... 5 6 7 8 ... 下一页 -->
    <div class="j-page">
        <?php echo $data->render();; ?>
        </div>


            </div>

            <!--right -->
            <div class="g-sd">

    <div class="j-l-c">
            <div class="j-before-day">
                <a href="<?php echo url('index/detail',['id'=>$vo['detail_id']]); ?>"
                   data-title="<?php echo $jinhua['biaoti']; ?>"
                   data-id="27298654"
                   data-date=""
                   data-time="">
                    <div class="icon">
                        精华推荐
                    </div>
                    <div class="main">
                    <?php echo $jinhua['biaoti']; ?>
                    </div>
                    <div class="img">
                        <img src="<?php echo $jinhua['src']; ?>"
                             title="你家男朋友半夜是..." alt="你家男朋友半夜是..."/>
                    </div>
                </a>

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
              <!--近期热门-->
        <div class="j-r-wrst j-all-like j-r-list j-jq-hot">
            <div class="n-title">
                <h2 class="u-tt u-tt-md">好书荐读近期热门</h2>
            </div>
            <div class="j-list">
                <div class="j-list-c" >
<?php if(is_array($allhot) || $allhot instanceof \think\Collection || $allhot instanceof \think\Paginator): $i = 0; $__LIST__ = $allhot;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <div class="j-item" >
                        <a href="<?php echo url('index/detail',['id'=>$vo['id']]); ?>"
                            data-title="<?php echo $vo['biaoti']; ?>"
                            data-id="27230172"
                            data-index="7"
                            data-date="<?php echo $vo['date']; ?>"
                            data-time="02:56">
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
                            <a href="<?php echo url('index/detail',['id'=>$vo['id']]); ?>"><?php echo $vo['biaoti']; ?></a>
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
<script type="text/javascript" src="/book/layui/layui.all.js"></script>
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
<script src="/book/Scripts/jquery.min.js"></script>
<script src="/book/Scripts/underscore-min.js"></script>
<script src="/book/Scripts/base.js"></script>
<script src="/book/Scripts/jquery.placeholder.min.js"></script>
<script type="text/javascript"
        src="/book/Scripts/cc8d3678eeb44e279f57c3ea2d1e3821.js"></script>
<script type="text/javascript">
    var jie = window['jie'] || {};
    jie['common_config'] = {};
    jie['is_oauth_login'] = '';
    jie['is_login_page'] = '';
    jie.gaSend = function (opt, type, tag) {
        ga('send', 'event', opt, type, tag);
    };
    try {
        jie['common_config'] = jie_common_config;
    } catch (e) {
    }
</script>

<script src="/book/Scripts/require.js"></script>

    <script type="text/javascript">
        var INDEXBASEURL = "http://mstatic.spriteapp.cn/xx/1/w3/js/",
                STATICLAZYSRC = "http://mstatic.spriteapp.cn/xx/1/w3/img/lazyload/",
                SHAREID = null;
    </script>

    <script src="/book/Scripts/config.js"></script>
    <script id="add2desktopTemp" type="text/template">
        <section class="j-add-screen">
            <div id="add2desktop">
                <i class="icon-cha"></i>
                <del class="j-a-s-del">╳</del>
                <div id="a2d-container">
                    <i class="icon-screen-logo"></i><span>【官网】好书荐读，请点击箭头并选择<b>添加至主屏幕</b></span>
                </div>
            </div>
        </section>
    </script>



    <!--百分点代码：列表页-->
    <script type="text/javascript">
        window["_BFD"] = window["_BFD"] || {};
        _BFD.BFD_INFO = {
            "user_id": "0", //网站当前用户id，如果未登录就为0或空字符串
            "page_type": "list", //当前页面全称，请勿修改
            "tag": "全部", //标签
            "valid": "True"
        };
    </script>

<script type="text/javascript">
    var _r = window.document.referrer.replace('http://', '');
    if (_r == '') {
        _r = 'wulaiyuan';
    }
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-68700631-3', 'auto', {'sampleRate': 20});
   // ga('create', 'UA-41454169-10', 'auto');
    ga('set', 'dimension1', _r);
    ga('send', 'pageview', {
        'dimension1': _r
    });

</script>

<script type="text/javascript">
    window["_BFD"] = window["_BFD"] || {};
    _BFD.client_id = "Cbudejie_pc";
    _BFD.BFD_USER = {
        "user_id" : 0, //网站当前用户id，如果未登录就为0或空字符串
        "user_cookie" : jie['common_config']['baifen_cookie'] || '', //网站当前用户的cookie，不管是否登录都需要传
        "p_id":""   //页面id
    };
    _BFD.script = document.createElement("script");
    _BFD.script.type = "text/javascript";
    _BFD.script.async = true;
    _BFD.script.charset = "utf-8";
    _BFD.script.src = (('https:' == document.location.protocol ? 'https://ssl-static1' : 'http://static1') + '.bfdcdn.com/service/baisibudejie/baisibudejie.js');
    document.getElementsByTagName("head")[0].appendChild(_BFD.script);
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#showAllLink').on('click', function () {
            $('.j-contect').removeClass('j-contect-h');
            $(this).remove();
        });
    });
</script>
</body>
</html>
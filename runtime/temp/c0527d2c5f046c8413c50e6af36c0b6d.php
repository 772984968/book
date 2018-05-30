<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:52:"/var/www/book/public/../app/book/view/user/text.html";i:1521293103;s:56:"/var/www/book/public/../app/book/view/common/header.html";i:1521190226;s:56:"/var/www/book/public/../app/book/view/common/footer.html";i:1521191972;}*/ ?>
﻿
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

<link rel="stylesheet" href="__static__/Css/contribute.css">

    <!--中间内容-->
    <div class="j-content">
        <div class="g-bd f-cb">

<form action="<?php echo url('user/text'); ?>" method="post">
            <div class="g-mn">

    <div class="j-r-c j-r-tab" id="tabContainer">
        <!-- tab -->
        <div class="j-tab">
            <!-- tab header -->
    <div class="j-tab-header">
                <ul>
                    <li >
                        <a class="j-t-h-c" href="<?php echo url('user/publish'); ?>">
                            <i class="icon-video"></i>
                            <span class="j-t-h-c-des">发视频贴</span>
                        </a>
                    </li>
                    <li  >
                        <a class="j-t-h-c" href="<?php echo url('user/voice'); ?>">
                            <i class="icon-video icon-voice"></i>
                            <span class="j-t-h-c-des">发声音贴</span>
                        </a>
                    </li>
                    <li  >
                        <a class="j-t-h-c" href="<?php echo url('user/image'); ?>">
                            <i class="icon-video icon-pic"></i>
                            <span class="j-t-h-c-des">发图片贴</span>
                        </a>
                    </li>
                    <li  class="j-tab-current" >
                        <a class="j-t-h-c" href="<?php echo url('user/text'); ?>">
                            <i class="icon-video icon-text"></i>
                            <span class="j-t-h-c-des">发段子</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- tab content -->
            <div class="j-tab-c">
                <div class="j-tab-c-hide j-tab-c-show j-tab-c-text">
                    <!-- 文件区域 上传图片 视频 音频   -->


                    <!-- 描述  -->
                    <div class="j-tab-c-text-input"

                         style="padding-top: 20px;"
                            >
                        <textarea name="biaoti"
                            placeholder="推荐好书......"

                                 id="textArea"></textarea>
                    </div>

                    <!-- 标签
                    <div class="j-tab-c-text-tag">
                        <div class="j-tab-c-text-recommend">
                            <span class="j-tab-c-text-tag-h">推荐:</span>
                            <ul class="j-tab-c-t-t-con" id="listRecommendTags">

                            </ul>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <!-- tab button disabled="disabled"  -->
        <div class="j-tab-button-wrap">
            <button class="j-tab-button" id="btnSubmit">发表</button>
            <br/>
            <br/>
            <br/>
        </div>
    </div>


            </div>
</form>
            <!--right -->
            <div class="g-sd">

    <div class="j-l-c">

        <!--发帖须知-->
        <div class="j-r-wrst j-all-like j-r-list j-jq-hot j-p-n">
            <div class="n-title">
                <h2 class="u-tt u-tt-md">好书荐读发帖须知</h2>
            </div>
            <div class="j-list">
                <div class="j-list-c">
                    <p class="post-notice">
                        <span class="p-n-number">1、</span>
                        <span class="p-n-con">好书荐读是分享快乐的网站，请不要发表无关的内容欺骗小伙伴们的感情啦！</span>
                    </p>

                    <p class="post-notice">
                        <span class="p-n-number">2、</span>
                                    <span class="p-n-con">不能涉及政治、色情、暴力、陪聊等违法
                                        违规内容，不能包含邮件地址、电话号码、
                                        地址、QQ、微博等联系信息，不要在本
                                        站发布广告。</span>
                    </p>

                    <p class="post-notice">
                        <span class="p-n-number">3、</span>
                                    <span class="p-n-con">请发布视频、声音、文字和图片，身边的
                                        搞笑趣事、糗事、随手拍等都可以。</span>
                    </p>

                    <p class="post-notice">
                        <span class="p-n-number">4、</span>
                                    <span class="p-n-con">请选择清晰有趣的图片，并且不能包含其
                                        他网站、微博号等的水印。请勿上传涉嫌
                                        广告、营销的图片。</span>
                    </p>

                    <p class="post-notice">
                        <span class="p-n-number">5、</span>
                        <span class="p-n-con">文字笑话或段子，请提供纯文字。</span>
                    </p>

                    <p class="post-notice">
                        <span class="p-n-number">6、</span>
                                    <span class="p-n-con">请勿上传聊天表情图片，虽然好笑，但是
                                        不适合在不得姐出现哦。</span>
                    </p>

                    <p class="post-notice">
                        <span class="p-n-number">7、</span>
                        <span class="p-n-con">请勿提交重复的内容。</span>
                    </p>
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
</body>

<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:53:"/var/www/book/public/../app/book/view/user/image.html";i:1521293043;s:56:"/var/www/book/public/../app/book/view/common/header.html";i:1521190226;s:56:"/var/www/book/public/../app/book/view/common/footer.html";i:1521191972;}*/ ?>
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
   <form action="<?php echo url('user/image'); ?>" method="post">

            <div class="g-mn">

    <div class="j-r-c j-r-tab" id="tabContainer">
        <!-- tab -->
        <div class="j-tab">
            <!-- tab header -->
        <div class="j-tab-header">
                <ul>
                    <li  class="j-t-h-c" >
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
                    <li class="j-tab-current">
                        <a class="j-t-h-c" href="<?php echo url('user/image'); ?>">
                            <i class="icon-video icon-pic"></i>
                            <span class="j-t-h-c-des">发图片贴</span>
                        </a>
                    </li>
                    <li >
                        <a class="j-t-h-c" href="<?php echo url('user/text'); ?>">
                            <i class="icon-video icon-text"></i>
                            <span class="j-t-h-c-des">发文字贴</span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- tab content -->
            <div class="j-tab-c">
                <div class="j-tab-c-hide j-tab-c-show j-tab-c-text">
                    <!-- 文件区域 上传图片 视频 音频   -->

                        <!-- 图片   -->
<div class="j-tab-c-file">
    <div class="j-tab-c-file-c ">
        <!-- 添加封面图区域   -->
        <div class="j-tab-c-file-add fileinput-button" id="beforeUploadContain">
            <div class="j-tab-c-file-c-video ">
                <i class="icon-file-img"></i>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;添加图片
            </div>
            <input id="fileUpload" type="file" name="image" multiple>
        </div>
<div class="j-tab-c-file-ing" id="afterUploadContain" style="display: none;">
            <img src="" id="fileimg" width="170" height="70">
			<input name="src" value="" type="hidden" id="filesrc">

            <div class="j-tab-c-file-ing-r" id="btnUploadDel">
                <i class="j-tab-c-v-del"></i>
                &nbsp;&nbsp;&nbsp;删除
            </div>
        </div>
    </div>
    <!-- 文件名   -->
    <div class="j-tab-c-file-des">
        <p class="j-tab-c-file-des-text" id="txtUploadFileName"></p>
    </div>
</div>



                    <!-- 描述  -->
                    <div class="j-tab-c-text-input"
                            >
                        <textarea name="biaoti"
                            placeholder="说点什么...... "

                                 id="textArea"></textarea>
                    </div>

                    <!-- 标签 -->
                    <div class="j-tab-c-text-tag">
                    <!--
                        <div class="j-tab-c-text-tags">
                            <span class="j-tab-c-text-tag-h">标签:</span>
                            <input id="txtTags" type="text"
                                     value="搞笑"
                                      title=""/>
                        </div>

                        <div class="j-tab-c-text-recommend">
                            <span class="j-tab-c-text-tag-h">推荐:</span>
                            <ul class="j-tab-c-t-t-con" id="listRecommendTags">

                            </ul>
                        </div>-->
                    </div>
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
    </form>
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
        src="__static__/Scripts/0d104d98fe5645a09d316ff55fe2093b.js"></script>

        <!-- 上传接口 -->
<script type="text/javascript" src="__static__/layui/layui.all.js">
</script>
<script type="text/javascript">
layui.use('upload', function(){
  var upload = layui.upload;
  //执行实例
  var uploadInst = upload.render({
    elem: '#fileUpload' //绑定元素
    ,url: "<?php echo url('user/uploadImage'); ?>" //上传接口
    ,done: function(res){
        if (res.code==1){
            layer.msg(res.msg);
            $("#afterUploadContain").css('display','');
            $("#filesrc").attr('value',res.data.src);
            $("#fileimg").attr('src',res.data.src);
             }else{
              layer.msg(res.msg);
        }
           //上传完毕回调
    }
   ,accept:'images'
    ,error: function(){
        layer.msg('系统错误，上传失败，请重试！');
           //请求异常回调
    }
  });
});
</script>












<script type="text/javascript">
    var jie = window['jie'] || {};
    jie['common_config'] = {};
    jie['is_oauth_login'] = 'True';
    jie['is_login_page'] = '';
    jie.gaSend = function (opt, type, tag) {
        ga('send', 'event', opt, type, tag);
    };
    try {
        jie['common_config'] = jie_common_config;
    } catch (e) {
    }
</script>

    <script src="Scripts/fileupload.js"></script>
    <script src="Scripts/jquery.blockui.js"></script>

<script src="Scripts/require.js"></script>

    <script type="text/javascript">
        var INDEXBASEURL = "http://mstatic.spriteapp.cn/xx/1/w3/js/",
                STATICLAZYSRC = "http://mstatic.spriteapp.cn/xx/1/w3/img/lazyload/",
                SHAREID = null;
    </script>

    <script src="Scripts/publish.config.js"></script>





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

    //百度统计代码
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?7c9f93d0379a9a7eb9fb60319911385f";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
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

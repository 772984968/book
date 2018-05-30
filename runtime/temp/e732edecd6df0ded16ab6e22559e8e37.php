<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:52:"/var/www/book/public/../app/book/view/user/fans.html";i:1521258560;s:56:"/var/www/book/public/../app/book/view/common/header.html";i:1521190226;s:56:"/var/www/book/public/../app/book/view/common/footer.html";i:1521191972;}*/ ?>

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
                <li class="j-nav-active"><a href="javascript:void(0);">Ta
                粉丝（<span id="labMyUserFans">38</span>）</a></li>
            </ul>
        </div>
        <!--我的粉丝-->
        <div class="j-r-list p-fan">
            <ul id="fansList" scrollpagination="enabled">
            <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-20385456.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2017/11/28/5a1cd9941d213_mini.jpg" src="http://wimg.spriteapp.cn/profile/large/2017/11/28/5a1cd9941d213_mini.jpg" style="display: block;"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-20385456.html" target="_blank">摸咪校尉</a></div>
                <div class="p-fan-number">关注：<span>117</span>
                    | 粉丝：<span>4774</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="20385456">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="20385456">取消关注
                </div>


            </div>
        </li>

        <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-17588230.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2018/01/16/5a5e0366c769e_mini.jpg" src="http://wimg.spriteapp.cn/profile/large/2018/01/16/5a5e0366c769e_mini.jpg" style="display: block;"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-17588230.html" target="_blank">神马情况这是</a></div>
                <div class="p-fan-number">关注：<span>9</span>
                    | 粉丝：<span>5958</span>
                </div>
                <div class="p-fan-signature">心平常，自非凡！</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="17588230">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="17588230">取消关注
                </div>


            </div>
        </li>

        <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-9075611.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2017/09/13/59b9084943771_mini.jpg" src="http://wimg.spriteapp.cn/profile/large/2017/09/13/59b9084943771_mini.jpg" style="display: block;"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-9075611.html" target="_blank">百思不得姐官方</a></div>
                <div class="p-fan-number">关注：<span>66</span>
                    | 粉丝：<span>40077</span>
                </div>
                <div class="p-fan-signature">百思不得姐官方，微信（budejieyh）</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="9075611">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="9075611">取消关注
                </div>


            </div>
        </li>

        <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-18614232.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2016/09/22/57e3d9083f5e3_mini.jpg" src="http://wimg.spriteapp.cn/profile/large/2016/09/22/57e3d9083f5e3_mini.jpg" style="display: block;"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-18614232.html" target="_blank">原生君</a></div>
                <div class="p-fan-number">关注：<span>6</span>
                    | 粉丝：<span>10300</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="18614232">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="18614232">取消关注
                </div>


            </div>
        </li>

        <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-20430065.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2017/03/18/58cc97fb7181c_mini.jpg" src="http://wimg.spriteapp.cn/profile/large/2017/03/18/58cc97fb7181c_mini.jpg" style="display: block;"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-20430065.html" target="_blank">几米夜话</a></div>
                <div class="p-fan-number">关注：<span>37</span>
                    | 粉丝：<span>180</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="20430065">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="20430065">取消关注
                </div>


            </div>
        </li>

        <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-20766752.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wx.qlogo.cn/mmopen/2EzJggZltBMKQovGd4IuGeta4PjvPxsCyPicYornFDIftmXoDJe7ppdoDHWELKpUeqSl8W9aeh4QcUngKgSKaT7xmkchu4u2J/0" src="http://wx.qlogo.cn/mmopen/2EzJggZltBMKQovGd4IuGeta4PjvPxsCyPicYornFDIftmXoDJe7ppdoDHWELKpUeqSl8W9aeh4QcUngKgSKaT7xmkchu4u2J/0" style="display: block;"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-20766752.html" target="_blank">用户ZyaARL</a></div>
                <div class="p-fan-number">关注：<span>0</span>
                    | 粉丝：<span>3</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="20766752">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="20766752">取消关注
                </div>


            </div>
        </li>

        <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-11883383.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://qzapp.qlogo.cn/qzapp/100336987/21361B4EB31379442057484445F3ED49/100" src="http://qzapp.qlogo.cn/qzapp/100336987/21361B4EB31379442057484445F3ED49/100" style="display: block;"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-11883383.html" target="_blank">Oooo°  怡er123</a></div>
                <div class="p-fan-number">关注：<span>0</span>
                    | 粉丝：<span>3</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="11883383">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="11883383">取消关注
                </div>


            </div>
        </li>

        <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-20229586.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://qzapp.qlogo.cn/qzapp/100336987/F3D1D34864425D089048291ACCDF9A0D/100" src="http://qzapp.qlogo.cn/qzapp/100336987/F3D1D34864425D089048291ACCDF9A0D/100" style="display: block;"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-20229586.html" target="_blank">情场撩妹稳如狗</a></div>
                <div class="p-fan-number">关注：<span>5</span>
                    | 粉丝：<span>3</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="20229586">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="20229586">取消关注
                </div>


            </div>
        </li>

        <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-19489319.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2017/07/01/59578c3b61161_mini.jpg" src="http://wimg.spriteapp.cn/profile/large/2017/07/01/59578c3b61161_mini.jpg" style="display: block;"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-19489319.html" target="_blank">百思大白菜</a></div>
                <div class="p-fan-number">关注：<span>48</span>
                    | 粉丝：<span>4171</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="19489319">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="19489319">取消关注
                </div>


            </div>
        </li>

        <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-19670833.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2016/11/15/582a404523683_mini.jpg" src="http://wimg.spriteapp.cn/profile/large/2016/11/15/582a404523683_mini.jpg" style="display: block;"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-19670833.html" target="_blank">失足女想从良</a></div>
                <div class="p-fan-number">关注：<span>7</span>
                    | 粉丝：<span>3008</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="19670833">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="19670833">取消关注
                </div>


            </div>
        </li>

        <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-18682920.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2016/06/27/577119b7d372e_mini.jpg" src="http://wimg.spriteapp.cn/profile/large/2016/06/27/577119b7d372e_mini.jpg" style="display: block;"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-18682920.html" target="_blank">黑皮咪咪眼</a></div>
                <div class="p-fan-number">关注：<span>259</span>
                    | 粉丝：<span>16571</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="18682920">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="18682920">取消关注
                </div>


            </div>
        </li>

        <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-15931622.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2016/10/20/58079d2f21389_mini.jpg" src="http://wimg.spriteapp.cn/profile/large/2016/10/20/58079d2f21389_mini.jpg" style="display: block;"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-15931622.html" target="_blank">稀里哗啦哈哈哈</a></div>
                <div class="p-fan-number">关注：<span>42</span>
                    | 粉丝：<span>5340</span>
                </div>
                <div class="p-fan-signature">每日更新搞笑gif，长图</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="15931622">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="15931622">取消关注
                </div>


            </div>
        </li>

        <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-18144742.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2018/01/10/5a555ca7af434_mini.jpg" src="http://wimg.spriteapp.cn/profile/large/2018/01/10/5a555ca7af434_mini.jpg" style="display: block;"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-18144742.html" target="_blank">流浪小賎客</a></div>
                <div class="p-fan-number">关注：<span>55</span>
                    | 粉丝：<span>2276</span>
                </div>
                <div class="p-fan-signature">看完就赞我一下啊，   总有一种被嫖了不给钱的感觉。。。</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="18144742">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="18144742">取消关注
                </div>


            </div>
        </li>

        <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-19725232.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2018/02/14/5a8430f2d339e_mini.jpg" src="http://wimg.spriteapp.cn/profile/large/2018/02/14/5a8430f2d339e_mini.jpg" style="display: block;"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-19725232.html" target="_blank">搞笑大蛮</a></div>
                <div class="p-fan-number">关注：<span>10</span>
                    | 粉丝：<span>4384</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="19725232">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="19725232">取消关注
                </div>


            </div>
        </li>

        <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-19531820.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://tva4.sinaimg.cn/crop.0.0.996.996.50/e7f9e94djw8f6ursgyso3j20ro0rp0wy.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-19531820.html" target="_blank">臭宝蛋蛋</a></div>
                <div class="p-fan-number">关注：<span>6</span>
                    | 粉丝：<span>7700</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="19531820">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="19531820">取消关注
                </div>


            </div>
        </li>

        <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-18158969.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2017/01/15/587b657be41a6_mini.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-18158969.html" target="_blank">爱你一次就好</a></div>
                <div class="p-fan-number">关注：<span>33</span>
                    | 粉丝：<span>5901</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="18158969">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="18158969">取消关注
                </div>


            </div>
        </li>

        <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-17246660.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2017/06/02/5930c53896e3b_mini.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-17246660.html" target="_blank">雁回西楼</a></div>
                <div class="p-fan-number">关注：<span>121</span>
                    | 粉丝：<span>21689</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="17246660">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="17246660">取消关注
                </div>


            </div>
        </li>

        <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-19580755.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2017/10/11/59de1f71b22f9_mini.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-19580755.html" target="_blank">夏小荷</a></div>
                <div class="p-fan-number">关注：<span>20</span>
                    | 粉丝：<span>5381</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="19580755">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="19580755">取消关注
                </div>


            </div>
        </li>

        <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-13943553.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2016/10/07/57f7b339ed872_mini.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-13943553.html" target="_blank">龘靐龗齾齉爩虌麷灩韊</a></div>
                <div class="p-fan-number">关注：<span>73</span>
                    | 粉丝：<span>13532</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="13943553">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="13943553">取消关注
                </div>


            </div>
        </li>

        <li rel="loaded" style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-7130951.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2016/07/13/5785c83e4f0bd_mini.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-7130951.html" target="_blank">叫我大王</a></div>
                <div class="p-fan-number">关注：<span>15</span>
                    | 粉丝：<span>21629</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="7130951">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="7130951">取消关注
                </div>


            </div>
        </li><li style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-12129287.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2016/10/02/57efef8ed8db1_mini.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-12129287.html" target="_blank">千思万思不如百思</a></div>
                <div class="p-fan-number">关注：<span>33</span>
                    | 粉丝：<span>6643</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="12129287">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="12129287">取消关注
                </div>


            </div>
        </li>

        <li style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-13584284.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2016/09/11/57d5131885a43_mini.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-13584284.html" target="_blank">不梦闲人唯梦君</a></div>
                <div class="p-fan-number">关注：<span>82</span>
                    | 粉丝：<span>15876</span>
                </div>
                <div class="p-fan-signature">快乐有三法：舍得、放下、忘记。</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="13584284">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="13584284">取消关注
                </div>


            </div>
        </li>

        <li style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-19754414.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2017/10/28/59f45b96750de_mini.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-19754414.html" target="_blank">天黑了请回家</a></div>
                <div class="p-fan-number">关注：<span>13</span>
                    | 粉丝：<span>4191</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="19754414">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="19754414">取消关注
                </div>


            </div>
        </li>

        <li style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-20118851.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/p/jie.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-20118851.html" target="_blank">用户mrbYvs</a></div>
                <div class="p-fan-number">关注：<span>28</span>
                    | 粉丝：<span>2</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="20118851">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="20118851">取消关注
                </div>


            </div>
        </li>

        <li style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-18206928.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://qzapp.qlogo.cn/qzapp/100336987/815C0E63CF615FCA4A73F30B7044FE77/100" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-18206928.html" target="_blank">G.X.Mei</a></div>
                <div class="p-fan-number">关注：<span>29</span>
                    | 粉丝：<span>1</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="18206928">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="18206928">取消关注
                </div>


            </div>
        </li>

        <li style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-19837918.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2016/12/13/584f9d4b489b4_mini.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-19837918.html" target="_blank">用户3Ie8tr</a></div>
                <div class="p-fan-number">关注：<span>17</span>
                    | 粉丝：<span>694</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="19837918">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="19837918">取消关注
                </div>


            </div>
        </li>

        <li style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-17274977.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2016/08/30/57c5913446a87_mini.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-17274977.html" target="_blank">我是笔记本</a></div>
                <div class="p-fan-number">关注：<span>0</span>
                    | 粉丝：<span>6802</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="17274977">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="17274977">取消关注
                </div>


            </div>
        </li>

        <li style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-18619888.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2016/12/26/586059118dd30_mini.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-18619888.html" target="_blank">搞笑小村动态图</a></div>
                <div class="p-fan-number">关注：<span>0</span>
                    | 粉丝：<span>21391</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="18619888">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="18619888">取消关注
                </div>


            </div>
        </li>

        <li style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-5348609.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2016/07/26/57974925b34a6_mini.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-5348609.html" target="_blank">我有了一个男朋友ヽ、</a></div>
                <div class="p-fan-number">关注：<span>32</span>
                    | 粉丝：<span>22109</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="5348609">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="5348609">取消关注
                </div>


            </div>
        </li>

        <li style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-18832720.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2016/10/21/5809b74c63d75_mini.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-18832720.html" target="_blank">一世浮华一世梦</a></div>
                <div class="p-fan-number">关注：<span>43</span>
                    | 粉丝：<span>8459</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="18832720">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="18832720">取消关注
                </div>


            </div>
        </li>

        <li style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-6281065.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2017/09/20/59c21169151fc_mini.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-6281065.html" target="_blank">爱笑de小公主</a></div>
                <div class="p-fan-number">关注：<span>0</span>
                    | 粉丝：<span>12179</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="6281065">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="6281065">取消关注
                </div>


            </div>
        </li>

        <li style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-18809558.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2016/09/29/57ec70bf1adcb_mini.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-18809558.html" target="_blank">喒你家玻璃</a></div>
                <div class="p-fan-number">关注：<span>37</span>
                    | 粉丝：<span>7851</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="18809558">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="18809558">取消关注
                </div>


            </div>
        </li>

        <li style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-16072120.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://qzapp.qlogo.cn/qzapp/100336987/DD1D258452B6FEE938CD5FE9AFCF1A3B/100" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-16072120.html" target="_blank">遇见L9R</a></div>
                <div class="p-fan-number">关注：<span>0</span>
                    | 粉丝：<span>1</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="16072120">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="16072120">取消关注
                </div>


            </div>
        </li>

        <li style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-6699109.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2017/07/15/59690686161c7_mini.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-6699109.html" target="_blank">勤奋的大黄蜂</a></div>
                <div class="p-fan-number">关注：<span>50</span>
                    | 粉丝：<span>25475</span>
                </div>
                <div class="p-fan-signature">欢迎关注百思不得姐原创号：空耳哥哥！</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="6699109">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="6699109">取消关注
                </div>


            </div>
        </li>

        <li style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-19219339.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2016/12/04/584411ea43c4a_mini.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-19219339.html" target="_blank">濮阳念桃_</a></div>
                <div class="p-fan-number">关注：<span>35</span>
                    | 粉丝：<span>3291</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="19219339">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="19219339">取消关注
                </div>


            </div>
        </li>

        <li style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-18809830.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2016/07/17/578b8c4f8cd8e_mini.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-18809830.html" target="_blank">难过又怎样我还有颖子</a></div>
                <div class="p-fan-number">关注：<span>82</span>
                    | 粉丝：<span>17945</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="18809830">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="18809830">取消关注
                </div>


            </div>
        </li>

        <li style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-17545511.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2017/08/28/59a3fe4c5e358_mini.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-17545511.html" target="_blank">我是陈苗</a></div>
                <div class="p-fan-number">关注：<span>47</span>
                    | 粉丝：<span>14693</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="17545511">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="17545511">取消关注
                </div>


            </div>
        </li>

        <li style="opacity: 1;">
            <div class="p-fan-img">
                <a href="/user/others-16672078.html" target="_blank">
                    <img class="fan-img lazy" data-original="http://wimg.spriteapp.cn/profile/large/2017/12/14/5a3243aa2a150_mini.jpg" src="http://wimg.spriteapp.cn/profile/"></a>
            </div>
            <div class="p-fan-des">
                <div class="p-fan-name"><a href="/user/others-16672078.html" target="_blank">风雨O7K</a></div>
                <div class="p-fan-number">关注：<span>17</span>
                    | 粉丝：<span>1281</span>
                </div>
                <div class="p-fan-signature">这家伙很懒，神马都木有写</div>
            </div>
            <div class="p-fan-buttons">

                <div class="p-fan-focus j-follow" data-userid="16672078">+ 关注</div>
                <div class="p-fan-focus p-fan-cancel-focus j-un-follow" style="display: none;" data-userid="16672078">取消关注
                </div>


            </div>
        </li></ul>
        </div>
        <div class="loading" id="scrollPageLoading" style="display: block;">
            <div class="loading-c">
                <i class="icon-loading-gif"></i>
            </div>
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
                    </a>
                </div>
                <div class="p-age-mess">
                    <div class="p-age-name">
                        <a href="" class="p-age-netname"></a>
                        <i class="icon-rank"></i>
                        <a href="" class="focus">+ 关注</a>
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

<script src="__static__/Scripts/require.js"></script>

    <script type="text/javascript">
        var INDEXBASEURL = "http://mstatic.spriteapp.cn/xx/1/w3/js/",
                STATICLAZYSRC = "http://mstatic.spriteapp.cn/xx/1/w3/img/lazyload/",
                SHAREID = null;
    </script>

    <script src="__static__/Scripts/personal.page.config.js"></script>



    <!--百分点代码：-->
    <script type="text/javascript">
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

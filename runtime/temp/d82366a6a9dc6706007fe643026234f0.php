<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:55:"/var/www/book/public/../app/admin/view/login/index.html";i:1520903334;s:57:"/var/www/book/public/../app/admin/view/public/header.html";i:1520738488;}*/ ?>
﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>用户登录</title>
    <meta name="keywords" content="后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <!-- css文件 -->
    <link rel="shortcut icon" href="favicon.ico">
    <link href="__static__/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="__static__/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="__static__/css/animate.min.css" rel="stylesheet">
    <link href="__static__/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <!-- js公共文件 -->
     <script src="__static__/js/jquery.min.js?v=2.1.4"></script>
     <script src="__static__/js/bootstrap.min.js?v=3.3.6"></script>
</head>
 <link href="__static__/css/login.min.css" rel="stylesheet">
  <script src="__static__/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="__static__/js/plugins/validate/messages_zh.min.js"></script>
     <script src="__static__/js/plugins/validate/jquery.form.js"></script>
     <link href="__static__/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
     <script src="__static__/js/plugins/sweetalert/sweetalert.min.js"></script>
<script>
        if(window.top!==window.self){window.top.location=window.location};
    </script>
<body class="signin">
    <div class="signinpanel">
        <div class="row">
            <div class="col-sm-7">
                <div class="signin-info">
                    <div class="logopanel m-b">
                        <h1>[好书荐读后台登录系统 ]</h1>
                    </div>
                    <div class="m-b"></div>
                    <h4>欢迎使用 <strong>后台登录系统</strong></h4>
                    <ul class="m-b">
                        <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i>每天进步一点点</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-5">
                <form method="post" action="<?php echo url('login/login'); ?>" id='loginform' name="form">
                    <h4 class="no-margins">登录：</h4>
                    <p class="m-t-md">登录到好书荐读后台</p>
                    <input type="text" class="form-control uname" placeholder="用户名"  name="username"/>
                    <input type="password" class="form-control pword m-b" placeholder="密码"  name="password"/>
                    <input type="text" class="form-control uname m-b" placeholder="验证码"  name="captcha"/>
                    <img alt="" src="<?php echo captcha_src(); ?>" id='code'>
                    <a href="#">忘记密码了？</a>
                    <button class="btn btn-success btn-block">登录</button>
                </form>
            </div>
        </div>
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2015 All Rights Reserved. H+
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(function(){
    	$("img[id='code']").click(function(){
    		var src=$("img[id='code']");
    		src.attr('src',src.attr('src')+'?'+new Date().getTime);
    		});

    	$("#loginform").validate({
    		rules:{
    			username:{
    				required:true,
    				maxlength:16,
    			},
    			password:{
    				required:true,
    				maxlength:16
    			},
    			captcha:{
    				required:true,
    				maxlength:16
    			},
    		},
    		  messages: {
    			  username: {
                      required: "请输入用户名",
                  },
                  password: {
                      required: "请输入密码",
                  },
                  captcha: {
                      required: "请输入验证码",
                  },
              },
    		onkeyup:false,
    		focusCleanup:true,
    		submitHandler:function(form){
    			$(form).ajaxSubmit({success: function(data){
    				if(data.code==200){
   					 swal({
   			        	  title: "登录成功！",
   						  text: "正在跳转...",
   						  type: "success",
   						  timer: 2000,
   			        }, function () {
   			        	window.location=data.url;
   			        });
    				}else{
    					sweetAlert("哎呦……", data.msg,"error");
    				}
    			}});
    			}
    	});

    })
    </script>
    <script type="text/javascript">
    </script>

</body>
</html>

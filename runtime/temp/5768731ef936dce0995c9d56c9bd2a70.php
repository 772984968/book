<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:58:"/var/www/book/public/../app/admin/view/index/outerror.html";i:1520738488;s:57:"/var/www/book/public/../app/admin/view/public/header.html";i:1520738488;}*/ ?>
<!DOCTYPE html>
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
<link href="__static__/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
<script src="__static__/js/plugins/sweetalert/sweetalert.min.js"></script>
<script src="__static__/plugins/layui/layui.js"></script>
<body class="signin">
    <script type="text/javascript">
    $(function(){
    	 swal({
	        	  title: "权限不足",
				  text: "正在跳转...",
				  type: "error",
				  timer: 2000,
	        }, function () {
	        	var index = parent.layer.getFrameIndex(window.name);
				parent.layer.close(index);
	        });
    })
    </script>
    <script type="text/javascript">
    </script>

</body>
</html>
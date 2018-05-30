<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:54:"/var/www/book/public/../app/book/view/index/login.html";i:1521299821;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="__static__/Css/user.css">
    <link rel="stylesheet" href="__static__/Css/index.css">
     <link rel="stylesheet" href="__static__/Css/ui.css">
     <script type="text/javascript" src="__static__/layui/layui.all.js"></script>
     <script src="__static__/Scripts/jquery.min.js"></script>
     <script type="text/javascript">
     layui.use('form', function(){
       var form = layui.form;
       //监听提交
       form.on('submit(login)', function(formdata){
    		  var url=$('.layui-form').attr('action');
    		  $.ajax({
    			  url:url,
    			type:'POST',
    			dataType:'json',
    			data:formdata.field,
    			 success:function(data){
    				 if(data.code=='200'){
    						layer.msg(data.msg,{icon:1,time:1*1000},function() {
                                var index = parent.layer.getFrameIndex(window.name);
                                window.parent.location.reload();
                                parent.layer.close(index);
                              });
    					}else{
    						layer.msg(data.msg,{icon:5});

    					}
    	         },
    	         error:function(data){
    	        	 layer.msg('数据发送失败',{icon:5});
    	         }

    		  });
	     	  return false;
       });

     });
     </script>
     <script type="text/javascript">

     function register(){
    	 layer.open({
   		  type: 2,
   		  skin: 'layui-layer-rim', //加上边框
   		  area: ['1000px', '650px'], //宽高
   		  content:["<?php echo url('index/register'); ?>", 'no']
   		});
    	 //parent.layer.close(index)
     }

     </script>
</head>
<body>
<div class="j-ui-dialog j-regist j-login" id="login">
    <div class="j-ui-dialog-header">
        <div class="j-u-d-h-title">登录</div>
        <span class="j-u-d-h-close" id="jLoginDCle"></span>
    </div>
    <div class="j-ui-dialog-c">
        <div class="j-u-d-c-l">
            <form action="<?php echo url('index/login'); ?>" id="ffLogin" method="post" class="layui-form">
                <div class="j-u-d-c-one j-u-d-c-spe">
                    <div class="j-u-d-c-phone j-u-c-input">
                            <span class="j-u-d-c-p-tit">账&nbsp;&nbsp;&nbsp;&nbsp;号 |  </span>
                            <input id="txtUserName" name="username" type="text" placeholder="手机号" class="j-u-d-c-p-con">
                    </div>
                </div>
                <div class="j-u-d-c-one">
                    <div class="j-u-d-c-phone j-u-c-input">
                        <span class="j-u-d-c-p-tit">密&nbsp;&nbsp;&nbsp;&nbsp;码 |  </span><input id="txtUserPwd" name="password" type="password" placeholder="请输入密码" class="j-u-d-c-p-con">
                    </div>
                </div>
<!--
                <div class="j-u-d-agreement">
                    <label class="remind-me" id="jRemindMe">
                        <span class="icon-checkbox "></span>
                        &nbsp;&nbsp;姐，记住我
                    </label>
                    <a class="forget-password" id="jForgetPwd">忘记密码</a>
                </div>
                 -->
                   <button lay-submit lay-filter="login" class="j-u-d-submit">立即提交</button>
            </form>
        </div>
        <div class="j-u-d-c-r">
            <div class="joint-login">
                <span class="j-u-d-icon-joint-login-des">合作账号登陆</span>
                <ul>
                    <li>
                        <a href="#">
                            <span class="joint-login-xinlang"></span>
                            <span class="joint-login-tit">新浪微博</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="joint-login-xinlang joint-login-qq"></span>
                            <span class="joint-login-tit">QQ</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="j-u-d-c-r-login">
                <span class="j-u-d-icon-regist-des">还没有账号?</span>
                <span class="j-u-d-c-icon-login" id="jR_L_Register" onclick="register();">注册</span>
            </div>
        </div>
    </div>
</div>
</body>
</html>
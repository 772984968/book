<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:57:"/var/www/book/public/../app/book/view/index/register.html";i:1521276333;}*/ ?>
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
$(document).ready(function () {
	//更新验证码
	$("img[id='jRegVCodeImg']").click(function(){
		var src=$("img[id='jRegVCodeImg']");
		src.attr('src',src.attr('src')+'?'+new Date().getTime);
		});
});
</script>
     <script type="text/javascript">
     layui.use('form', function(){
       var form = layui.form;
       //监听提交
       form.on('submit(register)', function(formdata){
    		  var url=$('.layui-form').attr('action');
    		  $.ajax({
    			  url:url,
    			type:'POST',
    			dataType:'json',
    			data:formdata.field,
    			 success:function(data){
    				 if(data.code=='200'){
    						layer.msg(data.msg,{icon:1,time:1*1000},function(){
    							var index = parent.layer.getFrameIndex(window.name);
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
     function login(){
    		layer.open({
    		  type: 2,
    		  skin: 'layui-layer-rim', //加上边框
    		  area: ['1000px', '510px'], //宽高
    		  content:["<?php echo url('index/login'); ?>", 'no']
    		});
    	}


     </script>
</head>
<body>
<div class="j-ui-dialog j-regist" id='register'>
    <div class="j-ui-dialog-header">
        <div class="j-u-d-h-title">注册 我要做书粉</div>
        <span class="j-u-d-h-close" id="jRegisterDCle"></span>
    </div>
    <div class="j-ui-dialog-c">
        <div class="j-u-d-c-l">
            <form action="<?php echo url('index/register'); ?>" id="ffRegister" novalidate="novalidate" method="post" class="layui-form">
                <div class="j-u-d-c-one j-u-d-c-spe j-u-d-c-register">
                    <div class="j-u-d-c-phone j-u-c-input">
                        <span class="j-u-d-c-p-tit">手机号 |  </span><input type="text" placeholder="请输入手机号" class="j-u-d-c-p-con" name="username" id="txtUserRegistTelephone">
                    </div>
                </div>
                <div class="j-u-d-c-one j-u-d-c-register">
                    <div class="j-u-d-c-phone j-u-c-input">
                        <span class="j-u-d-c-p-tit">密&nbsp;&nbsp;&nbsp;&nbsp;码 |  </span><input type="password" placeholder="请输入密码" class="j-u-d-c-p-con" name="password" id="txtUserRegistPwd">
                    </div>
                </div>
                <div class="j-u-d-c-one j-u-d-c-register">
                    <div class="j-u-d-c-phone j-u-c-input">
                        <span class="j-u-d-c-p-tit">用户名 |  </span><input type="text" placeholder="用户名" class="j-u-d-c-p-con" name="name" id="txtUserRegistName">
                    </div>
                </div>
       <div class="j-u-d-c-one j-u-d-c-two j-u-d-c-register"><div class="j-u-d-c-phone j-u-d-fl j-u-c-input"><span class="j-u-d-c-p-tit">图片验证码 |  </span><input type="text" placeholder="请输入右边图片中的字符" class="j-u-d-c-p-con" name="captcha" id="txtRegVCode"></div><div id="jRegVCode" class="j-u-d-c-vcode"><img id="jRegVCodeImg" alt="验证码" src="<?php echo captcha_src(); ?>" onclick="javascript:changeimg();"><a style="display: block; text-decoration: underline;">点击更换验证码</a></div></div>
               <button class="j-u-d-submit" lay-submit lay-filter="register">提交</button>
            </form>
        </div>
        <div class="j-u-d-c-r">
            <div class="j-u-d-c-r-login">
                <span class="j-u-d-icon-login-des">已有账号?</span>
                <span class="j-u-d-c-icon-login" id="jR_R_Login" onclick="login();">登录</span>
            </div>
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
        </div>
    </div>
</div>
</body>
</html>
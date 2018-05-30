<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:52:"/var/www/book/public/../app/admin/view/role/add.html";i:1520738488;}*/ ?>
<!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/form_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:19:15 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - 基本表单</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="__static__/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="__static__/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="__static__/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="__static__/css/animate.min.css" rel="stylesheet">
    <link href="__static__/css/style.min862f.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">

            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>添加角色</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="form_basic.html#">选项1</a>
                                </li>
                                <li><a href="form_basic.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form class="form-horizontal" method="post" action="<?php echo url('role/add'); ?>" id="form-admin-role-add">
                            <p>添加管理员角色(⊙o⊙)</p>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">角色名称：</label>

                                <div class="col-sm-8">
                                    <input type="text" placeholder="请填写角色名称" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">备注：</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="角色描述" class="form-control" name="remark">
                                </div>
                            </div>
                               <div class="form-group">
                                <label class="col-sm-3 control-label">状态：</label>
                                <div class="col-sm-8">
                                <input type="radio" name="state" value="1" checked="checked">正常<input type="radio" name="state" value="0">禁用
                                </div>
                            </div>
                            <div class="form-group">
                             <label class="col-sm-3 control-label">权限管理：</label>
                            <div class="col-sm-offset-3 col-sm-8">
<?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<dl class="permission-list">
					<dt>
							<span style="font-size: 15px;"><?php echo $vo['title']; ?></span>
							<input type="checkbox" value="<?php echo $vo['id']; ?>" name="access_ids[]">

					</dt>
			<?php if(is_array($vo['son']) || $vo['son'] instanceof \think\Collection || $vo['son'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?>
					<dd>
						<dl class="cl permission-list2 dl-horizontal">
							<dt>
								<?php echo $voo['title']; ?>
									<input type="checkbox" value="<?php echo $voo['id']; ?>" name="access_ids[]" >

							</dt>
							<dd>
<?php if(is_array($voo['son']) || $voo['son'] instanceof \think\Collection || $voo['son'] instanceof \think\Paginator): $i = 0; $__LIST__ = $voo['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vooo): $mod = ($i % 2 );++$i;?>
									<?php echo $vooo['title']; ?>
									<input type="checkbox" value="<?php echo $vooo['id']; ?>" name="access_ids[]">

<?php endforeach; endif; else: echo "" ;endif; ?>
							</dd>
						</dl>
					</dd>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</dl>
<?php endforeach; endif; else: echo "" ;endif; ?>
                             </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-8">
                                    <button class="btn btn-bg btn-white" type="submit" lay-filter="formDemo" onclick="ajaxsubmit();">添加</button>
                                      <button class="btn btn-bg btn-white" type="reset">重置</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="__static__/js/jquery.min.js?v=2.1.4"></script>
    <script src="__static__/js/bootstrap.min.js?v=3.3.6"></script>
     <script src="__static__/plugins/layui/layui.all.js"></script>
     <script src="__static__/js/plugins/validate/jquery.validate.min.js"></script>
     <script src="__static__/js/plugins/validate/messages_zh.min.js"></script>
     <script src="__static__/js/plugins/validate/jquery.form.js"></script>
<script type="text/javascript">
$(function(){
	$(".permission-list dt input:checkbox").click(function(){
		$(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
	});
	$(".permission-list2 dd input:checkbox").click(function(){
		var l =$(this).parent().parent().find("input:checked").length;
		var l2=$(this).parents(".permission-list").find(".permission-list2 dd").find("input:checked").length;
		if($(this).prop("checked")){
			$(this).closest("dl").find("dt input:checkbox").prop("checked",true);
			$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",true);
		}
		else{
			if(l==0){
				$(this).closest("dl").find("dt input:checkbox").prop("checked",false);
			}
			if(l2==0){
				$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",false);
			}
		}
	});


	$("#form-admin-role-add").validate({
		rules:{
			name:{
				required:true,
			},
			remark:{
				required:true,
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit({success: function(data){
				if(data.code=='200'){
					layer.msg(data.msg,{icon:1,time:1*1000},function(){
						var index = parent.layer.getFrameIndex(window.name);
						parent.layer.close(index);
					});
				}else{
					layer.msg(data.msg,{icon:5});

				}
				 $(form).resetForm(); // 提交后重置表单
			}});

		}
	});

});
</script>
</body>
</html>

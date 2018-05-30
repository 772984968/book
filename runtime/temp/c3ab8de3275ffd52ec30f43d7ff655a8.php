<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"/var/www/book/public/../app/admin/view/./template/add.html";i:1520760648;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>菜单列表</title>
<meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
<meta name="description"
	content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
<link href="__static__/plugins/layui/css/layui.css" rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico">
<script src="__static__/js/jquery.min.js?v=2.1.4"></script>
<script src="__static__/plugins/layui/layui.js"></script>
</head>

<body>
<div class="layui-container"layui-bg-gray>
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
  <legend><?php echo $data['config']['add']['title']; ?></legend>
</fieldset>
<form class="layui-form" action="<?php echo url($data['config']['add']['url']); ?>" method="post">
			<?php if(is_array($data['option']) || $data['option'] instanceof \think\Collection || $data['option'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['option'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;switch($name=$vo['html']): case "password": ?>
				<!-- password -->
				 <div class="layui-form-item">
				    <label class="layui-form-label"><?php echo $vo['title']; ?></label>
				    <div class="layui-input-inline">
				      <input type="password" name="<?php echo $vo['key']; ?>" lay-verify="" placeholder="请输入密码" autocomplete="off" class="layui-input">
				    </div>
				    <div class="layui-form-mid layui-word-aux">辅助文字</div>
				  </div>
			<?php break; ?>
			<!-- select -->
			<?php case "select": ?>
			<div class="layui-form-item">
				<label class="layui-form-label"><?php echo $vo['title']; ?></label>
				<div class="layui-input-inline">
					<select name="<?php echo $vo['key']; ?>" lay-verify="">
					 <?php if(is_array($vo['option']) || $vo['option'] instanceof \think\Collection || $vo['option'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['option'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$select): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo $select['id']; ?>"><?php echo $select['name']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</div>
			</div>
			<?php break; ?>
			<!-- radio -->
	<?php case "radio": ?>
			<div class="layui-form-item">
				<label class="layui-form-label"><?php echo $vo['title']; ?></label>
				<div class="layui-input-block">
					<?php if(is_array($vo['option']) || $vo['option'] instanceof \think\Collection || $vo['option'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['option'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$radio): $mod = ($i % 2 );++$i;?> <input type="radio"
						name="<?php echo $vo['key']; ?>" value="<?php echo $radio['id']; ?>"
						title="<?php echo $radio['name']; ?>" <?php if(!(empty($radio['check']) || (($radio['check'] instanceof \think\Collection || $radio['check'] instanceof \think\Paginator ) && $radio['check']->isEmpty()))): ?>
						checked="checked"<?php endif; ?>> <?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<?php break; ?>
<!-- date -->
<?php case "date": ?>
			<div class="layui-form-item">
				<label class="layui-form-label"><?php echo $vo['title']; ?></label>
				<div class="layui-input-block">
					<div class="layui-input-inline">
						<input class="layui-input" id="date" placeholder="yyyy-MM-dd"
							type="text" name="<?php echo $vo['key']; ?>">
					</div>
				</div>
			</div>
			<?php break; ?>
<!-- checkbox -->
<?php case "checkbox": ?>
 <div class="layui-form-item">
    <label class="layui-form-label"><?php echo $vo['title']; ?></label>
    <div class="layui-input-block">
    	<?php if(is_array($vo['option']) || $vo['option'] instanceof \think\Collection || $vo['option'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['option'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$checkbox): $mod = ($i % 2 );++$i;?>
      <input type="checkbox" name="<?php echo $vo['key']; ?>[]" title="<?php echo $checkbox['name']; ?>"
      <?php if(!(empty($checkbox['check']) || (($checkbox['check'] instanceof \think\Collection || $checkbox['check'] instanceof \think\Paginator ) && $checkbox['check']->isEmpty()))): ?>
	  checked="checked"
	  <?php endif; ?> value="<?php echo $checkbox['id']; ?>" >
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
  </div>
  <?php break; ?>
<!-- 开关 -->
<?php case "switch": ?>
 <div class="layui-form-item">
    <label class="layui-form-label"><?php echo $vo['title']; ?></label>
    <div class="layui-input-block">
      <input type="checkbox" name="<?php echo $vo['key']; ?>" lay-skin="switch" checked>
    </div>
  </div>
  <?php break; case "textarea": ?>
  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">文本域</label>
    <div class="layui-input-block">
      <textarea name="desc" placeholder="请输入内容" class="layui-textarea"></textarea>
    </div>
  </div>
  <?php break; default: ?>
	<div class="layui-form-item">
    <label class="layui-form-label"><?php echo $vo['title']; ?></label>
    <div class="layui-input-block">
      <input type="text" name="<?php echo $vo['key']; ?>" lay-verify=""  value="<?php echo $vo['value']; ?>"   <?php if(!(empty($vo['option']['placeholder']) || (($vo['option']['placeholder'] instanceof \think\Collection || $vo['option']['placeholder'] instanceof \think\Paginator ) && $vo['option']['placeholder']->isEmpty()))): ?>
			placeholder="<?php echo $vo['option']['placeholder']; ?>"
	  <?php endif; ?> autocomplete="off" class="layui-input">
    </div>
  </div>
			<?php endswitch; endforeach; endif; else: echo "" ;endif; ?>
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
      <button type="reset" class="layui-btn layui-btn-primary">重置</button>

    </div>
  </div>
</form>
  </div>
<script>
layui.use('form', function(){
  var form = layui.form;
  //监听提交
  form.on('submit(formDemo)', function(formdata){
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
<!--== 日期选择器== -->
<script>
layui.use('laydate', function(){
  var laydate = layui.laydate;
  //执行一个laydate实例
  laydate.render({
    elem: '#datetime', //指定元素
	type:'datetime'
  });
  //执行一个laydate实例
  laydate.render({
    elem: '#date', //指定元素
	type:'date'
  });
});
</script>
</body>
</html>
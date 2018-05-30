<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:55:"/var/www/book/public/../app/admin/view/review/edit.html";i:1521287054;}*/ ?>
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
  <legend></legend>
</fieldset>
  </div>
  <form class="layui-form" action="<?php echo url('review/edit'); ?>" method="post">
  <div class="layui-form-item">
    <label class="layui-form-label">ID</label>
    <div class="layui-input-block">
      <input type="text" name="id"  class="layui-input" value="<?php echo $data['detail_id']; ?>" disabled="disabled">

    </div>
  </div>
    <div class="layui-form-item">
    <label class="layui-form-label">发布用户</label>
    <div class="layui-input-block">
      <input type="text" name="name"  class="layui-input" value="<?php echo $data['name']; ?>" disabled="disabled">

    </div>
  </div>
    <div class="layui-form-item">
    <label class="layui-form-label">标题</label>
    <div class="layui-input-block">
      <input type="text" name="biaoti"  class="layui-input" value="<?php echo $data['biaoti']; ?>" disabled="disabled">

    </div>
  </div>
    <div class="layui-form-item">
    <label class="layui-form-label">发布时间</label>
    <div class="layui-input-block">
      <input type="text" name="date"  class="layui-input" value="<?php echo $data['date']; ?>" disabled="disabled">

    </div>
  </div>
    <div class="layui-form-item">
    <label class="layui-form-label">类型</label>
    <div class="layui-input-block">
      <input type="text" name="type"  class="layui-input" value="<?php echo $data['type_id']; ?>" disabled="disabled">

    </div>
  </div>
    <div class="layui-form-item">
    <label class="layui-form-label">资源详情</label>
    <div class="layui-input-block">
   <?php switch($data['type_id']): case "1": ?><embed src="<?php echo $data['src']; ?>"><?php break; case "2": ?><img src="<?php echo $data['src']; ?>" width="300"><?php break; case "4": ?>
     <img src="<?php echo $data['src']; ?>" width="300">
      <audio controls="controls" height="100" width="100">
							<source src="<?php echo $data['voice']; ?>" type="audio/mp3" />
							<source src="song.ogg" type="audio/ogg" />
							<embed height="100" width="100" src="<?php echo $data['voice']; ?>" />
							</audio><?php break; default: ?> <textarea rows="" cols=""><?php echo $data['biaoti']; ?></textarea>
<?php endswitch; ?>
    </div>
  </div>

  <div class="layui-form-item">
    <div class="layui-input-block">
      <button class="layui-btn" lay-submit lay-filter="formDemo">审核通过</button>
      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
  </div>
</form>

<script>
//Demo
layui.use('form', function(){
  var form = layui.form;
  //监听提交
  form.on('submit(formDemo)', function(data){
	  var url=$('.layui-form').attr('action');
	  $.ajax({
		  url:url,
		type:'POST',
		dataType:'json',
		data:data.field,
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
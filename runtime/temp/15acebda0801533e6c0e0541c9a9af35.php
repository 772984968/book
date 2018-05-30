<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:56:"/var/www/book/public/../app/admin/view/review/index.html";i:1521268585;}*/ ?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['config']['bars']['title']; ?></title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
      <link rel="shortcut icon" href="favicon.ico"> <link href="__static__/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="__static__/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="__static__/css/animate.min.css" rel="stylesheet">
    <link href="__static__/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <link href="__static__/plugins/layui/css/layui.css" rel="stylesheet">
    <script src="__static__/plugins/layui/layui.all.js"></script>
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><?php echo $data['config']['bars']['title']; ?></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="table_data_tables.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="table_data_tables.html#">选项1</a>
                                </li>
                                <li><a href="table_data_tables.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                    <?php if(!(empty($data['config']['add']['url']) || (($data['config']['add']['url'] instanceof \think\Collection || $data['config']['add']['url'] instanceof \think\Paginator ) && $data['config']['add']['url']->isEmpty()))): ?>
                        <div class="">
                            <a onclick="layer_show('<?php echo $data['config']['add']['title']; ?>','<?php echo url($data['config']['add']['url']); ?>')" href="javascript:void(0);" class="btn btn-primary glyphicon glyphicon-plus "><?php echo $data['config']['add']['title']; ?></a>
                        </div>
  					 <?php endif; if(!(empty($data['search']) || (($data['search'] instanceof \think\Collection || $data['search'] instanceof \think\Paginator ) && $data['search']->isEmpty()))): ?>
                     <div class="demoTable">  搜索：
 <div class="layui-input-inline" >
					<select name="search" lay-verify="" class="layui-input">
					<?php if(is_array($data['search']) || $data['search'] instanceof \think\Collection || $data['search'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['search'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo $vo['field']; ?>"><?php echo $vo['name']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
</div>
  <div class="layui-inline">
    <input class="layui-input" name="id" id="demoReload" autocomplete="off">
  </div>
 <button class="layui-btn" data-type="reload">搜索</button>

</div>
 <?php endif; if(!(empty($data['config']['delall']['url']) || (($data['config']['delall']['url'] instanceof \think\Collection || $data['config']['delall']['url'] instanceof \think\Paginator ) && $data['config']['delall']['url']->isEmpty()))): ?>
   <div  class="layui-btn-group demoTable2">
   <button class="layui-btn layui-btn-danger" data-type="getCheckData"><?php echo $data['config']['delall']['title']; ?></button>
   </div>
 <?php endif; ?>
                        <table class="layui-hide" id="demo" lay-filter="basedemo"></table>
<script type="text/html" id="barDemo">
                  <!--  <a class="layui-btn layui-btn-primary layui-btn-xs lay-event="detail">查看</a>-->
                   <?php if(!(empty($data['config']['edit']['url']) || (($data['config']['edit']['url'] instanceof \think\Collection || $data['config']['edit']['url'] instanceof \think\Paginator ) && $data['config']['edit']['url']->isEmpty()))): ?>
  <a class="layui-btn layui-btn-xs" lay-event="edit">审核</a>
 <?php endif; if(!(empty($data['config']['del']['url']) || (($data['config']['del']['url'] instanceof \think\Collection || $data['config']['del']['url'] instanceof \think\Paginator ) && $data['config']['del']['url']->isEmpty()))): ?>
                    <a class="layui-btn layui-btn-xs layui-btn-danger  layui-btn-mini" lay-event="del">删除</a>
	 <?php endif; ?>
</script>
                </div>
            </div>
        </div>
    </div>
    <script src="__static__/js/jquery.min.js?v=2.1.4"></script>
    <script src="__static__/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="__static__/js/content.min.js?v=1.0.0"></script>

<script type="text/javascript">
function layer_show(title,url){
    layer.open({
        type: 2,//类型
        title: title,
        anim: 4,//打开方式
        maxmin: true, //开启最大化最小化按钮
        area: ['600px', '500px'],
        content:url
      });

}
</script>
<script>
layui.use('table', function(){
  var table = layui.table;
  //监听工具条
  table.on('tool(basedemo)', function(obj){
    var data = obj.data;
    if(obj.event === 'detail'){
      layer.msg('ID：'+ data.id + ' 的查看操作');
    } else if(obj.event === 'del'){
      layer.confirm('真的删除行么', function(index){
    	   <?php if(!(empty($data['config']['del']['url']) || (($data['config']['del']['url'] instanceof \think\Collection || $data['config']['del']['url'] instanceof \think\Paginator ) && $data['config']['del']['url']->isEmpty()))): ?>
    	  //向服务端发送删除指令
    	  $.ajax({
    	    url:"<?php echo url($data['config']['del']['url']); ?>",
    		type:'POST',
    		dataType:'json',
    		data:{
    			id:data.id
    		},
    		 success:function(data){
    			 if(data.code=='200'){
    					layer.msg(data.msg,{icon:1,time:1*1000},function(){
    						  obj.del();
    					layer.close(index);
    					});
    				}else{
    					layer.msg(data.msg,{icon:5});

    				}
             },
             error:function(data){
            	 layer.msg('数据发送失败',{icon:5});
             }

    	  });
    	  <?php endif; ?>

      });
    } else if(obj.event === 'edit'){
    	  <?php if(!(empty($data['config']['edit']['url']) || (($data['config']['edit']['url'] instanceof \think\Collection || $data['config']['edit']['url'] instanceof \think\Paginator ) && $data['config']['edit']['url']->isEmpty()))): ?>
    	layer_show("<?php echo $data['config']['edit']['title']; ?>","<?php echo url($data['config']['edit']['url']); ?>"+'?'+'id='+data.id)
    	    //  layer.alert('编辑行：<br>'+ JSON.stringify(data))
    	     <?php endif; ?>
    }
  });
  <?php if(!(empty($data['config']['delall']['url']) || (($data['config']['delall']['url'] instanceof \think\Collection || $data['config']['delall']['url'] instanceof \think\Paginator ) && $data['config']['delall']['url']->isEmpty()))): ?>
  //批量删除
   $('.demoTable2 .layui-btn').on('click', function(){
	   var checkStatus = table.checkStatus('testReload')
	      ,data = checkStatus.data;
	   if(data!=''){
	      $.ajax({
	    	    url:"<?php echo url($data['config']['delall']['url']); ?>",
	    		type:'POST',
	    		dataType:'json',
	    		data:{
	    			data:JSON.stringify(data),
	    		},
	    		 success:function(data){
	    			 if(data.code=='200'){
	    					layer.msg(data.msg,{icon:1,time:1*1000},function(){
	    					location.replace(location.href);
	    					layer.close(index);
	    					});
	    				}else{
	    					layer.msg(data.msg,{icon:5});

	    				}
	             },
	             error:function(data){
	            	 layer.msg('数据发送失败',{icon:5});
	             }

	    	  });
	   }

	  });
   <?php endif; ?>
  //搜索重载
  $('.demoTable .layui-btn').on('click', function(){
	 var options=$("select[name='search']").val();
	  var values=$("#demoReload").val();
	  //方法重载
	    table.reload('testReload', {
	      where: {
	       //设定异步数据接口的额外参数，任意设
			[options]:values,
	      }
	      ,page: {
	        curr: 1 //重新从第 1 页开始
	      }
	    });
	  });

  //展示已知数据
  table.render({
    elem: '#demo'
     ,cellMinWidth: 80 //全局定义常规单元格的最小宽度，layui 2.2.1 新增
     ,url:'<?php echo url($data['config']['bars']['url']); ?>'
     //,width:1000//表格宽度
    ,cols:<?php echo $data['title']; ?>
  	,id:'testReload'
    //,skin: 'line' //表格风格
    ,even: true
    ,page: true //是否显示分页
    //,limits: [5, 7, 10]
    ,limit: 10 //每页默认显示的数量
    ,loading:true//是否出现加载条

  });
});
</script>
</body>
</html>

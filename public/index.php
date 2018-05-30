<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../app/');
define('CONF_PATH', __DIR__ . '/../app/conf/');//定义配置文件
define('EXTEND_PATH',__DIR__.'/../app/lib/');
define('HUANG_JING',1);//配置环境：1本地环境2测试环境3正式环境
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';

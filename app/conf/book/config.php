<?php
return
[
   // 控制器类后缀
    'controller_suffix'      =>'Controller',
    'view_replace_str'       => ['__static__'=>'/book'],
    //数据缓存方式
    'cache' =>  [
        // 使用复合缓存类型
        'type'  =>  'complex',
        // 默认使用的缓存
        'default'   =>  [
            // 驱动方式
            'type'   => 'File',
            // 缓存保存目录
            'path'   => CACHE_PATH,
        ],
        // 文件缓存
        'file'   =>  [
            // 驱动方式
            'type'   => 'file',
            // 设置不同的缓存保存目录
            'path'   => RUNTIME_PATH . 'file/',
        ],
        // redis缓存
        'redis'   =>  [
            // 驱动方式
            'type'   => 'redis',
            // 服务器地址
            'host'       => '127.0.0.1',
            //端口号
            'port'       => 6379,
            // 密码
            'password'   => '123456',

            'timeout'=> 0,
            //选择数据库
            'select'=>2,
        ],
    ],
    //分页配置
    'paginate'               => [
        'type'      => 'app\lib\page\BookPage',
        'var_page'  => 'page',
        'list_rows' => 15,
    ],
    // URL伪静态后缀
    'url_html_suffix'        => '',
];
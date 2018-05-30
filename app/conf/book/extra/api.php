<?php
return [
    //不需要登录可操作性的方法
    'noLogin'=>[
      'User/login',
      'Msg/sendregister',
      'Msg/sendfindpassoword',

    ],
    //需要验证权限的方法
   'check'=>[
    'Index/index',
    'User/logout',
   ],
];
<?php
namespace app\lib\factory;
/**
 *工厂类
 */
class  Factory{
    private  $UserModel;
    //静态变量保存全局实例
    private static $_instance = null;
    //私有构造函数，防止外界实例化对象
    private function __construct() {

    }
    //私有克隆函数，防止外办克隆对象
    private function __clone() {
    }
    //静态方法，单例统一访问入口
    static public function getInstance() {
        if (is_null ( self::$_instance )||!isset(self::$_instance)) {
            self::$_instance = new self ();
        }
        return self::$_instance;
    }
    //用户类
    public function getUser($userId=''){
        if (!$this->UserModel){
            $this->UserModel= \app\common\model\User::get(['id'=>$userId]);
            if (!$this->UserModel){
                return false;
            }
            $this->UserModel->loginKey = $userId;
            return $this->UserModel;
        }
        return $this->UserModel;
    }
    //权限认证类
    public static function getRbac(){
        return   new \app\lib\auth\Rbac;
    }
    //cURl类
    public static function getCurl(){
        return   new \app\lib\https\Curl;
    }
    //upload类
    public  function getUpload($fileInfo){
        return   new \app\lib\upload\Upload($fileInfo);
    }

}
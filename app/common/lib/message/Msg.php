<?php
namespace app\common\lib\message;
use app\common\model\User;
use think\Cache;
use app\common\lib\send\Wysms;
//短信验证类
class Msg{

    public $username; // 帐号
    public $userIp; // Ip
    public $validMinute = 3*60; // 短信有效时间(秒)
    public $validSecond = 60; // 短信允许发送间隔(秒)
    public $validCount = 10; // 当天发送短信的限制次数
    public $error = ''; // 错误信息
    const REGISTER_NAME = 'register_name_msg';//注册验证码 【缓存名称】
    const REGISTER_CODE = 'register_code_msg'; //找回密码短信验证码错误 【缓存名称】
    const FIND_NAME = 'find_msg'; // 注册记录【缓存名称】
    const FIND_CODE = 'find_code_msg'; // 查找密码记录【缓存名称】
    const IP_CODE = 'ip_code_msg'; //注册Ip

    //检测用户名
    public function validateUsername()
    {
        if (User::get([
            'username' => $this->username
        ])) {
            $this->error = '账号已经存在';
            return false;
        }
        return true;
    }


    //检测发送次数
    public function checkSendNumber($key)
    {
        $redis = Cache::store('redis')->handler();
        // 不存在
        if (! $redis->exists($key)) {
            return true;
        }
        // 判断发送时间
        $Last_time = $redis->lindex($key, 0);
        if ((time() - $Last_time) <= $this->validSecond) {
            $this->error = $this->validSecond . '秒内验证码不能重复发送';
            return false;
        }
        // 判断当天发送次数
        $leng = $redis->llen($key);
        if ($leng > $this->validCount) {
            $this->error = '当日发送的次数太多了，请24小时后重试';
            return false;
        }
        // 判断Ip发送次数
        $leng = $redis->llen(self::IP_CODE . $this->username);
        if ($leng > $this->validCount) {
            $this->error = '该设备当日发送的次数太多了，请24小时后重试';
            return false;
        }
        return true;
    }

    //用户注册
    public function register()
    {
        if ($this->validateUsername() && $this->checkSendNumber(self::REGISTER_NAME . $this->username)) {
           //线上环境
            if (HUANG_JING>1){
                $code=Wysms::sendTemplate($this->username,'3055548',random_int(100000,999999));
                if (!$code){
                    // 发送失败
                    $this->error='发送失败';
                    return false;
                }
            }else{
                $code='666666';
            }
            $redis = Cache::store('redis')->handler();
            $this->addRedis(self::REGISTER_NAME.$this->username);
            //缓存验证码
            $redis->set(self::REGISTER_CODE.$this->username,$code);
            $redis->expire(self::REGISTER_CODE.$this->username,$this->validMinute);
            return true;
        }
       else {
            // 发送失败
            return false;
        }
    }

    //添加短信记录
    public  function addRedis($key){

       //缓存手机记录
        $redis = Cache::store('redis')->handler();
        $redis->lpush($key,time());
        $redis->expire($key,24*60*60);
       //缓存Ip记录
       $redis->lpush(self::IP_CODE.$this->username,$this->userIp);
       $redis->expire(self::IP_CODE.$this->username,24*60*60);
    }
    // 取短注册信验证码
    public static function getRegisterNote($username)
    {
        return Cache::store('redis')->handler()->get(self::REGISTER_CODE.$username);

    }
    // 取短找回密码信验证码
    public static function getFindpasswordNote($username)
    {
        return Cache::store('redis')->handler()->get(self::FIND_CODE.$username);

    }
    public function findPassword()
    {
        if ($this->validateUsername() && $this->checkSendNumber(self::FIND_NAME . $this->username)) {
            if (HUANG_JING>1){
            $code=Wysms::sendTemplate($this->username,'3090032',random_int(100000,999999));
            if (!$code){
                // 发送失败
                $this->error='发送失败';
                return false;
            }
            }else{
                $code='666666';
            }
            $redis = Cache::store('redis')->handler();
            $this->addRedis(self::FIND_NAME.$this->username);
            //缓存验证码
            $redis->set(self::FIND_CODE.$this->username,$code);
            $redis->expire(self::FIND_CODE.$this->username,$this->validMinute);
            return true;
        }
        else {
            // 发送失败
            return false;
        }
    }
}
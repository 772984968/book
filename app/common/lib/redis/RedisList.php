<?php
namespace app\common\lib\redis;
/**
 *
 * @author Administrator
 * Redist 列表类
 *
 */
class RedisList {
   public $redis='';//redis实例

    //检测列表，一定时间内的数量
    public function checkTimeNumber($key,$time){
        $key=$this->redis->

    }


/**
 * 检查最近的操作是否在一定的时间内
 * @param  $key 键值
 * @param $time给定的时间秒
 * @return boolean
 */
    public  function checkTime($key,$time){
        $key = $this->redis->get($key);
        if (! $key) {
            return false;
        }
        if ((time() - $key) > $time) {
            return false;
        }
        return true;
    }


}

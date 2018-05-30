<?php
namespace app\lib\https;
/**
 *
 *curl封装类
 *
 */
class  Curl {

    const APP_KEY = '1afd0cff01e8f89a6f7f1655905c0d67';
    const APP_SECRET = 'ff28807bcae3';
/**
 *  get方式模拟请求
 * @param unknown $url
 * @param unknown $data
 * @return number[]|number[]|unknown[]
 */
   public function sendGet($url,$data){
       $ch=curl_init($url.'?'.http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // true表示不主动输出内容false表示输出返回的内容
        curl_setopt($ch, CURLOPT_TIMEOUT, 20); // 设置超时限制防止死循环
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 拒绝验证证书自cURL 7.10开始默认为TRUE。从cURL 7.10开始默认绑定安装
        curl_setopt($ch, CURLOPT_HEADER, 0); // 不将头信息返回
        $rs = curl_exec($ch);
        if(curl_errno($ch))
        {
            $error=['code'=>400,'error'=>curl_errno($ch)];
            curl_close($ch);
            return $error;
        }
        curl_close($ch);
        return ['code'=>200,'data'=>$rs];
    }

    /**
     *post方式模拟请求
     * @param unknown $url
     * @param unknown $data
     * @param array $header
     * @return number[]|number[]|unknown[]
     */
    public static function sendPost($url,$data,$header=[])
    {
        $ch = curl_init($url);
        if (!empty($header)){
            curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
        }
        $data=http_build_query($data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);//true表示不主动输出内容false表示输出返回的内容
        curl_setopt($ch,CURLOPT_POST,1);//post方式提交
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);//表单提交数据
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//拒绝验证证书自cURL 7.10开始默认为TRUE。从cURL 7.10开始默认绑定安装
        curl_setopt($ch, CURLOPT_TIMEOUT,30);//设置超时限制防止死循环
        curl_setopt($ch, CURLOPT_HEADER, 0);//不将头信息返回

        $rs=curl_exec($ch);

        if(curl_errno($ch))
        {


           $error=['code'=>400,'error'=>curl_errno($ch)];
           curl_close($ch);
           return $error;
        }
        curl_close($ch);
        return ['code'=>200,'data'=>$rs];

    }
    /**
     *
     * @param $AppKey开发者平台分配的appkey
     * @param  $Nonce随机数（最大长度128个字符
     * @param  $CurTime当前UTC时间戳，从1970年1月1日0点0 分0 秒开始到现在的秒数(String)
     * @param  $AppSecretSHA1(AppSecret + Nonce + CurTime),三个参数拼接的字符串，进行SHA1哈希计算，转化成16进制字符(String，小写)
     */
    public static function   checksum($type){
        $Nonce=randomkeys(10);
        $CurTime=time();
        $AppSecretSHA1=sha1(self::APP_SECRET.$Nonce.$CurTime);
        $header[]='AppKey:'.self::APP_KEY;
        $header[]='CurTime:'.$CurTime;
        $header[]='CheckSum:'.$AppSecretSHA1;
        $header[]='Nonce:'.$Nonce;
        $header[]=$type;
        return $header;

    }

}

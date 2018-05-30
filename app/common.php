<?php
// 应用公共函数库
function  p($data){
    echo '<pre>';
        var_dump($data);
       echo  '</pre>';

}
//无线级分类
function tree(&$data,$pid=0,$level=0){
    $tree=[];
    foreach ($data as $key=>$vo){
        if ($vo['pid']==$pid){
            $vo['level']=str_repeat('---', $level);;
            $tree[]=$vo;
            $tree=array_merge($tree,tree($data,$vo['id'],$level+1));
     }

    }
    return $tree;
}
//无线级查找子集
function tree_son($data,$pid){
    $son=[];
    foreach ( $data as $key=>$vo){
        if ($vo['pid']==$pid){
            $vo['son']=tree_son($data, $vo['id']);
            $son[]=$vo;
        }
    }
    return $son;
}
/**
 * @desc   检查输入的是否为手机号
 * @access public
 * @param  $val
 * @return bool true false
 */
function isMobile($val)
{

    //该表达式可以验证那些不小心把连接符“-”写出“－”的或者下划线“_”的等等
    if(preg_match("/^13[0-9]{1}[0-9]{8}$|14[0-9]{1}[0-9]{8}$|15[0-9]{1}[0-9]{8}$|17[0-9]{1}[0-9]{8}$|18[0-9]{1}[0-9]{8}$|17[0-9]{1}[0-9]{8}$/",$val))
    {
        return true;
    }
    return false;
}
/**
 * @desc   邮箱地址合法性检查
 * @access public
 * @param  $val
 * @param  $domain
 * @return bool true false
 */
 function isEmail($val,$domain="")
{
    if(!$domain)
    {
        if( preg_match("/^[a-z0-9-_.]+@[\da-z][\.\w-]+\.[a-z]{2,4}$/i", $val) )
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    else
    {
        if( preg_match("/^[a-z0-9-_.]+@".$domain."$/i", $val) )
        {
            return true;
        }
        else
        {
            return false;
        }

    }
 }

 /**
  * 验证身份证号
  * @param $vStr
  * @return bool
  */
 function isCreditNo($vStr)
 {
     $vCity = array(
         '11','12','13','14','15','21','22',
         '23','31','32','33','34','35','36',
         '37','41','42','43','44','45','46',
         '50','51','52','53','54','61','62',
         '63','64','65','71','81','82','91'
     );

     if (!preg_match('/^([\d]{17}[xX\d]|[\d]{15})$/', $vStr))
     {
         return false;
     }

     if (!in_array(substr($vStr, 0, 2), $vCity))
     {
         return false;
     }

     $vStr = preg_replace('/[xX]$/i', 'a', $vStr);
     $vLength = strlen($vStr);

     if ($vLength == 18)
     {
         $vBirthday = substr($vStr, 6, 4) . '-' . substr($vStr, 10, 2) . '-' . substr($vStr, 12, 2);
     } else {
         $vBirthday = '19' . substr($vStr, 6, 2) . '-' . substr($vStr, 8, 2) . '-' . substr($vStr, 10, 2);
     }

     if (date('Y-m-d', strtotime($vBirthday)) != $vBirthday)
     {
         return false;
     }
     if ($vLength == 18)
     {
         $vSum = 0;

         for ($i = 17 ; $i >= 0 ; $i--)
         {
             $vSubStr = substr($vStr, 17 - $i, 1);
             $vSum += (pow(2, $i) % 11) * (($vSubStr == 'a') ? 10 : intval($vSubStr , 11));
         }

         if($vSum % 11 != 1)
         {
             return false;
         }
     }

     return true;
 }


 /**
  * @desc   姓名昵称合法性检查，只能输入中文英文
  * @access public
  * @param  $val 被检查内容
  * @return bool true false
  */
function isName($val)
 {
     if(preg_match("/^[\x80-\xffa-zA-Z0-9]{3,60}$/", $val) )
     {
         return true;
     }
     return false;
 }
 /**
          * @desc   检查字符串长度是否符合要求(仅限于数字)
          * @access public
          * @param  int $val
          * @param  int $min 最小长度
          * @param  int $max 最大长度
          * @return bool true false
          */
 function isNumLength($val, $min, $max)
         {
             $theelement= trim($val);
             if(preg_match("/^[0-9]{".$min.",".$max."}$/",$val))
             {
                 return true;
             }
             return false;
         }

         /**
          * @desc   检查字符串长度是否符合要求(仅限于阿拉伯字母)
          * @access public
          * @param  string $val
          * @param  int $min 最小长度
          * @param  int $max 最大长度
          * @return bool true false
          */
 function isEngLength($val, $min, $max)
         {
             $theelement= trim($val);
             if(preg_match("/^[a-zA-Z]{".$min.",".$max."}$/",$val))
             {
                 return true;
             }
             return false;
         }

         /**
          * @desc   检查输入是否为英文
          * @access public
          * @param  string $theelement
          * @return bool true false
          */
 function isEnglish($theelement)
         {
             if(preg_match("[\x80-\xff].",$theelement))
             {
                 return false;
             }
             return true;
         }

         /**
          * @desc   检查是否输入为汉字
          * @access public
          * @param  string $sInBuf
          * @return bool true false
          */
 function isChinese($val)
         {
             if(preg_match("/^[\x{4e00}-\x{9fa5}]+$/u", $val) )
             {
                 return true;
             }
             return false;
         }

         /**
          * @desc   检查输入值是否为合法人民币格式
          * @access public
          * @param  float $val
          * @return bool true false
          */
 function isMoney($val)
         {
             if(preg_match("/^(-?\d+)(\.\d+)?/", $val))
             {
                 return true;
             }
             if( preg_match("/^[0-9]{1,}\.[0-9]{1,4}$/", $val) )
             {
                 return true;
             }
             return false;
         }


         /**
          * @desc   检查输入IP是否符合要求
          * @access public
          * @param  string $val
          * @return bool true false
          */
 function isIp($val)
         {
             return(bool) ip2long($val);
         }

         /**
          * @desc   如果元素值中包含除字母和数字以外的其他字符，则返回FALSE
          * @access public
          * @param  string $str 被验证内容
          * @return bool
          * @author Alisa
          */
 function isAlpha_numeric($str)
         {
             return ( ! preg_match("/^([a-z0-9])+$/i", $str)) ? FALSE : TRUE;
         }

         /**
          * @desc   如果元素值中包含除字母/数字/下划线/破折号以外的其他字符，则返回FALSE
          * @access public
          * @param  string $str
          * @return bool true false
          */
 function alpha_dash($str)
         {
             return ( ! preg_match("/^([-a-z0-9_-])+$/i", $str)) ? FALSE : TRUE;
         }
         /**
          * @desc 非四舍五入取取小数点
          * @param type $number
          * @return type
          */
function format_money($number, $num = 2)
         {
             $number = floor($number * 100) / 100;
             return number_format($number, $num, '.', '');
         }
         /**
          * 获取随机数方法
          * @access public
          * @return void
          */
 function randomkeys($length = 8)
         {
             $key ="";
             $pattern='1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLOMNOPQRSTUVWXYZ';
             for($i=0;$i<$length;$i++)
             {
                 $key .= $pattern{mt_rand(0,62)};    //生成php随机数
             }
             return $key;
         }
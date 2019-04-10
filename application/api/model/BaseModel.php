<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/4
 * Time: 23:14
 */

namespace app\api\model;


use think\Model;

class BaseModel extends Model
{
    // 读取器 将图片的前缀与查出来的图片url相对路径进行拼接
    protected function imgPrefix($value,$data){
        // 图片可能是来自于网络 此时不再需要拼接域名
        $finalUrl = $value;
        if ($data['from'] == 1){
            return config('setting.img_prefix').$value;
        }
        return $finalUrl;
    }
}
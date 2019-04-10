<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/3
 * Time: 22:53
 */

namespace app\api\model;


use think\Model;

class Image extends BaseModel
{
    protected $hidden = ['id','delete_time','update_time','from']; // 设置返回数据的隐藏字段

    public function getUrlAttr($value,$data){
        return $this->imgPrefix($value,$data);
    }
}
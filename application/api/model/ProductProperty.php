<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/6
 * Time: 18:39
 */

namespace app\api\model;


class ProductProperty extends BaseModel
{
    protected $hidden = ['delete_time','update_time','product_id','id']; // 设置返回数据的隐藏字段
}
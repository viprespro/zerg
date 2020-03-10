<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/6
 * Time: 18:37
 */

namespace app\api\model;


class ProductImage extends BaseModel
{
    protected $hidden = ['delete_time','product_id','img_id'];

    public function imgUrl(){
        return $this->belongsTo('Image','img_id','id');
    }
}
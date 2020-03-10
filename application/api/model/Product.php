<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/6
 * Time: 18:33
 */

namespace app\api\model;


class Product extends BaseModel
{
    protected $hidden = ['delete_time','update_time','create_time','img_id','category_id']; // 设置返回数据的隐藏字段

    public function getMainImgUrlAttr($value,$data){
        return $this->imgPrefix($value,$data);
    }

    public  function imgs(){
        return $this->hasMany('productImage','img_id','id');
    }

    public function property(){
        return $this->hasMany('ProductProperty','product_id','id');
    }

    public static function getProductDetailById($id){
        $product = self::with(['imgs.imgUrl','property'])->find($id);

        return $product;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/6
 * Time: 18:31
 */

namespace app\api\controller\v1;


use app\api\model\Product as ProductModal;
use app\api\validate\IDMustBePositiveInt;


class ProductDetail
{
    public function getProduct($id){

        (new IDMustBePositiveInt())->goCheck();

        $ret = ProductModal::getProductDetailById($id);

        if(!$ret){
            throw  new ProductException();
        }

        return $ret;
    }
}
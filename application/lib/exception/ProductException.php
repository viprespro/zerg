<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/6
 * Time: 18:48
 */

namespace app\lib\exception;


class ProductException
{
    public $code = 404;
    public $msg = '指定的商品不存在或已下架';
    public $errorCode = 10001;
}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/30
 * Time: 17:08
 */

namespace app\lib\exception;


/**
 * 404时抛出此异常
 */
class MissException extends BaseException
{
    public $code = 404;
    public $msg = 'global:your required resource are not found';
    public $errorCode = 10001;
}
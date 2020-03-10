<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/6
 * Time: 13:40
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $errorCode = 10000;
    public $msg = "invalid parameters";
}
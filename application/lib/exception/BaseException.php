<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/30
 * Time: 17:09
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
    // 状态码
    public $code = 404;

    // 错误具体消息
    public $msg = '参数错误';

    //自定义的错误码
    public $errorCode = 10000;
}
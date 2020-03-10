<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/6
 * Time: 10:58
 */

namespace app\api\validate;


class TokenGet extends BaseValidate
{
    protected $rule = [
        'code' => 'require | isNotEmpty'
    ];

    protected $message = [
        'code' => '没有code还想获取token，做梦吧！'
    ];
}
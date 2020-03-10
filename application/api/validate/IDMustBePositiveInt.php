<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/30
 * Time: 14:05
 */

namespace app\api\validate;


class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];
}
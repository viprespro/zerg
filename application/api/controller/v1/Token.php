<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/6
 * Time: 10:57
 */

namespace app\api\controller\v1;


use app\api\service\UserToken;
use app\api\validate\TokenGet;

class Token
{
    public function getToken($code = '')
    {

        (new TokenGet())->goCheck();

        $ut = new UserToken($code);

        $ret = $ut->get();

        return $ret;
    }
}
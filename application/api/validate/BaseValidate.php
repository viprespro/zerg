<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/30
 * Time: 14:02
 */

namespace app\api\validate;


use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        $params = Request::instance() ->param();
        $ret = $this->check($params);
        if(!$ret){
            $error = $this->error;
            return new Exception($error);
        }
        else {
            return true;
        }
    }
}
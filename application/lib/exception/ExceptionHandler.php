<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/30
 * Time: 17:06
 */

namespace app\lib\exception;


use think\Exception;
use think\exception\Handle;
use think\Request;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;
    // 返回的url路径
    private $url;
    public function render(Exception $e)
    {
        if ($e instanceof BaseException){
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        }else {
            $this->code = 500;
            $this->msg = '服务器内部错误';
            $this->errorCode = 999;
        }
        $result = [
            'msg' => $this->errorCode,
            'error_code' => $this->errorCode,
            'url' => Request::instance()->url()
        ];
        return json($result,$this->code);
    }
}
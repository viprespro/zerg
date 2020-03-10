<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/6
 * Time: 11:00
 */

namespace app\api\service;


use app\lib\exception\wxChatException;
use think\Exception;

class UserToken
{
    protected $code;
    protected $wxAppId;
    protected $wxAppSecret;
    protected $wxLoginUrl;

    /**
     * 构造函数
     */
    function _construct($code){
        $this->code = $code;
        $this->wxAppId = config(wx.app_id);
        $this->wxAppSecret = config(wx.app_secret);
        $this->wxLoginUrl = sprintf(config(wx.login_uro),$this->wxAppId,$this->wxAppSecret,$this->code);

    }

    public function get(){
        $result = curl_get($this->wxLoginUrl);
        $wxResult = json_decode($result,true);
        if(empty($wxResult)){
            throw new Exception('获取session_key及openId异常,微信内部错误');
        }else {
            $loginFail = array_key_exists('errorCode',$wxResult);
            if($loginFail){
                $this->processLoginException($wxResult);
            }else {
                $this->grantToken();
            }
        }
    }


    private function grantToken($wxResult){

    }

    private function processLoginException($wxResult){
        throw new wxChatException(
            [
                'msg'=> $wxResult['errmsg'],
                'errorCode'=> $wxResult['errorCode']
             ]
        );
    }
}
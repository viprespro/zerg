<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/4
 * Time: 10:33
 */

namespace app\sample\controller;

use think\Request;  // 第二种获取方式

class Test
{
    /**
     * @param $id
     * @param $name
     * @param $age
     * 获取变量的几种方式 第一种
     */
    public function test($id,$name,$age){
        echo $id;
        echo '|';
        echo $name;
        echo '|';
        echo $age;
    }

    /**
     * 通过Request类来获取参数 不区分http类型 不管get、post...
     */
    public function getParamsByRequest(){
//        $id = Request::instance()->param('id');  // 单个获取  若不想通过Request::instance()获取request实例 可以在getParamsByRequest(Request $request)来拿到
//        $name = Request::instance()->param('name');
//        $age = Request::instance()->param('age');

        $all = Request::instance()->param();  // ->param 如果是获取?后面的参数 使用->get方法 如果获取路由参数 使用->route
        var_dump($all);

//        echo $id;
//        echo '|';
//        echo $name;
//        echo '|';
//        echo $age;
    }

    /**
     * 通过助手函数获取参数
     */
    public function getParamsByInput(){
        $all = input('param.');  // 单个的话.id .name 等等
        var_dump($all);
    }
}
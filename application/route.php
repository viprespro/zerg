<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

/**
 * 动态注册方式  更加灵活
 */

Route::rule('路由表达式','路由地址','请求类型','路由参数（数组）','变量规则（数组）');

//GET，POST,DELETE,PUT,*（默认）

//Route::rule('test','sample/Test/test','GET',['https'=>false]); // 原有的访问方式将不再能用
//Route::rule('test','sample/Test/test','GET | POST',['https'=>false]); // 使用get，post请求

//Route::get('test/:id','sample/Test/test');

//Route::post('test/:id','sample/Test/test');

//Route::post('getParamsByRequest','sample/Test/getParamsByRequest');

//Route::post('getParamsByInput','sample/Test/getParamsByInput');

//以上皆为测试使用
Route::get('api/:version/banner/:id','api/:version.Banner/getBanner');

// 获取令牌token
Route::post('api/:version/user/token','api/:version.Token/getToken');

//获取商品详情
Route::get('api/:version/productDetail/:id','api/:version.ProductDetail/getProduct');
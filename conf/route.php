<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/8
 * Time: 13:00
 */
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
//API模块的路由绑定
Route::group(['method'=>"post"],function (){
    Route::post("user/login","api/user/login");//用户登录
    Route::post("user/sender","api/user/sender");//注册发送验证码
});
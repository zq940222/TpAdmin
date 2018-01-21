<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"E:\phpStudy\WWW\youquanhua\public/../app/admin\view\index\main.html";i:1516524247;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>系统主页</title>
    <link rel="stylesheet" href="/static/public/layui/css/layui.css">
    <link rel="stylesheet" href="/static/public/iconfont/css/iconfont.css">
</head>
<body>
<fieldset class="layui-elem-field">
    <legend>开发进度时间轴</legend>
    <div class="layui-field-box">
        <ul class="layui-timeline">
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">1月20日</h3>
                    <p>
                        后台权限初步整合Auth权限
                        <br>登陆完成、密码采用password_hash方式加密、盐值为uuid
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">1月19日</h3>
                    <p>
                        iframe的高度设置为100%
                        <br>实现tab的切换
                        <br>实现手机模式的左侧菜单展示
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title">1月18日</h3>
                    <p>
                        后台整体框架的构建
                        <br>实现左侧菜单栏的缩放
                        <br>实现tab的切换
                    </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                    <div class="layui-timeline-title">1月15正式开工</div>
                </div>
            </li>
        </ul>
    </div>
</fieldset>
</body>
</html>
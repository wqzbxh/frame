<?php
/**
 * Created by : PhpStorm
 * User: 哑巴湖大水怪（王海洋）
 * Date: 2023/2/20
 * Time: 20:54
 */



/**
 * 框架核心
 */
if (version_compare(PHP_VERSION, '7.3.0','<')) {
    header("Content-Type: text/html; charset=UTF-8");
    echo 'PHP环境不能低于7.3.0';
    exit;
}

spl_autoload_register(function ($class){
    var_dump($class);
});
define('APP_PATH', __DIR__ . '/app/');
// 加载框架引导文件
require __DIR__ . '/hy/app.php';

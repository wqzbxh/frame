<?php
/**
 * Created by : PhpStorm
 * User: 哑巴湖大水怪（王海洋）
 * Date: 2023/2/20
 * Time: 21:16
 */

//定义版本
define('hy_app', '1.0.0');
//当前 Unix 时间戳和微秒数,浮点数
define('hy_start_time', microtime(true));
//分配给 PHP 的内存量
define('hy_start_menu', memory_get_usage());
defined('CONF_PATH') or define('CONF_PATH', APP_PATH.'config'); // 配置文件目录

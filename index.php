<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/4/25
 * Time: 上午8:18
 * 入口文件
 * 1 定义常量
 * 2 加载函数库
 * 3 启动框架
 */
//定义框架根目录
define('IMOOC',realpath('./'));
//定义框架的核心文件目录
define('CORE',IMOOC.'/core');
//定义控制器、模型所处目录
define('APP',IMOOC.'/app');
//定义应用目录
define('MODULE','app');
//定义调试开关
define('DEBUG',true);
//根据调试开关是否开启调试模式
if(DEBUG){
    ini_set('display_error','On');
}else{
    ini_set('display_error','Off');
}
//加载函数库
include CORE.'/common/function.php';
//启动框架
include CORE.'/imooc.php';
spl_autoload_register('\core\imooc::load');
\core\imooc::run();


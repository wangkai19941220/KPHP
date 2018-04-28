<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/4/27
 * Time: 下午11:01
 */
namespace core\lib;
use core\lib\route;
class log
{
    /*
     * 1 确定日志存储方式
     * 2 写日志
     * */

    static $class;
    static public function init(){
        //echo "111";
        //确定存储方式
        $drive=conf::get('DRIVE','log');
        //p($drive);
        $class='\core\lib\drive\log\\'.$drive;
       // p($class);
        self::$class=new $class;
        //p(self::$class);
    }
    static  public function log($name,$file='log'){
        self::$class->log($name,$file);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/4/25
 * Time: 上午9:36
 */
namespace core;
class imooc
{
    public static $classMap=array();
    static public function run(){

        $route=new \core\route();
    }
    //自动加载类库
    //new \core\route();
    //$class= /core/route
    //IMOOC./core/route.php
    static public function load($class){



        if(isset($classMap[$class])){
            return true;
        }else{
            $class=str_replace('\\','/',$class);
            $file=IMOOC.'/'.$class.'.php';
            if(is_file($file)){
                include $file;
                self::$classMap[$class]=$class;
            }else{
                return false;
            }
        }

    }
}
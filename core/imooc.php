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
    public $assign;
    static public function run(){
        $route=new \core\lib\route();
        $ctrlClass=$route->ctrl;
        $action=$route->action;
        $ctrlfile=APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        $cltrlClass='\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
        //p($cltrlClass);
        if(is_file($ctrlfile)){
            include $ctrlfile;
            $ctrl=new $cltrlClass();
            $ctrl->$action();
        }else{
            throw new \Exception('找不到控制器'.$ctrlClass);
        }

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
    public function assign($name,$value){
       //p($value);
        $this->assign[$name]=$value;
    }
    public function display($file){
        $file=APP.'/views/'.$file;
        if(is_file($file)){
            //p($this->assign);exit;
            extract($this->assign);
            include $file;
        }
    }
}
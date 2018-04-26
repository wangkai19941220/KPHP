<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/4/26
 * Time: 下午10:05
 */
namespace core\lib;

class conf
{
    /*
     * 1 判断配置文件是否存在
     * 2 判断配置是否存在
     * 3 缓存配置
     * */
    static public $conf=array();
    static public function get($name,$file){
        //p($name);
        //p($name);
        //p(self::$conf[$file]);
        if(isset(self::$conf[$file])){
            return self::$conf[$file][$name];
        }else{
            $path=IMOOC.'/core/config/'.$file.'.php';
            //p($path);
            if(is_file($path)){
                $conf=include $path;
               // p($conf);
                //p($conf[$name]);
                if(isset($conf[$name])){
                    self::$conf[$file]=$conf;
                    return $conf[$name];
                }else{
                    throw new \Exception("没有这个配置".$name);
                }

            }else{
                throw new \Exception("找不到配置文件".$file);
            }
        }

    }

}
<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/4/27
 * Time: 下午11:03
 */
namespace core\lib\drive\log;

use core\lib\conf;

class file
{
    public $path;
    public function __construct()
    {
        $conf=conf::get('OPTION','log');
        $this->path=$conf['PATH'];
    }

    public function log($message,$file='log'){
        /*
         * 1 确定存储位置是否存在
         * 2 写入日志
         * */
        //p($this->path);exit;
        if(!is_dir($this->path)){
            mkdir($this->path.date('YmdH'),'0777',true);
        }
        return file_put_contents($this->path.date('YmdH').$file.'.php',date('Y-m-d H:i:s').json_encode($message),PHP_EOL.FILE_APPEND);

    }
}
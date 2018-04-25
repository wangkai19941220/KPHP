<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/4/25
 * Time: 上午9:43
 */
namespace core\lib;
class route
{
    public function __construct()
    {
        /*
         * 1 隐藏index.php
         * 2 获取URL参数部分
         * 3 返回对应的控制器和方法
         * */
        //p($_SERVER['REQUEST_URI']);
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/'){
            $path=$_SERVER['REQUEST_URI'];
            //p($path);
            $patharr=explode('/',trim($path,'/'));

            if(isset($patharr[0])){
                $this->ctrl=$patharr[0];

            }
            unset($patharr[0]);
            if(isset($patharr[1])){
                $this->action=$patharr[1];
                unset($patharr[1]);
            }else{
                $this->action='index';
            }
            $count=count($patharr)+2;
            $i=2;
            while($i<$count){
                if(isset($patharr[$i+1])){
                    $_GET[$patharr[$i]]=$patharr[$i+1];

                }
                $i=$i+2;
            }
            p($_GET);
        }else{
            $this->ctrl='index';
            $this->action='index';
        }
    }
}
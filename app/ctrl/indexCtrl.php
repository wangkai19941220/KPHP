<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/4/26
 * Time: 上午8:26
 */
namespace app\ctrl;
use core\lib\model;
class indexCtrl extends \core\imooc
{
    public function index()
    {
        //p('it is index');
       // $model=new \core\lib\model();
        //p('1');
        //$temp=\core\lib\conf::get('CTRL','route');
        //$tem=\core\lib\conf::get('ACTION','route');
        //p($temp);
        //p($tem);
       /* $data='wangkai';
        $this->assign('data',$data);
        $this->display('index/index.html');
        $model=new model();
        dump($model);*/
        $data="hello world";
        //dump($data);
        $this->assign('data',$data);
        $this->display('index.html');




    }
}
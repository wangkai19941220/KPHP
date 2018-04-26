<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/4/26
 * Time: 上午8:26
 */
namespace app\ctrl;
class indexCtrl extends \core\imooc
{
    public function index()
    {
        //p('it is index');
       // $model=new \core\lib\model();
        $data='wangkai';
        $this->assign('data',$data);
        $this->display('index/index.html');
    }
}
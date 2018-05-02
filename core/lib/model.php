<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/4/26
 * Time: 上午8:49
 */
namespace core\lib;
use core\lib\conf;
use Medoo\Medoo;
class model extends Medoo
{

    public function __construct()
    {

    /*    $dsn='mysql:host=localhost;dbname=test';
        $username='root';
        $passwd='roots';
        try{
            parent::__construct($dsn, $username, $passwd);
        }catch(\PDOException $e){
            p($e->getMessage());
        }*/
        $option=conf::all('database');
       //dump($option);
       parent::__construct($option);

    }
}
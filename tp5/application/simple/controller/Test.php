<?php
//命名空间
namespace  app\simple\controller;
use think\Request;
class Test{
 public  function  hello($a,$b){
//     $id= Request::instance()->param('id');
//     $name = Request::instance()->param('name');
$all =  Request::instance()->param();
var_dump($all);
//     echo $id;
//     echo '|';
//     echo $name;
//     echo 'hello,moto';
 }

}
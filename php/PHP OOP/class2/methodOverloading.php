<?php


class Gadha{
   //call , __callStatic -->

   public function __call($name, $arguments){
    print_r($name);
    print_r($arguments);

   }
}

$obj=new Gadha();
$obj->value(5,4,5);
$obj->name("aaa","bbb","ccc");



?>
<?php

abstract class Father{
    public $msg = "abc" ;
    public function print(){
        for($i=0;$i<10;$i++){
            echo $i." ";
        }
        echo "\n";
    }

}
class Son extends Father{

}


$obj1=new Son() ;
echo $obj1->msg ."\n";
$obj1->print() ;

 /*
$obj1=new Father() ;
echo $obj1->msg ."\n";
$obj1->print() ;
--->can't not be accessed because father class is abstract.
*/
?>
<?php

 class Father{
    public $msg = "abc" ;
    public function print(){
        for($i=0;$i<10;$i++){
            echo $i." ";
        }
        echo "\n";
    }

}
class Son extends Father{

    ////overrideing-->father class er method chnage kora
    public function print(){
        for($i=0;$i<20;$i++){
            echo $i." "; 
        }
        echo PHP_EOL ;
    }

}


$obj1=new Son() ;
$obj2=new Father() ;
//echo $obj1->msg ."\n";
$obj1->print() ;
$obj2->print() ;


?>
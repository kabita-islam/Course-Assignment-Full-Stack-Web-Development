<?php

//////////// static variable ///////////////////////////////

/*  object chara class er variable,method call kora to possible na.
kintu amra jodi without object class er varible,method call korte chai
tahole variable,method guloke 'static' decleare kore dite hoi.
that's called static variable,static method.

static variable ---> direct access from class.no need of object. 
static method ---> direct access from class.no need of object.
*/
 class abc{
    public static $var="red" ;
    public static function fun(){
        echo "abc\n" ;
    }
 }

// $obj=new abc() ;
echo abc :: $var."\n" ;
abc :: fun() ;
?>
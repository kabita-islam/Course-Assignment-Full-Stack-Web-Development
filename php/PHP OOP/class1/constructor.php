<?php
class Person{
    // function __construct($name){
    //     echo "I am {$name}\n" ;
    // }

    function a(){
        $this->b();
        $this->c();
    }
    private function b(){
        echo "print B\n";
    }
    private function c(){
        echo "print C\n";
    }
}
// $obj1 = new Person("kabita");
// $obj2 = new Person("Islam");

$call = new Person() ;
$call->a() ;

?>
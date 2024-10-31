<?php

class Father
{
    public $num1 = 10;
    public $num2 = 20;
    public function add()
    {
        return $this->num1 + $this->num2;
    }

    public function __construct()
    {
        echo "Father's Constructor.\n";
    }

}
class Son extends Father
{


    // public function mul(){
    // //   $result = parent::add();
    // //   echo $result*3;
    // echo parent::add()*3 ."\n" ;
    // }
    public function __construct()
    {
        parent::__construct();
        echo "Son's Constructor.\n";
    }


}
// $obj = new Son();
// $obj->mul();

new Son();



?>
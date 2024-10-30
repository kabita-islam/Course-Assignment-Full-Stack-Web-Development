<?php
class Person{
    public $name ;
    public $age;
    function introduce(){
        echo "I am {$this->name} and I am {$this->age} years old.\n" ;

    }
}

$person1 = new Person();  //object
$person1->name ="aaa\n" ;
$person1->age=10;
$person1->introduce();
// echo "The name of person1 is ",$person1->name."\n" ;

$person2=new Person();
$person2->name="bbb";
$person2->age = 12;
$person2->introduce();
// echo "The name of person2 is ",$person2->name."\n" ;

?>
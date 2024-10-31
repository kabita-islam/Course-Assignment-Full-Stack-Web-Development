<?php


// interface bankAccount{
//     public function credit(int $amount,string $name,string $accNumber);
//     public function debit(int $amount,string $name,string $accNumber);
// }

// class ManageAccount implements bankAccount{

//     public function credit(int $amount, string $name,string $accNumber){   
    
//         echo "{$amount} --- {$name} --- {$accNumber}\n";
//     }

//     public function debit(int $amount,string $name,string $accNumber){
//         echo "{$amount} --- {$name} --- {$accNumber}\n";
    
//     }
// }
// $obj1=new ManageAccount() ;
// $obj1->credit("10000","kabita",111222) ;

// $obj1->debit("15000","kabita2","333444") ;


interface info{
    public function name() ;
}
class Person1 implements info{
    public function name(){
        echo "aaa\n";
    }
}
class Person2 implements info{
    public function name(){
        echo "bbb\n" ;
    }
}
class Person3 implements info{
    public function name(){
        echo "ccc\n" ;
    }
}
$obj1=new Person1();
$obj2=new Person2();
$obj3=new Person3();
$obj = [$obj1,$obj2,$obj3];

foreach($obj as $obj){
    $obj->name() ;
}

?>
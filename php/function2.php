<?php

//////////   variable scope //////////


///////////////  local scope ////////////////
/* below two variables in two functions are decleared and they
 print in separately and doesn;t overwrite.these are called local scope .*///

// function msg1(){
//     $message = "hello1\n" ;
//     echo $message ;
// }

// function msg2(){
//     $message = "hello\n" ;
//     echo $message ;
// }

// msg1();
// msg2();


////////////////////////  Global Variable ////////////////
/*    Global Scope 

*/

// $a=15;
// $b=12;
// function add(){
//     global $a,$b;
//     echo $a+$b;
//     echo "\n";
// }

// function subtract(){
//     global $a,$b;
//     echo $a-$b;
//     echo "\n";
// }

// add();
// subtract();



////////////////////////  Super GLobal ///////////////////

/* $_GET , $_POST , $_SESSION --> these are called super global scope because
these can be used in anywhere from code */




?>
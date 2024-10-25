<?php
$num = readline("Enter the number :") ;
function factorial($num){
    if($num==0){
        return 1;
    }
    return $num*factorial(($num-1)) ;
}
$result = factorial($num) ;
echo $result."\n";
?>
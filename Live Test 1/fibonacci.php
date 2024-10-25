<?php

function fibonacci($num){   
    $n1=0;
    $n2=1;
    echo $n1." ".$n2." ";
    for($i=0;$i<10;$i++){
        $n3=$n1+$n2 ;
        $n1=$n2 ;
        $n2=$n3 ;
        echo $n3." " ;

    }
    echo "\n" ;

}
fibonacci(5) ;

?>
<?php


//////////////////////////////  print/printf/echo  //////////////////////////

$item = "book" ;
$price= 100;
$quantity= 5;

$total = $price *$quantity;
echo "The total price of $item is $total \n" ;
print("The total price of $item is $total \n");
printf("The total price of %s is %.2f \n", $item, $total);

?>
<?php
/*     Indexed Array     * 
#$names= array("aaa","bbb","ccc") ;   //old
$names=["aaa","bbb","ccc"] ; //latest


// echo count(($names))."\n" ;
// echo sort($names ) ."\n";
// echo $names[1]."\n";



//////////////// add/remove element in array  ///////////////
// $names[] = "ddd";


array_push = add element in the last
array_pop = remove element from the last
array_shift = remove element from the beginning
array_unshift = add element from the beginning


// $lastElement = array_pop($names) ;
// echo $lastElement ;
// echo PHP_EOL ;
//array_push(($names , "dddd")) ;

// $element = array_shift($names);
array_unshift($names,"ddd");
for($i= 0;$i<count($names);$i++){
    echo $names[$i];
    echo PHP_EOL ;
}
print_r($names);
*/

// echo $element ;


/*              Assciative Array */



// $names =[
//     "name1" => "aaa",  ///key =>value
//     "name2" => "bbb",
//     "name3" => "ccc"
// ];
// echo array_key_exists("name", $names) ; //true/false returns
// echo array_search("bbb", $names) ; //key returns
// $keys = array_keys($names) ;
// $values = array_values($names) ;
// print_r($keys) ;
// print_r($values) ;
//echo $names["name2"] ;

//////////// modify///////
// $names=[
//     "name2" ="iiii"
// ]


////////// loop  is associative array-->need to use foreach loop/////////////////

// foreach($names as $key=>$value){
//     echo "The name of {$key} is {$value}"."\n";

// }

// $names=["aaa","bbb","ccc"] ; //latest
// // array_splice($names,1,0, "fff"); ///adding element in perticular position
// // array_splice($names,1,1); ///removing element in perticular position
 
// print_r($names);

///////////// array merge /////////////////
// $n1 = ["a","b","c"] ;
// $n2 = ["d","e","f","a","b"] ;
// $all = array_merge($n1,$n2);
// print_r($all) ;
// $common=array_intersect($n1,$n2) ;  //common items
// $unique=array_diff($n2,$n1) ;  //unique items--> $n2 er unique

// print_r($unique) ;
// print_r($common) ;

// $n3=["a","b","c","d","e","f","a","b"] ;
// print_r(array_unique($n3));

// $sentence = "I am Kabita Islam" ;
// $words=explode(" ", $sentence) ;
// print_r($words);
// foreach($words as $key=>$value){
//     echo "The $key is $value" ;
//     echo PHP_EOL ;
// }

// $n2 = ["d","e","f","a","b"] ;
// $isFound = array_search("f",$n2) ;
// if($isFound!==false){
//     echo"found\n";
// }
// else{
//     echo "not found\n";
// }
// echo array_search("a",$n2);







//////*      Multidimensional Array  *//////////////////


?>
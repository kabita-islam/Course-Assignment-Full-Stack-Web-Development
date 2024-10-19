<?php

function marks( $number ){
    return readline("Enter marks for $number: ");
}
$course1 = marks("course1");
$course2 = marks("course2");
$course3 = marks("course3");
$course4 = marks("course4");
$course5 = marks("course5");
function marksValidation($number){
    if($number>=0 && $number<= 100){
        return true ;
    }
    else{
        return false;
    }
}
function fail($number){
    if($number<33){
        return true;
    }
}


function totalMarks(){
    global $course1, $course2, $course3, $course4, $course5 ;

    $totalMarks = ($course1 + $course2 + $course3 + $course4 + $course5) ;
    return $totalMarks; 
    
}


$totalMarks = totalMarks() ;
function averageMarks(){
    global $totalMarks ;
    $avgMarks = $totalMarks / 5 ;
    return $avgMarks ;
}

$averageMarks = averageMarks() ;

 function grade(){

    global $averageMarks ;

    switch($averageMarks){
        case ($averageMarks>=80 && $averageMarks<= 100):
            echo "Grade : A+\n";
            break;
        case ($averageMarks>=70 && $averageMarks<= 79):
            echo "Grade : A\n";
            break;
        case ($averageMarks>=60 && $averageMarks<= 69):
            echo "Grade : A-\n";
            break;
        case ($averageMarks>=50 && $averageMarks<= 59):
            echo "Grade : B\n";
            break;
        case ($averageMarks>=40 && $averageMarks<= 49):
            echo "Grade : C\n";
            break;
        case ($averageMarks>=33 && $averageMarks<= 33):
            echo "Grade : D\n";
            break;
        default:
            echo "Grade : F\n";
            break;
     }
 }

 function studentResult(){
    global $course1, $course2, $course3, $course4, $course5, $totalMarks , $averageMarks;
    if((!(marksValidation($course1))||!(marksValidation($course2))||
        !(marksValidation($course3))||!(marksValidation($course3))||
        !(marksValidation($course4))||!(marksValidation($course5)))){
            echo "Marks invalid!\n" ;
        }
    else if(((fail($course1)) || (fail($course2)) || 
        (fail($course3)) || (fail($course4)) || 
        (fail($course5)) )){
            echo "Failed!!!\n";
        }
    else{
        echo "Passed!\n" ;
        echo "Total Marks = " .$totalMarks."\n";
        echo "Total Marks = " .$averageMarks."\n";
        grade() ;
    }
    
}
studentResult() ;


?>
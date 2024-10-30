<?php  
// function trueOrFalse(){
//     if(false){ 
//         return "true";
//     }
//     else{
//         return "false";
//     }
// }
// echo trueOrFalse();

// <!-- function test($x = 5) { 
//     return $x * $x; 
// } 
// echo test();  -->






// function countDown($x){
//     if($x<=0){
//         return $x;
//     }
//     echo $x."\n";
//     countDown($x-1);
// }

// countDown(5);





////////////////////////  user login ////////////////////

// 1.user validation
// 2.password validation 
// 3.user & password matching


function loginUser($userName,$password){
    if(!userValidation($userName)){
        echo "User Validation unsuccesfull!\n" ;
    }
    else if(!userPassword($password)){
        echo "Password validation unsuccesfull!\n" ;
    }
    else if(!matching($userName,$password)){
        echo "User does not match!\n" ;
    }
    else{
        login() ;
        
    }

} 

function userValidation($userName){
    if(empty($userName)){
        return "Username must required" ;
    }
    else{
        return true;
    }

}
function userPassword($password){
    if(empty($password)){
        return "Password must required" ;
    }
    else{
        return true;
    }

}
function matching($userName,$password){
    if($userName=="abc" && $password==123){
        return "User logged in succesfully!" ;
    }
}


function login(){
    echo "Successful" ;
}
loginUser("abcabc","1232") ;

?>
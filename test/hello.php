<?php
// $makefoo=true;
// $var="hello";
//     if($makefoo){
//         function foo(){
//             echo "I don't exits until program execution reaches me.";
//             echo $GLOBALS['var'];
//         }
//     }
//     if($makefoo){
//          foo();
//     }

// function make($type="attack",$color){
//     echo $type." ".$color;
// }
// make("blue"); //Raises an error


// Solution
// function make($color,$type="attack"){
//     echo $type." ".$color;
// }
// make("blue");


// function addone(&$n){
//     return ++ $n; //If there is no return by default null value is returned.
//     ++$n; //unreachable code
// }
// function multiplyseq($n){
//     return (addone($n) * $n); //If one operand on either side is null then result will be zero for any operation. 
// }
// echo multiplyseq(2);


// function multipleret($arg1){
//     $arr=array();
//     $arr[]="A";
//     $arr[]=$arg1;
//     return $arr;
// }
// print_r(multipleret("bla bla bla"));



?>
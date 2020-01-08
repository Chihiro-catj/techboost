<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

function sum($max){
$max=$max *2;
return $max;}

echo sum(200);

function f($a,$b){
    return $a+$b;
}
echo f(1,2);

// function sum($max){
//     $result=0;
//     for($i=1; $i<=$max; $i++){
//         $result += $i;
//     }
//     return $result;
// }

// echo sum(100);

?>
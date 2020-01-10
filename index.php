<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

function sum($max){
$max=$max *2;
return $max;}

echo sum(200);

echo "\n";
echo "\n";

function f($a,$b){
    return $a+$b;
}
echo f(1,2);

echo "\n";
echo "\n";

function a($arr){
    $result = 1;
    foreach($arr as $ar){
        $result=$result * $ar;
    }
    return $result;
}
echo a(array(1,3,5,7,9));

echo "\n";
echo "\n";

function max_array($arr){
    $max_number=$arr[0];
    
    foreach ($arr as $a){
        if($max_number < $a)
        {
            $max_number =$a;
        }
    }
    return $max_number;
}

echo max_array(array(1,3,5,100,7,11));
echo "\n";
echo "\n";






?>
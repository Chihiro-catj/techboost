<?php

$name = "CHIHIRO";

if ($name){
    echo "私は CHIHIRO です";
}else{
    echo "あなたの名前ではありません";
}

echo "\n";

$total =0;
echo $total;

for($i=0;$i<1000;$i++){
    $total += $i;
}
echo $total;

$fruits=array("fuji","kougyoku","tsugaru","ourin","akane");
foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}



for($i=0; $i<=100; $i++){
    if($i%5==0){
        print($i);
        print ("\n");
}
}
echo $i;
?>
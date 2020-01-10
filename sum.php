<?php

$name = "CHIHIRO";

if ($name == "CHIHIRO"){
    echo "私は CHIHIRO です";
}else{
    echo "あなたの名前ではありません";
}

echo "\n";
echo "\n";

$total =0;
echo $total;

for($i=0;$i<=10000;$i++){
    $total += $i;
}
echo $total;

echo "\n";
echo "\n";

$fruits=array("fuji","kougyoku","tsugaru","ourin","akane");
foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}

echo "\n";

for($i=1; $i<=100; $i++){
    if($i%5==0){
        echo ($i);
        echo ("\n");
}
}
echo $i;
echo "\n"
?>
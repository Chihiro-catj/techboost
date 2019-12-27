<?php

$height = 230;
if ($height < 150) {
    echo "150cm未満の方はご乗車できません ";
} else if ($height>=200){
    echo "200cm以上の方はご乗車できません ";
}else{
    echo "ご乗車になれます";
}

$weekday = "月曜";

switch($weekday){
    case"月曜":
        echo "可燃ゴミの日です ";
        break;
    case "水曜":
        echo "資源ごみの日です。 ";
        break;
    default:
        echo "回収はありません ";
        break;
}

$total = 0;
echo $total;

for($i=0; $i <= 100; $i++){
    $total += $i;
}
echo $total;

$fruits = array("apple","orange","lemon");
echo count($fruits);
for($i=0; $i<count($fruits); $i++){
    echo "要素は" . $fruits[$i];
    echo "\n";
}

$animals = array("dog","cat","panda");

foreach($animals as $animal){
    echo "要素は" . $animal;
    echo "\n";
}

$name="Chihiro";
if ($name="Chihiro"){
    echo "私は Chihiro です";
}else{
    echo "あなたの名前ではありません";
}

for ($i =0; $i<=1000; $i++){
    $total += $i;
}
echo $total;

$fruits = array("apple","banana","orange");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

$start = 1;
$end = 100;

for($i = 1; $i <= 100; $i++){
  if($i % 5==0){
    echo $i;
  }
}
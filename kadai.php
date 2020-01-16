<?php

//課題１
$name = "katok";
if ($name == "katok") {
    echo "私は加藤圭です" ;
}else{
 echo "あなたの名前ではありません" ;
}
echo $name ;

//課題２
$total = 0;
for($i =0; $i < 10000; $i++){
    $total += $i;
}
echo $total ;
echo " \n";

//課題３
$fruits = array("apple","meron","orange","grape","mikan");
foreach($fruits as $fruit){
    echo $fruit;
    echo " \n";
}

for($i = 0; $i <= 100; $i++){
// 5で割り切れたら{}内を実行する
  if($i % 5 == 0) {
      echo $i;
      echo "\n";
  }
 }
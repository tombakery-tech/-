<?php
$name = "katok";
if ($name = "katok") {
    echo "私は加藤圭です" ;
}else{
    "あなたの名前ではありません" ;
}
echo $name ;

$total = 0;
for($i =0; $i < 1000; $i++){
    $total += $i;
}
echo $total ;

$fruit = array("apple","meron","orange","grape","mikan");
foreach($fruit as $fruit){
    echo $fruit;
    echo " \n";
}

for($i = 0; $i < 101; $i++){
// 5で割り切れたら{}内を実行する
  if($i % 5 == 0) {
      echo $i;
      echo "\n";
  }
 }
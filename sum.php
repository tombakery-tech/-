<?php
// 1〜10 までを足した値を返す関数
function sum($max){

    // $result は結果を保存する変数
    $result = 0;

    // $i は 1　からはじまり $max より大きくなるまでループする
    for($i = 1; $i <= $max; $i++ ){

        // $result に　$i を順番に足していく
        $result = $i;
    }
    
    return $result;

}

// 関数を実行
echo sum(100);


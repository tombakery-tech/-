<?php
//課題１
function kadaii($x) {
    $y = $x*2;
 echo $y;
echo "\n";
}
kadaii(9);

//課題２
function kadaiii($a,$b){
 echo $a+$b;
 echo "\n";
}
kadaiii(2,4);

//課題３
function kadaisan($arr){
 $arr = array( 1, 3,5,7,9 );
echo array_product($arr);
echo "\n";
}
kadaisan(3);

//課題４
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $arr = array(9,7,5,3,1,);
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 echo "一番大きい値は" . $a;
 echo "\n";
 }

 return $max_number;
 }
 echo max_array(1);
 
 //課題５
 //stripi_tags
  $text = '<p>Test paragraph.</p><!–– Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
// <p> と <a> は許可します
echo strip_tags($text, '<p><a>');

// array_push
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

// array_merge
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

// time, mktime
$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 日 * 24 時間 * 60 分 * 60 秒
                   // メンターへ質問：timezoneは設定していいのでしょうか
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
echo "\n";

// デフォルトのタイムゾーンを設定します。PHP 5.1 以降で使用可能です
date_default_timezone_set('UTC');
// 出力: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
// 出力例: 2006-04-05T01:02:03+00:00
echo date('c', mktime(1, 2, 3, 4, 5, 2006));
echo "\n";

// date
// 結果は、たとえば Monday のようになります。
echo date("l");

// 結果は、たとえば Monday 8th of August 2005 03:12:46 PM のようになります。
echo date('l jS \of F Y h:i:s A');

// 結果は July 1, 2000 is on a Saturday となります。
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

/* 書式指定パラメータに、定数を使用します。 */
// 結果は、たとえば Wed, 25 Sep 2013 15:28:57 -0700 のようになります。
echo date(DATE_RFC2822);

// 結果は、たとえば 2000-07-01T00:00:00+00:00 のようになります。
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
echo "\n";

<?php
function sum($a){
  $result=$a*2;
  return $result;
}
echo sum(2);
echo "\n";

function f($a,$b){
  $result=$a+$b;
  return $result;
}
echo f(10,5);
echo "\n";

function k($arr){
  $result=1;
  foreach($arr as $a){
    $result=$result*$a;
  }
  echo $result;
}
k(array(1, 3, 5 ,7, 9));
echo "\n";

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 $max_number=$max_number*$a;
 }

 return $max_number;
 }
 echo "\n";
?> 
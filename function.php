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
  // echo "test1\n";
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  
  // echo $max_number . "\n";

  foreach($arr as $a){
    // echo "test2\n";    
    // echo $a . "\n";
    
    if($max_number < $a) {
      // echo "test3\n";
      $max_number = $a;
      // echo $max_number . "\n";
    }
  }
  return $max_number;
}
echo max_array(array(5,2,8,1,1));
echo "\n";
?> 
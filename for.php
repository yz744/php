<?php
$name='金谷勇宜';
if($name){
echo '私は'.$name.'です';
}else{
  echo '私は'.$name.'ではありません';
}

// for($i=1;$i<=10000;$i++){
//   echo $i;
// }

$fruits=array("りんご","みかん","ぶどう","なし","もも");
  foreach($fruits as $fruit){
  echo $fruit;
 }
 
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i;
  }
}
?>
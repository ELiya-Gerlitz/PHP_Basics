<?php

function getAverage($a, $b, $c){
   $sum = getSum($a, $b, $c);
   return $sum / 3;
}

function getSum($a, $b, $c){
    return  $a + $b + $c;
}

// if conditions
function positiveNegative($n){
if($n<0){
echo "$n is a negative number";
}elseif($n === 0){
    echo "$n is zero";
}else{
    echo "$n is a positive number";
}
}

// ternary
function getMax($a, $b){
return $a > $b ? $a : $b;
}

function displayMsg($msg, $times){
for($i=0; $i<$times; $i++){
    echo $msg . " <br>";
}
}




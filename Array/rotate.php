<?php

$input=[1,2,3,4,5];

$output=array();

for($i= 0;$i<2;$i++){
    $temp=array_pop($input);
    array_unshift($output,$temp);
}

for($i=0;$i<3;$i++){
    array_push($output,$input[$i]);
}

foreach ($output as $num){
    echo $num . "\n";
}
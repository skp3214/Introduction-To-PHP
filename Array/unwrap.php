<?php

$input=[1,2,[3,4,[5]]];

function unwrap($input){
    $result=[];
    foreach($input as $elem){
        if(is_array($elem)){
            $result=array_merge($result,unwrap($input));
        }
        else{
            $result=$elem;
        }
    }

    return $result;
}
$output=unwrap($input);

foreach($output as $num){
    echo $num."\n";
}
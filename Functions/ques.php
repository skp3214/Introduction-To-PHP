<?php

function filterAndTransform($array,$threshold){
    $filtered=array_filter($array,function ($value) use ($threshold){
        return $value>=$threshold;
    });
    $transformed=array_map(function($value){
        return $value*$value;
    },$filtered);

    return $transformed;
}

$number=[1,2,3,4,5,6,7,8,9];
$threshold=5;

$transformedArray=filterAndTransform($number,$threshold);

foreach($transformedArray as $val){
    echo $val;
    echo "<br>";
}
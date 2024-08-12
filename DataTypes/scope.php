<?php

$x="trigger";
function myString($k){
    echo "value of x is inside function is $k";
}
myString($x);

echo "value of x is inside function is $x <br>";

define('PI',3.14);

function Area($radius){
    return PI*$radius*$radius;
}

echo Area(7);

$a=5;
$b=6;
echo "<br>";
echo $a+$b;
echo "<br>";
$array1=[1,2,3,4,5,6];
$array2=[1,2,3,4,5];
echo $array1 and $array2;


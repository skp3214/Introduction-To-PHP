<?php 
echo("Hello Array");

$cars=array("Toyota","Maruti","BMW");
echo $cars[1];
array_splice($cars,0,1);
echo $cars[1];
echo "<br>";
$new_cars=array_pop($cars);
echo $new_cars;
echo "<br>";
$person=array(
    "name"=>"Sachin",
    "age"=>25,
);

$newperson=array_diff($person,[25]);
print_r($newperson);
echo "<br>";
if(in_array("Maruti",$cars)){
    echo ("Maruti is in car");
}
else{
    echo("Maruti is not present");
}
echo "<br>";
$length=count($cars);
echo $length;

$numbers = array(1, 2, 3, 4, 5);

function isOdd($number){
    return  $number%2!==0;
}
echo "<br>";
$odd_Number=array_filter($numbers,'isOdd');
print_r($odd_Number[0]);



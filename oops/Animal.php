<?php 

abstract class Animal{
    abstract function walkingStyle();
}

class Elephant extends Animal{
    function walkingStyle(){
        echo "Elephant is walking on land";
    }
}

class Crocodile extends Animal{
    function walkingStyle(){
        echo "Crocodile swims on water";
    }
}

$elephant=new Elephant();
$elephant->walkingStyle();
echo "<br>";
$crocodile=new Crocodile();
$crocodile->walkingStyle();
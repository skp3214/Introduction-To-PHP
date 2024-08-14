<?php

function mystery($x){
    $x = $x*2;
    return function ($y) use($x){
        return $x + $y;
    };
};

$closure=mystery(5);
echo $closure(3); 

function alpha($x){
    return $x*2;
};

function beta($x){
    return $x+5;
}

function gamma($x,$y,$z){
    return $z($x)+$y($x);
}

echo gamma(2,'alpha','beta');
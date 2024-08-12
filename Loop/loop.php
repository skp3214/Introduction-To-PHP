<?php

$i = 1;
while ($i < 6) {
    echo $i;
    $i++;
}
$b = 0;
while ($b++) {
    echo $b;
}

for ($x = 0; $x < 5; $x++) {
    echo $x;
}

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo $i . ' ' . $j;
    }
    echo "<br>";
}

$colors = array("red", "green", "blue", "pink");
foreach ($colors as $color) {
    echo $color;
    echo "<br>";
}

$person = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York",
);

foreach ($person as $x => $y) {
    echo $y;
    echo "<br>";
}

$data=array(
    "A"=>"int 220",
    "B"=>"int 221",
    "C"=>"int 222",
);
$index=0;
echo "<br>";
foreach ($data as $key => $value) {
    if($index++%2==0)
    echo $key . ' ' . $value;
    echo "<br>";

}

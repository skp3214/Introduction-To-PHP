<?php
for($i=1;$i<10;$i++){
    if($i==4){
        break;
    }
    echo $i;
}

echo "<br>";
for($x=1;$x<=10;$x++){
    if($x==5){
        continue;
    }
    echo $x;
}
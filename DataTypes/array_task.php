<?php

$my_info=array(
"name"=>"Sachin Prajapati",
"course"=>"CSE",
"Year"=>4,
"age"=>23
);

echo $my_info['Year'];

$my_info['email']="skprajapati3214@gmail.com";
echo "<br>";
print_r (array_keys($my_info));
echo "<br>";
print_r (array_values($my_info));


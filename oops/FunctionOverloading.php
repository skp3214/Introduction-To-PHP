<?php 
class Addition{
    function __call($method, $args){
        if($method == 'add'){
            switch(count($args)){
                case 0:
                    return 0;
                case 1:
                    return $args[0];
                case 2:
                    return $args[0] + $args[1];
                default:
                    return array_sum($args);
            }
        }
        else{
            throw new Exception("Method not found");
        }
    }
}

$obj = new Addition();
echo $obj->add();
echo $obj->add(1);
echo $obj->add(1,2);
echo $obj->add(1,2,3,4,5);
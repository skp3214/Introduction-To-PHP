<?php
class Multiplication
{
    public function __call($method, $args)
    {
        if ($method == 'mul') {
            switch (count($args)) {
                case 1:
                    return $args[0];
                case 3:
                    return $args[0] * $args[1] * $args[2];
                case 5:
                    return array_product($args);
            }
        }
    }
}

$m = new Multiplication();
echo $m->mul(2);
echo $m->mul(9, 3, 5);
echo $m->mul(2, 4, 5, 6, 7);

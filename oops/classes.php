<?php
class Car{
    public $make;
    private $model;
    public $color;
    public $year;
    public function __construct($model, $color, $year){
        $this->model = $model;
        $this->color = $color;
        $this->year = $year;
    }
    public function startEngine(){
        echo "Engine Started";
    }
    public function getModel(){
        return $this->model;
    }   

    public function setModel($model){
        $this->model = $model;
    }
}
$myCar=new Car("","","");
$myCar->make="Toyota";
$myCar->setModel("Camry");
$myCar->color="Black";
$myCar->year=2020;
$myCar->startEngine();
echo $myCar->getModel();

$n=NULL;
var_dump($n);

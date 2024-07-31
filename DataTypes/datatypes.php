<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>
</head>
<body>
    <?php
    $num=25;
    $negativeNum=-6;
    $price=6.55;
    $greeting="Sachin";
    $isActive=true;
    $colors=array("Red","Green","Blue");
    $person=array(
        "name"=>"Sachin",
        "age"=>25,
    );
    class Person{
        public $name;
        public $age;
        public function __construct($name,$age)
        {
            $this->name=$name;
            $this->age=$age;
        }

        public function getFullInfo(){
            return $this->name . " " . $this->age;
        }
    }
    $newPerson=new Person("Sachin",23);
    echo("value of num: $num <br>");
    echo($colors[0]);
    echo($person["name"]);
    echo $newPerson->getFullInfo();

    var_dump($price);
    var_dump($negativeNum);
    var_dump($person);
    var_dump($newPerson);
    echo gettype($negativeNum);
    ?>
</body>
</html>
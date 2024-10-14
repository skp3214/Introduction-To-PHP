<?php 
class Persons{
    static $totalAccount=0;
    public $name;
    protected $age;
    private $socialSecurityNumber;

    public function setName($name){
        $this->name=$name;
        Persons::$totalAccount+=1;
    }
    public function setAge($age){
        $this->age=$age;
    }
    public function setSSN($ssn){
        $this->socialSecurityNumber=$ssn;
    }
    public function getInfo(){
        echo "Name: ".$this->name."<br>";
        echo "Age: ".$this->age."<br>";
        echo "socialSecurityNumber: ".$this->socialSecurityNumber."<br>";
    }
}

$sachin =new Persons();
$sachin->setName("Sachin");
$sachin->setAge(18);
$sachin->setSSN(54321);
$sachin->getInfo();
$bhanu=new Persons();
$bhanu->setName("Bhanu");
$totalAccount=Persons::$totalAccount;
echo $totalAccount;


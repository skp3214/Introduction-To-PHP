<?php
class BankAccount{
    private $accountNumber;
    private $balance=0;

    public function deposit($amount){
        $this->balance+=$amount;
    }
    public function withDrawal($amount){
        if($this->balance<$amount){
            echo "Cannot Withdraw ".$amount;
        }
        else{
            $this->balance-=$amount;
        }
    }

    public function getAmount(){
        return $this->balance;
    }

    public function setAccountNumber($accountNumber){
        $this->accountNumber=$accountNumber;
    }
}

$sachinAccount=new BankAccount();
$sachinAccount->setAccountNumber(123);
$sachinAccount->deposit(1230);
$sachinAccount->withDrawal(1400);
$amount=$sachinAccount->getAmount();
echo "<br> Your Balance is: ".$amount;
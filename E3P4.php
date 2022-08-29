<?php

class bankaccount{
    public $set_balance;
    public $set_ifsccode;
    public $set_accountnumber;
    public function __construct($set_balance,$set_ifsccode,$set_accountnumber){
        $this->set_balance=$set_balance;
        $this->set_ifsccode=$set_ifsccode;
        $this->set_accountnumber=$set_accountnumber;
    }
    public function get_balance(){
        return $this->set_balance;
    }
    public function get_ifsccode(){
        return $this->set_ifsccode;
    }
    public function get_accountnumber(){
        return $this->set_accountnumber;
    }
}
$account=new bankaccount(100,12345,123456789);
echo "Balance: ".$account->get_balance()."<br>";
echo "IFSC Code: ".$account->get_ifsccode()."<br>";
echo "Account Number: ".$account->get_accountnumber()."<br>";
?>

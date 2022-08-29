<?php
class bankaccount{
    public $set_balance;
    public $set_accountnumber;
    public function __construct($set_balance,$set_accountnumber){
        $this->set_balance=$set_balance;
        $this->set_accountnumber=$set_accountnumber;
    }
    public function get_balance(){
        return $this->set_balance;
    }
    public function get_accountnumber(){
        return $this->set_accountnumber;
    }
}
$account=new bankaccount(100,12345);
echo "Balance: ".$account->get_balance()."<br>";
echo "Account Number: ".$account->get_accountnumber()."<br>";


?>
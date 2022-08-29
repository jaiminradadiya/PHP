<?php

class Car{
    public $set_carname;
    public $set_cartype;
    public function __construct($set_carname,$set_cartype){
        $this->set_carname=$set_carname;
        $this->set_cartype=$set_cartype;
    }
    public function get_carname(){
        return $this->set_carname;
    }
    public function get_cartype(){
        return $this->set_cartype;
    }
}
$carob=new Car("BMW","SUV");
echo "Car Name: ".$carob->get_carname()."<br>";
echo "Car Type: ".$carob->get_cartype()."<br>";


?>
<?php

class student{
    public $set_sname;
    public $set_cartype;

    public function __construct($set_sname,$set_cartype){
        $this->set_sname=$set_sname;
        $this->set_cartype=$set_cartype;
    }
    public function get_sname(){
        return $this->set_sname;
    }
    public function get_cartype(){
        return $this->set_cartype;
    }
    public function __destruct(){
        echo "Destroying the car";
    }
}
$stud = new Student("RJ","Vk");
echo "Car Name: ".$car->get_sname()."<br>";
echo "Car Type: ".$car->get_cartype()."<br>";

?>
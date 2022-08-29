<?php
class fruit{
    public $set_fruitname;
    public $set_fruittype;
    public function __construct($set_fruitname,$set_fruittype){
        $this->set_fruitname=$set_fruitname;
        $this->set_fruittype=$set_fruittype;
    }
    public function get_fruitname(){
        return $this->set_fruitname;
    }
    public function get_fruittype(){
        return $this->set_fruittype;
    }
}   
$fruitob=new fruit("Apple","Red");
echo "Fruit Name: ".$fruitob->get_fruitname()."<br>";
echo "Fruit Type: ".$fruitob->get_fruittype()."<br>";

?>
<?php

class BaseClass {
    public $var = 'BaseClass var';
    function showVar() {
        echo $this->var;
    }
}
class ChildClass extends BaseClass {
    public $var = 'ChildClass var';
}
$obj = new ChildClass();
$obj->showVar();
?>



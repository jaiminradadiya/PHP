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
class GrandChildClass extends ChildClass {
    public $var = 'GrandChildClass var';
}
$obj = new GrandChildClass();
$obj->showVar();
?>

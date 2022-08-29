<?php
final class BaseClass {
   public function test() {
       echo "BaseClass::test()";
   }

   
   final public function moreTesting() {
       echo "BaseClass::moreTesting()";
   }
}

class ChildClass extends BaseClass {
}

?>
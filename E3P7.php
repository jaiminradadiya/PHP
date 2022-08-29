<?php
// Demonstrate function over loading by calculating addition and subtraction and multiplication
class Math
{
    public function add($a, $b)
    {
        return $a + $b;
    }
    public function sub($a, $b)
    {
        return $a - $b;
    }
    public function mul($a, $b)
    {
        return $a * $b;
    }
}
class Math2 extends Math
{
    public function add($a, $b)
    {
        return $a + $b + 10;
    }
    public function sub($a, $b)
    {
        return $a - $b - 10;
    }
    public function mul($a, $b)
    {
        return $a * $b * 10;
    }
}
$obj = new Math2();
echo $obj->add(10, 20) . "<br>";
echo $obj->sub(10, 20) . "<br>";
echo $obj->mul(10, 20) . "<br>";
?>

<?php
// Demonstrate function over loading by calculating area of circle and Area of rectangle
class Circle
{
    public $radius;
    public $color;
    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }
}
class Rectangle
{
    public $length;
    public $width;
    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }
    public function getArea()
    {
        return $this->length * $this->width;
    }
}
$circle = new Circle(5, "red");
$rectangle = new Rectangle(5, 10);
echo "Area of Circle: " . $circle->getArea() . "<br>";
echo "Area of Rectangle: " . $rectangle->getArea();
?>

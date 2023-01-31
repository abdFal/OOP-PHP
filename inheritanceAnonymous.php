<?php
class myShape {
  protected $width;
  protected $height;
  
  public function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
  }
  
  public function getArea() {
    return $this->width * $this->height;
  }
}

class Rectangle extends myShape {
  public function getPerimeter() {
    return 2 * ($this->width + $this->height);
  }
}

$rectangle = new Rectangle(4, 50);

echo "Area: " . $rectangle->getArea() . "\n"; 
// Output: Area: 200
echo "Perimeter: " . $rectangle->getPerimeter() . "\n"; 
// Output: Perimeter: 108



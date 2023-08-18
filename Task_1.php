<?php
/*
|Task 1: Class Inheritance**
|Create classes to represent geometric shapes, including circles and rectangles. 
|Implement methods for area calculation. You can use the provided example code as a reference.
|
| */
class Shape {
    public function calculateArea() {
        // This method will be overridden in subclasses
    }
}

class Circle extends Shape {
    public $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape {
    public $width;
    public $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Example usage
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

echo "Area of the circle with radius {$circle->radius}: {$circle->calculateArea()}<br>";
echo "Area of the rectangle with width {$rectangle->width} and height {$rectangle->height}: {$rectangle->calculateArea()}";
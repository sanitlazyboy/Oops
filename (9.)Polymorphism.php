<?php

interface Shape{
public function calcArea();
}

class Circle implements Shape{
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function calcArea(){
        return $this-> radius * $this->radius * pi();
    }
}

class Rectangle implements Shape{
    private $width;
    private $height;
    public function  calcArea()
    {
        return $this->width * $this->height;
    }
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
}

class Octagon implements Shape{
    protected $
}
 ?>
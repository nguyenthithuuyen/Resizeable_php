<?php

include_once 'Shape.php';
include_once 'resizeable/Resizeable.php';
class Rectangle  extends  Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(){
        return $this->height * $this->width;
    }

    public function calculatePerimeter(){
        return ($this->height + $this->width) * 2;
    }
    public function resize($resize)
    {
        return $this->calculateArea() + ($this->calculateArea()*$resize)/100;
        // TODO: Implement resize() method.
    }
}
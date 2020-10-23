<?php
include_once 'Circle.php';
include_once 'Rectangle.php';
include_once 'Square.php';
include_once 'resizeable/Resizeable.php';

$resize = Rand(1, 100);
$circle = new Circle('Circle ', 3);
echo 'S ban dau  cua circle la  :' . $circle->calculateArea() . '<br>';
echo 'S sau khi random cua circle  la :' . $circle->resize($resize) . '<br>';
$rectangle = new Rectangle('Rectangle ', 3, 4);
echo 'S ban dau  cua rectangle la  :' . $rectangle->calculateArea() . '<br>';
echo 'S sau khi random cua rectangle  la :' . $rectangle->resize($resize) . '<br>';
$square = new Square('square', 5, 6);
echo 'S ban dau  cua square la  :' . $square->calculateArea() . '<br>';
echo 'S sau khi random cua  square la :' . $square->resize($resize) . '<br>';
$arrayOfShape = array($circle, $rectangle, $square);

<?php
include 'Colorable.php';
include 'Shape.php';
include 'Rectangle.php';
include 'square.php';
include 'Circle.php';
include 'Cylinder.php';
$circle=new Circle('circle',7);
$rectangle=new Rectangle('Rectangle',6,8);
$square=new Square('Square',3);
$arr=[$circle,$rectangle,$square,$rectangle];
foreach ($arr as $key){
    if ($key instanceof Colorable){
        echo $key->howToColor().'<br>'.'<br>';
    }else {
    $rand=rand(1,100);
    echo $key->show().'<br>';
    echo 'My Area: '.$key->calculateArea().'<br>';
    echo 'My Perimeter: '.$key->calculatePerimeter().'<br>'.'<br>';}
};
<?php
include 'Resizeable.php';
include 'Shape.php';
include 'Rectangle.php';
include 'square.php';
include 'Circle.php';
include 'Cylinder.php';
$circle=new Circle('circle',7);
$rectangle=new Rectangle('Rectangle',6,8);
$square=new Square('Square',3);
$arr=[$circle,$rectangle,$square];
foreach ($arr as $key){
    $rand=rand(1,100);
    echo $key->show().'<br>';
    echo 'My Area: '.$key->calculateArea().'<br>';
    echo 'My Perimeter: '.$key->calculatePerimeter().'<br>';
    $key->resize($rand);
}
echo 'RESIZE: '.'<br>';
foreach ($arr as $key){
    $rand=rand(1,100);
    echo $key->show().'<br>';
    echo 'My Area: '.$key->calculateArea().'<br>';
    echo 'My Perimeter: '.$key->calculatePerimeter().'<br>';
//    $key->resize($rand);
}
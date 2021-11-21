<?php
include 'circle.php';
include 'compartor.php';
include 'CircleComarator.php';

$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 4);
$circleComparator = new CircleComarator();
echo($circleComparator->compare($circleOne, $circleTwo));
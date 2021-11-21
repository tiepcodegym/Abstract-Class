<?php
include 'Edible.php';
include 'Animal.php';
include 'Fruit.php';
include 'Chicken.php';
include 'Tiger.php';
include 'Apple.php';
include 'Orange.php';

echo('---- Animals<br>');

$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal) {
    echo $animal->makeSound() . '<br>';
        echo $animal->howToEat() . '<br>';
}

echo('---- Fruits<br>');

$fruits[0] = new Apple();
$fruits[1] = new Orange();

foreach ($fruits as $fruit) {
    echo $fruit->howToEat() . '<br>';
}

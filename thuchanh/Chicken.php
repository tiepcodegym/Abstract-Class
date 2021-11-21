<?php
class Chicken extends Animal implements Edible {
    public function makeSound()
    {
        return 'Chicken: cawcj cawcj';
    }
    public function howToEat()
    {
        return 'yes, you can eat Chicken';
    }
}
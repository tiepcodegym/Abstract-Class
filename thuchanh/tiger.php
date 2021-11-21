<?php
class Tiger extends Animal implements Edible
{
    public function makeSound()
    {
        return 'Tiger: meooo';
    }
    public function howToEat()
    {
        return 'yes, Tiger can eat you =))';
    }
}
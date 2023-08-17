<?php

class Animal {
    public function makeSound() {
        return "Some generic animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow Meow!";
    }
}

class Duck extends Animal {
    public function makeSound() {
        return "Quack Quack!";
    }
}


$animals = [
                new Dog(),
                new Cat(),
                new Duck()
            ];

foreach ($animals as $animal) {
    echo get_class($animal) . "says:".$animal->makeSound()."<br>";
}


?>

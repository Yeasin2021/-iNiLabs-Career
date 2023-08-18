<?php

/*
|   Task 4: Polymorphism**
|    Build a set of animal classes that demonstrate polymorphism by overriding a method for making sounds.
|
 */

        class Animal {
            public function makeSound() {
                // This method will be overridden in subclasses
            }
        }

        class Dog extends Animal {
            public function makeSound() {
                return "Woof woof!";
            }
        }

        class Cat extends Animal {
            public function makeSound() {
                return "Meow meow!";
            }
        }

        class Cow extends Animal {
            public function makeSound() {
                return "Moo moo!";
            }
        }

        // Example usage
        $dog = new Dog();
        $cat = new Cat();
        $cow = new Cow();

        echo "Dog says: {$dog->makeSound()}<br>";
        echo "Cat says: {$cat->makeSound()}<br>";
        echo "Cow says: {$cow->makeSound()}<br>";

?>
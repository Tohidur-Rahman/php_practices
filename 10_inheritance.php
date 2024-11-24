<?php 
/* 
Inheritance in OOP = When a class derives from another class.

The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

An inherited class is defined by using the extends keyword.

Inheritance (ইনহেরিটেন্স):

    ইনহেরিটেন্স OOP-এর একটি বিশেষ বৈশিষ্ট্য যা একটি ক্লাসকে অন্য একটি ক্লাসের প্রপার্টি এবং মেথড উত্তরাধিকার সূত্রে পেতে সাহায্য করে। এতে কোড পুনরায় ব্যবহৃত হয় এবং নতুন ক্লাস তৈরি করা সহজ হয়।
*/

class Cars {

    /*properties */
    public $name;
    public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
      }

    /*methods -- getter & setter */
    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
    function set_color($color){
        $this->color = $color;
    }

    function get_color(){
        return $this->color;
    }


}

class Toyota extends Cars{
    public $sceret_engine;

    function set_engine($engine){
        $this->sceret_engine = $engine;
    }

    function get_full_specs($name, $color){
        echo " This is $name car which is $color color and its chessis number# $this->sceret_engine";
    }
}

$myCar = new Toyota('Toyota', 'Blue');
// print_r($myCar);

$myCar->set_engine("TY897fr523t");

print_r($myCar);
$myCar->set_color('Green');
$myCar->set_name('BMW');
$myCar->get_full_specs($myCar->get_name(), $myCar->get_color());




/*

Polymorphism ( পলিমরফিজম ):
    পলিমরফিজমের মাধ্যমে একই নামের মেথড ভিন্ন ভিন্ন ক্লাসে বিভিন্ন কাজ করতে পারে। এতে কোডের গঠন আরও পরিষ্কার হয়।

*/

class Animal {
    public function sound() {
        echo "Some generic sound";
    }
}

class Dog extends Animal {
    public function sound() {
        echo "Bark";
    }
}

class Cat extends Animal {
    public function sound() {
        echo "Meow";
    }
}

$dog = new Dog();
$dog->sound(); // আউটপুট: Bark

$cat = new Cat();
$cat->sound(); // আউটপুট: Meow


















?>




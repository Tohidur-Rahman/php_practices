<?php 
/*
OOP stands for Object-Oriented Programming.

Procedural programming is about writing procedures or functions that perform operations on the data, while object-oriented programming is about creating objects that contain both data and functions.

Object-oriented programming has several advantages over procedural programming:

OOP is faster and easier to execute
OOP provides a clear structure for the programs
OOP helps to keep the PHP code DRY "Don't Repeat Yourself", and makes the code easier to maintain, modify and debug
OOP makes it possible to create full reusable applications with less code and shorter development time

*/


/*
ক্লাস:

একটি ক্লাস হলো একটি টেমপ্লেট বা ব্লুপ্রিন্ট যা থেকে অবজেক্ট তৈরি হয়। এটি প্রপার্টিজ এবং মেথডের একটি সমন্বয়, যা অবজেক্টের আচরণ এবং অবস্থা নির্ধারণ করে।

অবজেক্ট:
ক্লাসের টেমপ্লেট থেকে তৈরি নির্দিষ্ট উদাহরণকে অবজেক্ট বলে। এক বা একাধিক অবজেক্ট তৈরি করে একই ক্লাসের বৈশিষ্ট্যগুলিকে বিভিন্ন মান দিয়ে ব্যবহৃত হতে পারে।


Constructor:
ক্লাসের একটি বিশেষ মেথড যা অবজেক্ট তৈরি করার সময় স্বয়ংক্রিয়ভাবে কল হয়। এটি অবজেক্টের প্রাথমিক অবস্থান নির্ধারণে ব্যবহৃত হয়।

Destructor
ডেস্ট্রাক্টর মেথড অবজেক্ট  শেষ করার সময় স্বয়ংক্রিয়ভাবে কল হয়।

class Car {
    public function __destruct() {
        echo "Car object is destroyed";
    }
}

$myCar = new Car(); // ক্লাস ইনস্ট্যান্স তৈরি
unset($myCar); // অবজেক্ট ধ্বংস


*/


class Cars {

    /*properties */
    public $name;
    public $color;
    private $sceret_engine;

    /*constructor */
    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    /*destructor */
    function __destruct() {
        echo "The cars is {$this->name} and the color is {$this->color}.";
    }

    /*methods -- getter & setter */
    function set_name($brand_name){
        $this->name = $brand_name;
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

$new_car_object = new Cars("Toyota", "Blue");
print_r($new_car_object);
// print_r($new_car_object instanceof Cars); // 1 or True


// $new_car_object->set_name('Toyota');
$new_car_object->set_color('Red');

print_r($new_car_object);

$my_car_color = $new_car_object->get_color();
$my_car_brand = $new_car_object->get_name();

// echo $my_car_color, $my_car_brand;


// $second_car = new Cars();
// print_r($second_car);

// $second_car->set_color("Blue");
// $second_car->set_name("Ford");
// print_r($second_car);

// $m2_car_color = $second_car->get_color();
// $m2_car_brand = $second_car->get_name();

// echo $m2_car_brand, $m2_car_color;
?>
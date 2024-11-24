<?php

/* 
Autoloading (অটোলোডিং):

    autoloading একটি পদ্ধতি যা স্বয়ংক্রিয়ভাবে প্রয়োজনীয় ক্লাস বা ফাইল লোড করে। এতে ম্যানুয়ালি include বা require করার প্রয়োজন হয় না, যা কোড মডুলার এবং পরিচালনাযোগ্য করে তোলে। PHP-এর spl_autoload_register() ফাংশন দিয়ে কাস্টম অটোলোডার তৈরি করা যায়, এবং Composer-এর মাধ্যমে আরও সহজে অটোলোডিং ব্যবহৃত হয়।

*/


// Autoload.php ফাইল তৈরি করা
spl_autoload_register(function ($class) {
    include $class . '.php';
});

//এই Autoload.php ফাইলটি প্রতিটি ক্লাস লোডের সময় তার নাম অনুযায়ী ফাইলটি স্বয়ংক্রিয়ভাবে খুঁজে বের করে।

// Car.php ফাইল
class Car {
    public function drive() {
        echo "Driving";
    }
}

// Main.php ফাইল
include 'Autoload.php';

$myCar = new Car();
$myCar->drive(); // আউটপুট: Driving





/* 

Composer Autoloading (কম্পোজার অটোলোডিং)
PHP-এর জনপ্রিয় প্যাকেজ ম্যানেজার Composer স্বয়ংক্রিয়ভাবে অটোলোডিং সেটআপ করে দেয়। কম্পোজারের মাধ্যমে প্রোজেক্টে অটোলোডিং সেটআপ করলে প্রতিটি ফাইল আলাদাভাবে ইনক্লুড করার দরকার হয় না।

প্রথমে প্রোজেক্টের ডিরেক্টরিতে composer init কমান্ড দিয়ে composer.json ফাইল তৈরি করুন।
এরপর composer dump-autoload কমান্ড রান করলে, vendor ডিরেক্টরিতে একটি autoload.php ফাইল তৈরি হবে।
এই autoload.php ফাইলটিকে প্রোজেক্টে ইনক্লুড করে namespace সহ যেকোনো ক্লাস সহজে ব্যবহার করা যাবে।
php
Copy code


*/

// Example directory structure
// - src/
//     - Vehicles/
//         - Car.php
// - vendor/
// - composer.json
// - index.php


// file: composer.json 
/* 
    {
        "autoload": {
            "psr-4": {
                "Vehicles\\": "src/Vehicles"
            }
        }
    } 
    
*/


/* 
এরপর composer dump-autoload কমান্ড রান করুন।



    // index.php ফাইল
    require 'vendor/autoload.php';

    use Vehicles\Car;

    $myCar = new Car();
    $myCar->drive();

*/
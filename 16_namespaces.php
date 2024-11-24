<?php 
/*
Namespaces are qualifiers that solve two different problems:

They allow for better organization by grouping classes that work together to perform a task
They allow the same name to be used for more than one class


Namespace (নেমস্পেস):
  namespace একটি বিশেষ ফিচার যা বড় প্রজেক্টে বিভিন্ন ক্লাসের মধ্যে সংঘর্ষ এড়াতে সাহায্য করে। একাধিক ক্লাসের নাম একই হলে namespace ব্যবহারের মাধ্যমে তাদের পৃথক রাখা যায়।

Namespace ডিক্লেয়ারেশন:

  namespace ডিক্লেয়ারেশন অবশ্যই ফাইলের প্রথম লাইনে করতে হবে।

*/


namespace Html;


class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

$newTable = new Html\Table()
$row = new Html\Row()

<!DOCTYPE html>
<html>
<body>

<?php
$table->message();
?>

</body>
</html>

<?php
// car.php

namespace Vehicles;

class Car {
    public function drive() {
        echo "Car is driving";
    }
}

/* 
যখন আমরা ভিন্ন namespace থেকে ক্লাস ব্যবহার করব, তখন ক্লাসের আগে সেই namespace উল্লেখ করতে হবে। 
*/
//main.php
namespace Main;

include 'Car.php';

use Vehicles\Car; 

$myCar = new Car();
$myCar->drive(); // আউটপুট: Car is driving



/* Another Way */

// File: Vehicles/Car.php
namespace Vehicles;

class Cars {
    public function drive() {
        echo "Driving a vehicle car";
    }
}

// File: Main.php
namespace Main;

include 'Vehicles/Car.php';

$myCar = new \Vehicles\Cars();
$myCar->drive(); // আউটপুট: Driving a vehicle car

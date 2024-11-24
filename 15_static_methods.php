<?php 
/*
Static methods can be called directly - without creating an instance of the class first.

Static methods are declared with the static keyword: 


Static Method এবং Properties
স্ট্যাটিক মেথড এবং প্রপার্টি অবজেক্ট ছাড়াই ক্লাসের মাধ্যমে সরাসরি অ্যাক্সেস করা যায়।

*/

// static methods
class veiacle{
    protected static function getVeiacleType(){
        return "Car";
    }
}


class Cars extends veiacle{
    public $veiacle_type;

    public function __construct()
    {
        $this->veiacle_type = parent::getVeiacleType();
    }
}

$myCar = new Cars;
print_r($myCar);

echo "<br>";

echo $myCar->veiacle_type;



// static properties
class pi {
    public static $value=3.14159;
    public function staticValue() {
    return self::$value;
    }
}

$pi = new pi();
echo $pi->staticValue();



// static Method
class MathHelper {
    public static function add($a, $b) {
        return $a + $b;
    }
}

echo MathHelper::add(5, 10); // আউটপুট: 15


?>
<?php

/* 
Final Keyword (ফাইনাল কীওয়ার্ড):

    final কীওয়ার্ড ব্যবহার করে একটি ক্লাস বা মেথডকে চূড়ান্ত করে দেয়া হয়, যা অন্য কোনো ক্লাস দ্বারা ইনহেরিট বা ওভাররাইড করা যাবে না।

Final Class:

    যদি একটি ক্লাসকে final করা হয়, তাহলে সেই ক্লাসটি ইনহেরিট করা যাবে না। অর্থাৎ, সেই ক্লাসকে অন্য কোনো ক্লাস এক্সটেন্ড করতে পারবে না।
*/



final class Car {
    public function drive() {
        echo "Driving";
    }
}

// নিচের কোডে Error দিবে, কারণ Car ক্লাসটি final
class SportsCar extends Car {
    // Cannot extend a final class
}

/* 
Final Method:
    final কীওয়ার্ড মেথডের আগে ব্যবহার করলে, সেই মেথডটি ওভাররাইড করা যাবে না।
*/

class Car_final {
    final public function drive() {
        echo "Driving";
    }
}

class Sports_Car extends Car_Final {
    // নিচের কোডে Error দিবে, কারণ drive() মেথডটি final
    public function drive() {
        echo "Driving fast!";
    }
}

<?php 
//? Classes in PHP
//! Classes Extend
// class isLiked {
//     public $isLiked = "yes";

//     public function __construct($isLiked) {
//         $this->isLiked = $isLiked;
//     }
// }

// class test extends isLiked {
//     public function test($smth) {
//         return $smth;
//     }
// }

//! Classes, public and private functions in classes, static methods
// class Car { 
//     public $doors = 5;

//     // Static method give you direct access to the function or variable without assign an object to the classes
//     public static $haha = 'HAHA';
//     public function __construct($name, $doors, $year = 1999){
//     $this->numberOfDoors = $doors;
//     $this->name = $name;
//     $this->yearOfBirth = $year;
//     $this->age = $this->calAge($year);
//     }

//     public function printName() {
//         echo $this->doors;
//         // static variable and functions can't be accessed through $this inside the function, you have to use self::
//         echo self::$haha;
//     }

//     public function Statement() {
//         echo "This is the house with {$this->numberOfDoors}, My name is {$this->name}, I were borned in {$this->yearOfBirth} and I'm {$this->age} now.";
//     }

//     // protected function can only be used in this classes or classes that extend this class
//     // private function can only be used in this classes and this classes only
//     private function calAge($year) {
//         return 2020-$year;
//     }
// }

//! testing
// $honda = new Car('Tris', 5, new test('No'));

// Static
// echo Car::$haha;
// $honda->printName();

// echo $honda->name; 
// echo "<br />";
// echo $honda->numberOfDoors;
// echo "<br />";
// echo $honda->yearOfBirth;
// echo "<br />";
// $honda->printName();
// $honda->Statement();

// $test = new test("No");

// $test->test();

//! -> to access methods in obj or classes
//! => to access to elements in Array
?>
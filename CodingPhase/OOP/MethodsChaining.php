<?php 
//! Methods Chaining inside a single class
// class Test1 {
//     public function __construct($number)
//     {
//         $this->num = $number;
//         return $this;
//     }

//     public function plusOne() {
//         $this->num = ($this->num + 1);
//         return $this;
//     }

//     public function timeTwo() {
//         $this->num = $this->num * 2;
//         return $this;
//     }

//     public function print() {
//         echo $this->num;
//     }
// }

// $test = new Test1(1);
// $test->plusOne()->timeTwo()->print();  //! This is methods chaining

//! Chaining methods 2 or more classes 
// class EX2_1 {
//     public function __construct($a) {
//         $this->a = $a;
//     }

//     public function plusOne() {
//         $this->a = $this->a + 1;
//         return $this;
//     }

//     public function timeTwo() {
//         $this->a = $this->a * 2;
//         return $this;
//     }
// }

// class EX2_2 extends Ex2_1{
//     public function print() {
//         echo "<h1>{$this->a}</h1>";
//         return $this;
//     }

//     public function printRandom() {
//         echo "<br />";
//         echo "Random !";
//     }
// }

// $test = new EX2_2(1);
// $test->plusOne()->timeTwo()->print()->printRandom();

?>
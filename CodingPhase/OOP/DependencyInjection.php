<?php 
//! Dependecy Injection 
//? Passing down a class to a class
//  class Inventory {
//     public function carTotal($company) {
//         $companies = [
//             "BMW" => 240,
//             "Honda" => 140
//         ];

//         return $companies[$company];
//     }
//  }

//  class Honda {
//      public function __construct($name, Inventory $inventory) //! This is dependency injection
//      {
//          $this->name = $name;
//         $this->inventory = $inventory;
//      }

//      public function ECCHOO(){
//         echo $this->inventory->carTotal("BMW");
//      }
//  }

//   $smth = new Honda('Tris', new Inventory);
//   $smth->ECCHOO();
?>
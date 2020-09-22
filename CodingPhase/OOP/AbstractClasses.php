<?php 
//* Abstract classes will not allow you to do dependency injection
// abstract class Story {
//     abstract function echoSmth(); //* Works like interfaces
// }

// class Car extends Story {
//     public $company = 'Honda';

//     public function echoSmth() {
//         echo "Smth I don't know";
//     }

//     public function __construct($company)
//     {
//         $this->company = $company;
//     }
// }

// $car = new Car('Honda');

//* abstract functions is like interfaces, your new classes which extends fromt this abstract class need to have that function or else it will throw an error

?>
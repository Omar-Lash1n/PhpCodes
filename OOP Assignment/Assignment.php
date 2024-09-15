<?php
class User{

   /* private (x) protected (true) */ protected $username;

   public function setUsername($username){
        $this->username=$username;
   }

}

class Admin extends User{

    public function expressYourRole(){
        return 'Admin';
    }

    public function sayHello(){
        return 'Hello admin, '. $this->username; // problem when call username because it has a private access modifier
    }

}

$admin1 = new Admin();
$admin1->setUsername("Ahmed");

echo $admin1->sayHello();


// solution is 1- to make a getter in the user class (or) 2- make the access modifier protected 
// both are true
?>
<?php

// parent
class User {
    public $username;
    public static $count = 0;

    function __construct($name) {
        $this->username = $name;
        self::$count++; 
    }

   
    public static function getSystemStatus() {
        return "System is Active. Total Users Created: " . self::$count;
    }
}

// 2. sec child
class Admin extends User {
    public function accessControl() {
        return "Admin {$this->username} has full access.";
    }
}

// 3. sec child
class Customer extends User {
    public function viewProducts() {
        return "Customer {$this->username} is viewing products.";
    }
}

$admin1 = new Admin("Ahmed");
$user1 = new Customer("Sara");

echo $admin1->accessControl() . "<br>";
echo $user1->viewProducts() . "<br>";
echo User::getSystemStatus(); 

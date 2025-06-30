<?php

class User
{
  public $name;
  public $email;
  protected $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . ' logged in <br>';
  }
}

// Creating a new class that inherits from the User class using the "extends" keyword
class Admin extends User
{
  public $level;

  public function __construct($name, $email, $level)
  {
    $this->level = $level;

    // Using the parent keyword to call the constructor of the parent class (User)
    parent::__construct($name, $email);
  }

  public function login(){
    echo 'Admin ' . $this->name . ' logged in successfully <br>';
  }

  public function getStatus(){
    echo $this->status . '<br>';
  }
}

// Creating an instance of the Admin class and passing in arguments
$admin1 = new Admin('John Doe', 'jdoe@example.com', 5);
// $admin1->getStatus();
$admin1->login();

// Accessing the properties of the Admin class
// echo $admin1->name . '<br>';
// echo $admin1->email . '<br>';
// echo $admin1->level . '<br>';

// var_dump($admin1);
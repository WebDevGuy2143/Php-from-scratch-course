<?php

class User {
  // Properties
  public $name;
  public $email;
  private $status = 'active';

  // Constructor
  public function __construct($name, $email){
    echo "<strong>the constructor ran successfully</strong>";
    echo "<br>";
    echo "<strong>the user $name was created</strong>";

    $this->name = $name;
    $this->email = $email;
  }

  // Methods
  public function login(){
    echo "<br>";
    echo "<strong>the user $this->name was logged in</strong> ";
    echo "<br><br>";
  }
  // Getter method
  public function getStatus(){
    return $this->status;
  }

  // Setter method
  public function setStatus($status){
    $this->status = $status;
  }
}

// Instantiate a new object - pass in arguments
$user1 = new User('John Doe', 'jdoe@example.com');

// Assign values
// $user1->name = "John Doe";
// $user1->email = "jdoe@example.com";

// Call methods
$user1->login();

// Instantiate a new object - pass in arguments
$user2 = new User('Jane Doe', 'jDoe@example.com');

// $user2->name = "Jane Doe";
// $user2->email = "jDoe@example.com";

$user2->login();

// before creating public function getStatus()
// echo $user2->status; // private property cannot be accessed from outside the class -> will result in an error

// setting the status to inactive by passing an argument
echo $user2->setStatus('inactive');

// after creating public function getStatus() and public function setStatus()
echo $user2->getStatus();

// var_dump($user1);

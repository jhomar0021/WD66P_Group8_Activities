<?php
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['myName'];

login($username, $password, $name);

function login($username, $password, $name) {

    $defaultUsername = "admin";
    $defaultPassword = "password";

    if ($username === $defaultUsername && $password === $defaultPassword) {
      echo "Successfully Logged In";
      echo "\n";
      echo greetings ($name);
    } else if ($username ===  $defaultUsername && $password !== $defaultPassword) {
      echo "Wrong Password. Please Try Again";
    } else {
      echo "Account Does Not Exist";
    }
  }
  
  function greetings ($name){
    $name = ucwords ($name);
    return "Hello $name";
  } 



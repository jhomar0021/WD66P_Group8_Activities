<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$city = $_POST['city'];
$province = $_POST['province'];
$zipcode = $_POST['zipcode'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if(!isset($_POST['subscribe'])){
    $subscribe = " ";
}
else{
    $subscribe = "Thank you for subscribing to our news letter";
}

signup($firstname,$lastname,$birthday,$address,$city,$province,$zipcode,$email,$password,$password2,$subscribe);

function signup($firstname,$lastname,$birthday,$address,$city,$province,$zipcode,$email,$password,$password2,$subscribe){

    if  ($password !== $password2){
        echo "Unable to proceed because your password does not match";
    }
    else{
        
        $name = ucwords(strtolower($firstname." ".$lastname));
        $emailLow = strtolower($email);
        $fullAddress = ucwords(strtolower($address.", ".$city.", ".$province));
        
        echo nl2br("
        
        
        Hi $name .
        Welcome to your Tools Account.
        Your birthday is $birthday.
        You are currently residing at $fullAddress.
        Your email is $emailLow.
        $subscribe.
        
        Thank you for signing-up!");



    }
};


?>
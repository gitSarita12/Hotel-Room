<?php
include ('../config.php');


$fName = $_POST['firstname'];
$lName = $_POST['lastname'];
$aaddress = $_POST['Address'];
$ph = $_POST['phonenumber'];
$email = $_POST['Email'];
// $pass= $_POST['password'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $con->prepare("insert into users(fName, lName, ph, aaddress, email, pass) values(?,?,?,?,?,?)");
$stmt->bind_param("ssssss", $fName, $lName,$ph, $aaddress, $email, $pass);
$stmt->execute();
header("location: ../login/login.html");
// echo "registration Successfully...";
$stmt->close();
?>
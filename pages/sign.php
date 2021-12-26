<?php
include_once 'dbConnection.php';
ob_start();

$id=uniqid();

$name = $_POST['name'];
$name = stripslashes($name);
$name = addslashes($name);
$name= ucwords(strtolower($name));

$age = $_POST['age'];
$age = stripslashes($age);
$age = addslashes($age);

$gender = $_POST['gender'];
$gender = stripslashes($gender);
$gender = addslashes($gender);

$email = $_POST['email'];
$email = stripslashes($email);
$email = addslashes($email);

$password = $_POST['password'];
$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

$username = $_POST['username'];

$bio = $_POST['bio'];

$date=date("Y-m-d");

$q3=mysqli_query($con,"INSERT INTO user VALUES  ('$id' , '$name', '$age' , '$gender' , '$email' , '$password' , '$username' , '$bio' , '$date')");
if($q3)
{
$ref = $_GET['q'];
header("location:$ref");
}
else
{
header("location:index.php?q7=Email Already Registered!!!");
}
ob_end_flush();
?>
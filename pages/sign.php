<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$username = $_POST['username'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$password = $_POST['password'];
$email = $_POST['email'];
$bio = $_POST['bio'];
$picture = $_POST['picture'];
$regdate = date("Y/m/d");

$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));

$username = stripslashes($username);
$username = addslashes($username);
$username = ucwords(strtolower($username));

$gender = stripslashes($gender);
$gender = addslashes($gender);

$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

$email = stripslashes($email);
$email = addslashes($email);



$q3=mysqli_query($con,"INSERT INTO user VALUES  ('$name', '$username', '$gender' '$age' , '$password' , '$email' , '$bio', '$picture', '$regdate')");
if($q3)
{
session_start();
$_SESSION["email"] = $email;
$_SESSION["username"] = $username;

$ref = $_GET['q'];
header("location:$ref");
}
else
{
header("location:index.php?q7=Query error");
}
ob_end_flush();
?>
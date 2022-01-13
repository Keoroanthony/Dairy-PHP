<?php
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$id=uniqid();
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$date=date("Y-m-d");
$time=date("h:i:sa");
$q=mysqli_query($con,"INSERT INTO feedback VALUES  ('$id' , '$name', '$email' , '$message' , '$date' , '$time')")or die ("Error");
header("location:$ref?q=Thank you for your valuable feedback");
?>
<?php
session_start();
if(isset($_SESSION["username"])){
	unset($_SESSION['username']);
}
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$username = $_POST['username'];
$password = $_POST['password'];

$username = stripslashes($username);
$username = addslashes($username);
$password = stripslashes($password); 
$password = addslashes($password);
$password=md5($password); 
$result = mysqli_query($con,"SELECT id FROM user WHERE email = '$username' and password = '$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
while($row = mysqli_fetch_array($result)) {
	$id = $row['id'];
}
$_SESSION["id"] = $id;
$_SESSION["username"] = $username;
$date=date("Y-m-d");
$time=date("h:i:sa");
$ip=$_SERVER['REMOTE_ADDR'];
$q2=mysqli_query($con,"INSERT INTO log VALUES  ('$id', '$date' , '$time' , '$ip')") or die ('Error');
header("location:home.php?q1=1");
}
else
header("location:$ref?w=Wrong Username or Password");


?>
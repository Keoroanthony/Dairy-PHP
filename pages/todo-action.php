<?php 
session_start();

include 'dbConnection.php';
$ref=@$_GET['q'];
$email = $_SESSION['email'];
$id=uniqid();
$date=date("Y-m-d");
$time=date("h:i:sa");
$text = $_POST['text'];
$delete=0;

$q3=mysqli_query($con,"INSERT INTO todo VALUES  ('$email' , '$id', '$date' , '$time' , '$text' , '$delete')");
if($q3)
{
$ref = $_GET['q'];
header("location:$ref");
}
else
{
header("location:home.php?w=Query error");
}
ob_end_flush();
?>

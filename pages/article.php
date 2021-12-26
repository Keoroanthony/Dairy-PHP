<?php
session_start();
include_once 'dbConnection.php';
$title = $_POST['title'];
$text = $_POST['text'];
$id=uniqid();
$email=$_SESSION["email"];
$date=date("Y-m-d");
$time=date("h:i:sa");
$star=0;
$share=0;
$nick=0;
$admin=0;
/** uploading image */
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];    
$folder = "image/".$filename;
$q=mysqli_query($con,"INSERT INTO articles VALUES  ('$email', '$id' , '$date' , '$time' , '$text', '$title' , '$star', '$share', '$nick', '$admin', '$filename')")or die ("Error");

    move_uploaded_file($tempname, $folder);
    $msg = "Image uploaded successfully";
    header("location:write.php?q1=2");
?>
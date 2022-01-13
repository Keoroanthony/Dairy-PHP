
<?php 
session_start();

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {

	include 'dbConnection.php';
$ref=@$_GET['q'];
$email = $_SESSION['email'];
$id=uniqid();
$date=date("Y-m-d");
$time=date("h:i:sa");
$article = $_POST['article'];
$title = $_POST['title'];
$star=0;
$share=0;
$nick=0;
$admin=0;

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			header("location:$ref?w=Sorry, your file is too large.");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO articles(email, id, date, time, article, title, star, share, nick, admin, filename) 
				        VALUES('$email', '$id', '$date', '$time', '$article', '$title', '$star', '$share', '$nick', '$admin', '$new_img_name')";
				mysqli_query($con, $sql);
				header("Location: write.php?q1=2,w=Saved!");
			}else {
				header("location:$ref?w=You can only upload files of the type jpg, jpeg, png");
			}
		}
	}else {
		header("location:$ref?w=unknown error occurred!");
	}

}else {
	header("Location: compose.php");
}
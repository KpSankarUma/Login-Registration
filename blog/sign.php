
<?php
include 'config.php';

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$file=$_FILES['file'];

	$x=implode('*', $_FILES['file']['name']);

	$sql = "SELECT * FROM users WHERE email='$email'";
	$result = mysqli_query($conn, $sql);
	if (!$result->num_rows > 0) {
		$sql = "INSERT INTO users (username, email, password,file) VALUES ('$username', '$email', '$password','$x')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			$fCount=count($_FILES['file']['name']);
		        for ($i=0; $i < $fCount; $i++) { 
		          move_uploaded_file($_FILES['file']['tmp_name'][$i],'fileUpload/'.$_FILES['file']['name'][$i]);
		        }
		    session_start();
			$_SESSION['username']=$username;
			header('Location:welcome.php');
		} else {
			header("location: register.php?error=Something Went Wrong");
		}
	} else {
		header("location: register.php?error=Email Already Exists");
	}	
}
?>
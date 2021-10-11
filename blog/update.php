<?php 
	include 'config.php';
	$id=$_POST['id'];
	$title=$_POST['title'];
	$description=$_POST['desc'];
	$blog=$_POST['blog'];
	$file=$_FILES['file'];

	$x=implode("*", $_FILES['file']['name']);

	$sql="UPDATE `dashboard` SET `Title`='$title',`Description`='$description',`file`='$x',`blog_url()`='$blog' WHERE `id`='$id'";
	$ex=mysqli_query($conn,$sql);

	$fCount=count($_FILES['file']['name']);
	for ($i=0; $i < $fCount; $i++) {
		move_uploaded_file($_FILES['file']['tmp_name'][$i],'fileUpload/'.$_FILES['file']['name'][$i]);
	}
	include('welcome.php');
	
?>

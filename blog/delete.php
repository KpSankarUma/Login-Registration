<?php
$id= $_GET['id'];
$con = mysqli_connect("localhost","root","","login_register");
$sql="DELETE FROM dashboard WHERE id='$id'";
$ex=mysqli_query($con,$sql);
if($ex){
	header('Location:welcome.php');
}
else{
	echo "<script>alert('Error in deleteing...')</script>";
}
?>

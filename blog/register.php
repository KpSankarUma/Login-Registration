<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Register Form</title>
</head>
<body>
	<div class="container">
		<form action="sign.php" method="POST" class="login-email" enctype="multipart/form-data" onsubmit="return validation()">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <?php if (isset($_GET['error'])) { ?>
	     		<p class="error"><?php echo $_GET['error']; ?></p>
	     	<?php } ?>
			<div class="input-group">
				<input type="text" id="username" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div id="user" class="text-danger font-weight-bold"></div>
			<div class="input-group">
				<input type="email" id="email" placeholder="Email" name="email" required>
			</div>
			<div id="emailids" class="text-danger font-weight-bold"></div>
			<div class="input-group">
				<input type="password" id="password" placeholder="Password" name="password" required>
            </div>
            <div id="passwords" class="text-danger font-weight-bold"></div>
            <div class="input-group">
				<input type="password" id="con_password" placeholder="Confirm Password" required>
			</div>
			<div id="con_pass" class="text-danger font-weight-bold"></div>
			<div class="input-group">
				<input type="file" name="file[]" multiple accept="image/*" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>

	<script type="text/javascript">
		function validation() {
			var user = document.getElementById('username').value;
      		var pass = document.getElementById('password').value;
      		var cpass=document.getElementById('con_password').value;
      		var email=document.getElementById('email').value;

      		if(user.length < 5 ){
		        document.getElementById('user').innerHTML =" ** Username Length Must be 5 Character long";
		        return false;
		      }

      		if(email.indexOf('@') <= 0 ){
		        document.getElementById('emailids').innerHTML =" ** @ Invalid Position";
		        return false;
		      }
		      if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
		        document.getElementById('emailids').innerHTML =" ** . Invalid Position";
		        return false;
		      }
		      if((pass.length <= 7) || (pass.length > 20)) {
		        document.getElementById('passwords').innerHTML =" ** Passwords lenght must be between  7 and 20";
		        return false; 
		      }
		      if(pass!=cpass){
		        document.getElementById('con_pass').innerHTML =" ** Password does not match the confirm password";
		        return false;
		      }
		      if(cpass == ""){
		        document.getElementById('con_pass').innerHTML =" ** Please fill the confirmpassword field";
		        return false;
		      }
		}
	</script>

</body>
</html>
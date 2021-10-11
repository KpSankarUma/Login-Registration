<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Login Form</title>
</head>
<body>
	<div class="container">
		<form action="log.php" method="POST" class="login-email" onsubmit="return validation()">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<?php if (isset($_GET['error'])) { ?>
	     		<p class="error"><?php echo $_GET['error']; ?></p>
	     	<?php } ?>
			<div class="input-group">
				<input type="email" id="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" id="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div id="passwords" class="text-danger font-weight-bold"></div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
	<script>
		function validation() {
			var email=document.getElementById('email').value;
			var password=document.getElementById('password').value;

			if(emails.indexOf('@') <= 0 ){
		        document.getElementById('emailids').innerHTML =" ** @ Invalid Position";
		        return false;
	      	}

	      	if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
		        document.getElementById('emailids').innerHTML =" ** . Invalid Position";
		        return false;
	      	}
		    if((pass.length <= 7) || (pass.length > 20)) {
		        document.getElementById('passwords').innerHTML =" ** Passwords lenght must be between  7 and 20";
		        return false; 
		    }	
		}
	</script>
</body>
</html>
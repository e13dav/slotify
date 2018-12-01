<?php 

function sanitize($str_val)
{
	$str_val = strip_tags($str_val);
	$str_val = str_replace(" ", "", $str_val);
	return $str_val;
}

if(isset($_POST['loginButton'])) {
	// Login button was pressed
}

if(isset($_POST['registerButton'])) {
	// Register button was pressed
	$username = sanitize($_POST['registerUsername']);
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>

	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input type="text" id="loginUsername" name="loginUsername" placeholder="Your username" required>
			</p>
			
			<p>
				<label for="loginPassword">Password</label>
				<input type="password" id="loginPassword" name="loginPassword" placeholder="Your password" required>
			</p>

			<button type="submit" name="loginButton">LOG IN</button>
		</form>

		<form id="registerForm" action="register.php" method="POST">
			<h2>Create your free account</h2>

			<p>
				<label for="registerUsername">User name</label>
				<input type="text" id="registerUsername" name="registerUsername" placeholder="Your user name" required>
			</p>

			<p>
				<label for="registerFirstName">First name</label>
				<input type="text" id="registerFirstName" name="registerFirstName" placeholder="Your first name" required>
			</p>

			<p>
				<label for="registerLastName">Last name</label>
				<input type="text" id="registerLastName" name="registerLastName" placeholder="Your last name" required>
			</p>

			<p>
				<label for="registerEmail">Email</label>
				<input type="email" id="registerEmail" name="registerEmail" placeholder="Your email address" required>
			</p>
			
			<p>
				<label for="registerEmail2">Confirm email</label>
				<input type="email" id="registerEmail2" name="registerEmail2" placeholder="Your email address" required>
			</p>

			<p>
				<label for="registerPassword">Password</label>
				<input type="password" id="registerPassword" name="registerPassword" placeholder="Your password" required>
			</p>

			<p>
				<label for="registerPassword2">Confirm password</label>
				<input type="password" id="registerPassword2" name="registerPassword2" placeholder="Your password" required>
			</p>

			<button type="submit" name="registerButton">SIGN UP</button>
		</form>
	</div>

</body>
</html>
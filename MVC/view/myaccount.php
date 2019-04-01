<?php
	include_once 'init-h.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>TripInspire</title>
			<link rel="stylesheet" type="text/css" href="../../css/index-style.css">
			<link rel="stylesheet" type="text/css" href="../../css/myaccount-style.css">
	
	</head>
	
	<body>
		<?php	
			include_once 'outheader.php';
		?>
		<main class="main-section">
			<div id="wizard">
				<h2><span>🧙‍ You shall not pass without logging in!</span></h2>
			</div>
			<div class="forms-container">
				<div id="log-form" style="display:block">
					<form id="form-login" action="../controller/login-ctrl.php" method="POST" >
						<h1>Log In Now</h1>
						<hr>
						<label><b>Username</b></label>
						<input type="text" id="nume-login" name="uid" placeholder="Enter username or email" required>
						
						<label ><b>Password</b></label>
						<input type="password" id="pwd-login" name="pwd" placeholder="Enter password" patterm=".{5,}" required>
						
						<label id="rememberme">
							<input type="checkbox" checked="checked" name="remember">
							<b>Remember me</b>
						</label>

						<div class="clearfix">
							<button type="button" class="to-signup">Go to Sign Up</button>
							<button type="submit" name="login-but" class="login-button">Log In</button>
						</div>
					</form>
				</div>
				<div id="sign-form" style="display:none">
					<form id="form-signup" action="../controller/signup-ctrl.php" method="POST" >
						<h1>Sign Up Now</h1>
						<hr>
						<label ><b>Username</b></label>
						<input type="text" id="nume-sign" name="uid" placeholder="Enter username" patterm=".{5,}" required>
						
						<label ><b>Email</b></label>
						<input type="text" id="mail-sign" name="mail" placeholder="Enter email" pattern="^\w+([\.-_]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" required>
						
						<label ><b>Password</b></label>
						<input type="password" id="pwd-sign" name="pwd" placeholder="Enter password" patterm=".{5,}" required>
						
						<label ><b>Repeat Password</b></label>
						<input type="password" id="pwd-sign-repeat" name="pwd-repeat" placeholder="Enter password again" patterm=".{5,}" required>

						<label id="terms-cond">
							<input type="checkbox" id="terms-sign" checked="checked" name="terms" >
							Sunt de acord cu <a href="">Termenii si conditiile</a> TripInspire privind confidentialitatea si 
								prelucrarea datelor cu caracter personal.
						</label>

						<div class="clearfix">
							<button type="button" class="to-login">Go to Log In</button>
							<button type="submit" name="signup-but" class="signup-button">Sign Up</button>
						</div>
					</form>
				</div>
			</div>
		</main>
		<footer>
			<p>TripInspire - Web Application - Copyright & copy 2019</p>
		</footer>
		
		<script src="../../js/forms-switch.js"></script>
		<script src="../../js/menu-button.js"></script>
	</body>
</html>
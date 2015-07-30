<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
?>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/login.css">
		<script type="text/JavaScript" src="js/sha512.js"></script>
		<script type="text/JavaScript" src="js/forms.js"></script>
		<title>Login Pagina</title>
	</head>
	<body>
		<div id='login-box'>
			<form action="includes/process_login.php" method="post" name="login_form">
				<table>
					<tr>
						<td>
							E-mail
						</td>
						<td>
							<input type="text"
								   name="email"
								   placeholder="E-mailadres" />
						</td>
					</tr>
					<tr>
						<td>
							Password
						</td>
						<td>
							<input type="password"
								   name="password"
								   placeholder="Password"
								   id="password" />
						</td>
					</tr>
					<tr>
						<td colspan='2' style='text-align:center;'>
							<br />
							<input type="submit"
								   value="Login"
								   onclick="formhash(this.form, this.form.password);" />
						</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>
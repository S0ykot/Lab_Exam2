
<html>
<head>
	<title>Login</title>
</head>
<body>

<table border="1" width="50%" align="center">
	<tr>
		<td width="100"><img src="https://www.logofound.com/wp-content/uploads/2016/09/business-logo-company-01-230x230.jpg" height="100" width="100"></td>
		<td align="right"><a href="home.php">Home</a> | <a href="login.php">Login</a> | <a href="reg.php">Registration</a></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<br>
				<fieldset style="width:200;">
					<legend><h3>LOGIN</h3></legend>
					<form method="POST" action="">
						<table border="0">
							<tr>
								<td>
									Username: <input type="text" name="username"><br><br>
									Password: <input type="password" name="pass">
								</td>
							</tr>
							<tr>
								<td>
									<hr>
									<input type="checkbox" name="remem"> Remember me
								</td>
							</tr>
							<tr>
								<td>
									<input type="submit" name="submit"> &nbsp; <a href="forget.php">Forget Password?</a>
								</td>
							</tr>
						</table>
					</form>
				</fieldset><br>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">Copyright &copy; 2017</td>
	</tr>
</table>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
	$name = $_POST['username'];
	$pass = $_POST['pass'];
	if ($name=='admin' AND $pass=='admin') {
		$_SESSION['auth']=md5($name.$pass);
		 header('location:dashboard.php');
	}
	else
	{
		header('location:login.php');
	}
}


?>
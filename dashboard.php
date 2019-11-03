<?php
session_start();
if(isset($_SESSION['auth']))
{


?>

<html>
<head>
	<title>Home</title>
</head>
<body>
<center>
<table border="1" width="60%">
	<tr>
		<td width="100"><img src="https://www.logofound.com/wp-content/uploads/2016/09/business-logo-company-01-230x230.jpg" height="100" width="100"></td>
		<td align="right"> Login as <a href="profile.php">Bob</a><a href="logout.php">| Logout</a> </td>
	</tr>
	<tr>
		<td width="20px">
			<p>Account</p>
			<hr>
			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="profile.php">Profile</a></li>
				<li><a href="editprofile.php">Edit Profile</a></li>
				<li><a href="changepic.php">Change Profile Picture</a></li>
				<li><a href="changepass.php">Change Password</a></li>
				<li><a href="logout.php">Logout</a></li>
				
				
			</ul>
		</td>
		<td><h3>Welcome </h3></td>
	</tr>
		<td colspan="2" align="center">Copyright &copy; 2017</td>
	</tr>
</table>
</center>
</body>
</html>


<?php

}
else
{
	header('locattion:login.php');
}

?>
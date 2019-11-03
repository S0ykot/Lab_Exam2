
<html>
<head>
	<title>Edit Profile</title>
</head>
<body>
<center>
<table border="1" width="60%">
	<tr>
		<td width="100"><img src="https://www.logofound.com/wp-content/uploads/2016/09/business-logo-company-01-230x230.jpg" height="100" width="100"></td>
		<td align="right"> Login as <a href="profile.php">Bob</a><a href="logout.php">| Logout</a> </td>
	</tr>
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
		<td align="center">
			<fieldset style="width: 480;">
				<legend>EDIT PROFILE</legend>
				<table border="0" width="60%" align="center">
					<tr>
						<td>Name</td>
						<td align="right">:<input type="text" name="name"></td>
					</tr>
					<tr><td colspan="2"><hr></td></tr>
					<tr>
						<td>Email</td>
						<td align="right">:<input type="email" name="email"></td>
					</tr>
					<tr><td colspan="2"><hr></td></tr>
					<tr>
						<td>Gender</td>
						<td align="right">:<input type="radio" name="gender">Male<input type="radio" name="gender">Female<input type="radio" name="gender">Other</td>
					</tr>
					<tr><td colspan="2"><hr></td></tr>
					<tr>
						<td>Date of Birth</td>
						<td align="right">:<input type="text" name="dob"><br><i>(dd/mm/yyyy)</i></td>
					</tr>
					<tr><td colspan="2"><hr></td></tr>
					<tr>
						<td>
							<input type="submit" name="submit">
						</td>
					</tr>
				</table>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
			</fieldset>
		</td>
	</tr>
		<td colspan="2" align="center">Copyright &copy; 2017</td>
	</tr>
</table>
</center>
</body>
</html>
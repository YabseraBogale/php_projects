<?php
session_start();
?>
<html>
	<head>
		<link rel="stylesheet" href="./login.css">
		<title>Log in</title>
		</head>
		<body>
			<?php 
			if($_Post["submit"]){
				$userdata=$_Post["username/email"];
				$password=$_Post["password"];
				$_Session["username/email"]=$userdata;
				$_Session["pd"]=$password;
				echo "logged in";
		?>	
			<?
			 else{
			?>
			<form method="post" action="./login.php">
				<table>
					<tr>
						<td>
							Username/Email
						</td>
						<td>
							<input type="text" name="username/email"/>
						</td>
						</tr>
						<tr>
						<td>
							password
						</td>
						<td>
							<input type="password" name="username/email"/>
						</td>
						</tr>
						<tr>
						<td>
							<input type="submit" value="Submit" name="submit">
							<input type="reset" value="Cancel"/>
						</td>
						</tr>
				</table>
			</form>
			<?
				}
			?>
			</body>
	</html>

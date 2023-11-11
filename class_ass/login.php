<html>
<head>
	<title>
		Login Page
		</title>
</head>
<?php
	session_start();
	if(isset($_SESSION['username'])){
		$loggedinUser=$_SESSION['username'];
		echo "Welcome $loggedinUser you are logged in";
		echo "<br> <a href='logout.php'>logout</a>";
	} else{
		if(isset($_POST['login'])){
			$username=$_POST['username'];
			$password=$_POST['password'];
			if($username === "admin" && $password === "password"){
					$_SESSION['username']=$username;
					header('Location:login.php');
					exit;
			}
			else{

				echo "Invalid Username or password";
			}
		}
		else{
				echo "
					<form method='POST' action='login.php'>
						<p>
							Enter username <input type='text' name='username'>
						</p>
						<p>
							Enter password <input type='password' name='password'>
						</p>
						<p>
							<input type='submit' name='login' value='Login'>
						</p>
					</form>
				";

			}
	}
?>
</html>

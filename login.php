<?php
	include("scripts/config.php");
	session_start();
	
	$error = false;
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = mysqli_real_escape_string($db, $_POST["username"]);
		$password = mysqli_real_escape_string($db, $_POST["password"]);
		
		$query = "SELECT id FROM users WHERE username = '$username' AND password = '$password';";
		$res = mysqli_query($db, $query);
		$rows = mysqli_num_rows($res);
		
		if($count == 1) {
			$_SESSION["username"] = $username;
			header("location:hai.html");
		} else {
			$error = true;
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login tea party</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>tea party login</h1>
		<?php
			if($error) {
				echo "<h3 style='color:red;'>Error wrong login credentials</h3>";
			}
		?>
		<form action="" method="POST">
			<input type="text" name="username" placeholder="username"/>
			<input type="password" name="password" placeholder="password"/>
			<input type="submit" value="Submit"/>
		</form>
	</body>
</html>
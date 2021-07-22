<?php
try{

	define("DB_SERVER", "localhost");
	define("DB_USERNAME", "root");
	define("DB_PASSWORD", "");
	define("DB_DATABASE", "accounts");
	
	$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	if(mysqli_connect_errno()) {
		echo "Connection error3: " . mysqli_connect_error();
		causeARandomERrror($nonexistentvar);
		$query = "CREATE DATABASE IF NOT EXISTS" . DB_DATABASE . ";";
		if(mysqli_query($db, $query)) {
			echo "Database created!";
			$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		} else {
			echo "Couldn't create database!";
			die();
		}
	}
}catch(Exception $e) {
	echo "error: " . $e->getMessage();
}
?>

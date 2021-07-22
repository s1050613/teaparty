<?php
	define("DB_SERVER", "localhost");
	define("DB_USERNAME", "root");
	define("DB_PASSWORD", "");
	define("DB_DATABASE", "accounts");
	
	$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	if(mysqli_connect_errno()) {
		echo "Connection error: " . mysqli_connect_error();
		/*
		$query = "CREATE DATABASE " . DB_DATABASE . ";";
		if(mysqli_query($db, $query)) {
			echo "Database created!";
		} else {
			echo "Couldn't create database!";
		}
		*/
	}
?>
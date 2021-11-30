<?php

require 'config.php';



try {
	$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
	$options = array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	  );
	$pdo = new PDO($dsn, $user, $password);

	if ($pdo) {
		echo "Connected to the $db database successfully!!!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}
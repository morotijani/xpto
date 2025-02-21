<?php
	declare(strict_types=1);

	// ini_set('display_errors', '1');
	// ini_set('display_startup_errors', '1');
	// error_reporting(E_ALL);

	
	require "../bootstrap.php";

	use System\DataController;

	$requestMethod = $_SERVER["REQUEST_METHOD"];
	$controller = new DataController($dbConnection, $requestMethod);
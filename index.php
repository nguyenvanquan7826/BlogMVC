<?php 
	
	$action = $_GET['action'];
	$controller = $_GET['controller'];

	$controllerName = $controller .'Controller';

	require_once('controllers/'. $controllerName .'.php');

	$controller = new $controllerName();
	$controller->$action();
?>
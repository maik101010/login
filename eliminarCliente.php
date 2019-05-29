<?php 
	require_once 'determ.php';
	$cedula = $_GET["cedula"];
	$objeto = new Login;
	//echo $cedula;
	$objeto->eliminarCliente($cedula);

 ?>
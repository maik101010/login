<?php 

	require_once 'determ.php';

	$objeto = new Login;

	$moroso = 'M';
	$noMoroso = 'N';

	$cedula = $_POST["cedula"];
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$telefono = $_POST["telefono"];
	$direccion = $_POST["direccion"];
	$departamento = $_POST["departamento"];
	$ciudad = $_POST["ciudad"];
	$prestamo = $_POST["prestamo"];
	$observacion = $_POST["observacion"];


	if (isset($_POST["moroso"])) {		
		$objeto->insertarCliente($cedula, $nombre, $apellido, $telefono, $direccion, $departamento, $ciudad, $prestamo, $observacion, $moroso);
	}else{
		$objeto->insertarCliente($cedula, $nombre, $apellido, $telefono, $direccion, $departamento, $ciudad, $prestamo, $observacion, $noMoroso);
	}
	
	
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/		xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Home</title>
		<link href="css/home.css" rel="stylesheet" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="js/cosas.js"></script>
<!------ Include the above in your HEAD tag ---------->
	</head>
	<body>
		
		<nav class="navbar navbar-inverse sidebar" role="navigation">
    		<div class="container-fluid">
    			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Menu</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="inicio.php">Inicio<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
						<li class="dropdown">	
		                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
							<ul class="dropdown-menu forAnimate" role="menu">
								<li><a href="clientes.php">Nuevos</a></li>
								<li><a href="clientes_morosos.php">Morosos</a></li>
								<li><a href="clientes _que_no_existen.php">No Existen</a></li>
								<li><a href="clientes_a_sacar.php">Clientes a Sacar</a></li>
							</ul>
						</li>
						<li><a href="#">Prestamos<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
						<li ><a href="#">Deuda Global<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="main">
			<div>
				<h2>Registro de clientes</h2>
			</div>
			<div class="container">
				<?php 
					require_once "determ.php";
					$data = new Login;
					$arr = $data->obtenerClientesMorosos();
					//var_dump($arr);
				 ?>
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Nombre</th>
				      <th scope="col">Apellido</th>
				      <th scope="col">Ciudad</th>
				      <th scope="col">Prestamo</th>
				      <th scope="col">Operación</th>
				    </tr>
				  </thead>

				  <?php foreach ($arr as $row) {?>
				 
				  <tbody>
				    <tr>
				      <td><?php echo $row["cedula"] ?></td>
				      <td><?php echo $row["nombre"] ?></td>
				      <td><?php echo $row["apellido"] ?></td>
				      <td><?php echo $row["ciudad"] ?></td>
				      <td><?php echo $row["prestamo"] ?></td>
				      <td><a href="eliminarCliente.php?cedula=<?php echo $row["cedula"];?>">Eliminar</a></td>
				     <!--  <td>Otto</td>
				      <td>@mdo</td> -->
				    </tr>
				    <!-- <tr>
				      <th scope="row">2</th>
				      <td>Jacob</td>
				      <td>Thornton</td>
				      <td>@fat</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Larry</td>
				      <td>the Bird</td>
				      <td>@twitter</td>
				    </tr> -->
				  </tbody>

				   <?php  } ?> 
				</table>
			</div>
		</div>
	</body>
</html>
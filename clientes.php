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
			<div class="container">
				<div>
					<a href="view_clientes.php">Ver clientes</a>
				</div>

				<div>
					<a href="clientes_morosos.php">Clientes morosos</a>
				</div>

				<div class="col-md-3"></div>
				<div class="col-md-6">
    				<div class="form-area">  
        				<form role="form" action="controlarInsert.php" method="POST">
                    		<h3 style="margin-bottom: 25px; text-align: center;">CLIENTES NUEVOS </h3>
		    				<div class="form-group">
								<input type="text" class="form-control" id="name" name="nombre" placeholder="Nombres" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="mobile" name="apellido" placeholder="Apellidos" required>
							</div><div class="form-group">
								<input type="text" class="form-control" id="mobile" name="telefono" placeholder="telefono" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="mobile" name="cedula" placeholder="Cedula" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="direccion" placeholder="Direccion" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="ciudad" placeholder="Ciudad" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="departamento" placeholder="Departamento" required>
							</div>
		                    <div class="form-group">
								<input type="text" class="form-control" id="subject" name="prestamo" placeholder="Prestamo" required>
							</div>
		                    <div class="form-group">
		                    <textarea class="form-control" type="textarea" id="message" placeholder="Observaciones" maxlength="140" name="observacion" rows="3"></textarea>
		                        <span class="help-block"><p id="characterLeft" class="help-block ">Has llegado al límite</p>
		                        </span>                    
		                    </div>
		            		<button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Crear Cliente</button>
        				</form>
    				</div>
				</div>
			</div>
		</div>
	</body>
</html>
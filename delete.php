<!DOCTYPE html>
<html>
	<head>
		<title>Eliminar</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<body background="images/fondo.jpg">
		
			<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  				<a class="navbar-brand" href="#">
   	 				<img src="images/descarga.jpg" alt="logo" style="width:40px;">
  				</a>

  				<ul class="navbar-nav">
    				<li class="nav-item">
      					<a class="nav-link" href="index.php">Inicio</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="actualizar.php">Actualizar</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="lista.php">Lista</a>
    				</li>
  				</ul>
			</nav>
		<div align="center">	
			<h1>Eliminacion</h1>
			<br>
			<br>
			<?php 
				$servername = "localhost";
                $username = "debian-sys-maint";
                $password = "ws1SC0JreanoNAJ8";
                $dbname = "ClassRoom";

                $del = $_GET["id"];

                try {

                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                	
                	$sql = "delete from producto where id='$del'";
                	$conn->exec($sql);
                	echo "datos eliminados exitosamente";

                } 
                catch (Exception $e) {
                
                echo $sql . "<br>" . $e->getMessage();	
                }

                $conn = null;

			 ?>
			 <br>
			 <button class="btn btn-outline-secondary">
			 	<a href="lista.php">Regresar</a>
			 </button>
		</div>
	</body>
</html>
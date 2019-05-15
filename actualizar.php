<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<title>Actualizar Datos</title>
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
			<form face="Arial">
				<h1>Actualizar Datos</h1>
				<br>
				                <br>
                                <label>nombre del producto</label>
                                <br>
                                <input type="text" name="producto" pattern="^[a-zA-Z]+$" title="solo puede contener letras" maxlength="12">
                                <br>
				                        <label>precio</label>
                                <br>
                                <input type="text" name="price" id="precio" pattern="^[0-9.]+$" title="solo puede ingresar numeros">
                                <br>
                                <label>Estado</label>
                                <br>
                                <select id="estado" pattern="[Activo|Inactivo]" title="solo puede seleccionar las opciones disponibles">
                                        <option value="Activo">Activo</option>
                                        <option value="Inactivo">Inactivo</option>
                                </select>
                                <br>
                                <br>
                                <input type="submit" value="enviar" class="btn btn-outline-secondary">
                                 
                                <?php
                                  $servername = "localhost";
                                  $username = "debian-sys-maint";
                                  $password = "ws1SC0JreanoNAJ8";
                                  $dbname = "ClassRoom";

                                  $name = $_POST["producto"];
                                  $pro = $_POST["precio"];
                                  $stad = $_POST["estado"];

                                  $ides = $_GET["id"];
                                  $pn = $_GET["product_name"];
                                  $press = $_GET["price"];
                                  $act = $_GET["is_active"];

                                  try {
                                    
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $sql "update producto set product_name='$name', price='$pro', is_active='$stad' where id='$ides';";

                                    $conn->exec($sql);
                                    echo "datos actualizados";
                                  } 
                                  catch (Exception $e) {
                                    
                                    echo $sql . "<br>" . $e->getMessage();
                                  }
                                  $conn = null;
                                ?>
                                <br>

			</form>
		</div>
	</body>
</html>

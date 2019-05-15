<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="./css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title>Lista</title>
</head>
<body background="images/fondo.jpg">
	<div>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  			<a class="navbar-brand" href="#">
    				<img src="images/descarga.jpg" alt="logo" style="width:40px;">
  			</a>


		<ul class="navbar-nav">
			<li class="nav-item">
      				<a class="nav-link" href="index.php">Nuevo</a>
    			</li>
    			<li class="nav-item">
      				<a class="nav-link" href="actualizar.php">Actualizar</a>
    			</li>
    			<li class="nav-item">
      				<a class="nav-link" href="lista.php">Lista</a>
    			</li>
  		</ul>
	</nav>
</div>
<div align="center">

        <section class="col-md-10" style="align:center;">
            <h2 align="center">Listado de Clientes</h2>
            <br>
            <table class="table table-striped" border="4">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>estado</th>
                    <th>Opciones</th>
                </tr>
                
                <?php

                $servername = "localhost";
                $username = "debian-sys-maint";
                $password = "ws1SC0JreanoNAJ8";
                $dbname = "ClassRoom";

                try
                {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "select * from producto";

                if($conn)
                {
                    $result = $conn->query($sql);
                    foreach ($result as $value) {
                        echo 
                        "<tr><td>" . $value["id"] . "</td>" .
                        "<td>" . $value["product_name"] . "</td>" . 
                        "<td>" . $value["price"] . "</td>"
                        "<td>" . $value["is_active"] . "</td>";
                        
                        echo 
                        "<td><a href='actualizar.php?id=" . 
                        $value["id"] . 
                        "&name=" . $value["product_name"] . 
                        "&price=" . $value["price"] . 
                        "&active=" . $value["is_active"] . 
                        "'>Editar</a></td>" . 
                        "<td><a href='delete.php?id=". 
                        $value["id"] . "'>Eliminar</a>
                        </td>
                        </tr>";
                    }
                }

                else
                {
                    echo "sin datos";
                }

                }

                catch(PDOException $e)
                {
                    echo $sql . "<br>" . $e->getMessage();
                }
                $conn = null;
                ?>
              
            </table>
            <footer>&copy; Copyright 2019 SoftDragon</footer>
        </section>
    </div>
</body>
</html>

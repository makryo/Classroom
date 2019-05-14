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
<body background="images/marmol.jpg">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
  <a class="navbar-brand" href="#">
    <img src="images/descarga.jpg" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
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

                <c:forEach items="${lista}" var="li">

                    <tr>
                        <td>id</td>
                        <td>nombre</td>
                        <td>precio</td>
                        <td>estado</td>
                        <td>
                            <a class="btn btn-light" href="SerId?id=${li.id}">Editar</a>
                            <a class="btn btn-light" href="SerDelete?id=${li.id}">Borrar</a>
                        </td>
                    </tr>
                </c:forEach>
            </table>
            <footer>&copy; Copyright 2019 SoftDragon</footer>
        </section>
    </div>
</body>
</html>
<html>
	<head>
		<title>Formulario</title>
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
			<form face="Arial">
				<h1>Formulario de ingreso</h1>
				<br>
				<br>
				<label>nombre del producto</label>
				<br>
				<input type="text" name="product" id="producto" pattern="^[a-zA-Z]+$" title="solo puede contener letras" maxlength="12">
				<br>
				<label>precio</label>
				<br>
				<input type="text" name="price" id="precio" pattern="^[0-9.]+$" title="solo puede ingresar numeros" maxlength="8">
				<br>
				<label>Estado</label>
				<br>
				<select id="estado" pattern="[Activo|Inactivo]" title="solo puede seleccionar las opciones disponibles">
					<option value="Activo">Activo</option>
					<option value="Inactivo">Inactivo</option>
				</select>
				<br>
				<br>
				<input type="submit" value="enviar">
				<br>
			</form>
			<button>
				<a href="actualizar.html">Actualizar Datos</a>
			</button>
			<br>
			<br>
			<button>
				<a href="lista.html">Listar datos</a>
			</button>
		</div>
	</body>
</html>

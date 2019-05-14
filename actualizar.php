<html>
	<head>
		<title>Actualizar Datos</title>
	</head>
	<body background="images/marmol.jpg">
		<div align="center">
			<form face="Arial">
				<h1>Actualizar Datos</h1>
				<br>
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
                                <input type="submit" value="enviar">
                                <br>

			</form>
		</div>
	</body>
</html>

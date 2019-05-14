<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="./css/bootstrap.min.css" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Lista</title>
</head>
<body background="images/marmol.jpg">
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
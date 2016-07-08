<!DOCTYPE html>
<html>

<head>
 <meta charset="utf-8">
 <title>CAMBIAR(TITULO)</title>
 <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<header id="Cabecera">
   <h1 id="Titulo">Desarrollo de Aplicaciones Web</h1>
</header>

<nav>
    <ul id="Menu">
        <li id="MenuLi"> Home </li>
        <li id="MenuLi"> Blog </li>
        <li id="MenuLi"> Usuarios </li>
    </ul>
</nav>

<section id="Seccion">
    <h1 id="Texto">Aqui va algo</h1>
</section>

<aside id="Columna">
    <form id="formulario2" action="proceso.php" method="POST" >
		<table >
		<tr>
			<td> <label for="usuario">Usuario :</label></td>
			<td><input type="text" id="txtusr" name="txtusr" placeholder="Usuario" autofocus></td>
		</tr>  
		<tr>
			<td><label for="passwrd">Password :</label></td>
			<td><input type="password" id="txtpwd" name="txtpwd" ></td>
		</tr>
		<tr>
			<td><input type="submit" name="btn" value="Aceptar" id="btn"></td>
		</tr>
		</table>
		</form>

</aside>


<footer id="Pie">
    Derechos Reservados &copy; 2016-2017
</footer>

</body>

</html>
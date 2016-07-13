<!DOCTYPE html>
<html>

<head>
 <meta charset="utf-8">
 <title>CAMBIAR(TITULO)</title>
 <link rel="stylesheet" type="text/css" href="css/style.css">

<style type="text/css">
			
			#Menu li a:hover {
				background-color:#434343;
			}
			
			#Menu li ul {
				display:none;
				position: absolute;
                top: 202px;
                right:10px;
                min-width:100px;
			}
			
			#Menu li:hover > ul {
				display:block;
            }
			
		</style>

</head>

<body>
<header id="Cabecera">
   <h1 id="Titulo">Usuarios</h1>
</header>

<nav>
    <ul id="Menu">
        <li id="MenuLi"><a href="index.php"> Home </a></li>
        <li id="MenuLi"><a href="#"> Blog </a>
           <ul>
                <li><a href="https://san10avril10.blogspot.mx">San Carrillo</a></li>
                <li><a href="https://alanvazquezblog.wordpress.com">Alan Vázquez</a></li>
            </ul>
        </li>
        <li id="MenuLi"><a href="usuarios.php"> Usuarios </a></li>
    </ul>
</nav>

<section id="Seccion">
    <h1 id="Texto">Aqui la tabla de usuarios</h1>
</section>

<aside id="Columna">

    <h2 id="textoft">Ingresa</h2>
	<form id="formulario" action="proceso.php" method="POST">
    <h5 id="textof">Usuario: </h5>
		<input type="text" id="txtusr" name="txtusr" placeholder="Usuario" autofocus required>
        <h5 id="textof">Contraseña: </h5>
		<input type="password" id="txtpwd" name="txtpwd" required>
		<input type="submit" name="btn" value="Aceptar" id="btn" >
	</form>

</aside>


<footer id="Pie">
    Derechos Reservados &copy; 2016-2017
</footer>

<script src="plugins/jquery-2.1.4.min.js"></script>
<script>
$(document).ready(function(){
	// this is the id of the form
	$("#datos").find("form").on("submit", function (event) {
     event.preventDefault();
		$.ajax({
          url: "proceso.php", 
          type: "POST",
          //datos del formulario
          data: $(this).serialize(),
          //una vez finalizado correctamente
          success: function (response) {
		 	if(response!=""){
				alert(response); 
				// show response from the php script.	
			}
          }
     });
	});
});

</script>

</body>

</html>
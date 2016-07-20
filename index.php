<!DOCTYPE html>
<html>

<head>
 <meta charset="utf-8">
 <title>Home</title>
 <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<header id="Cabecera">
    <h1 id="Titulo">Bienvenido</h1>
</header>

<nav>
    <ul id="Menu">
        <li id="MenuLi"><a href="index.php"> Home </a></li>
        <li id="MenuLi"><a href="https://alanvazquezblog.wordpress.com"> Blog </a>
           <!---<ul>
                <li><a href="https://san10avril10.blogspot.mx">San Carrillo</a></li>
                <li><a href="https://alanvazquezblog.wordpress.com">Alan Vázquez</a></li>
            </ul> -->
        </li>
        <li id="MenuLi"><a href="usuarios.php"> Usuarios </a></li>
    </ul>
</nav>

<section id="Seccion">
    
    <h1 id="Texto">Galeria</h1>
   
    <article id="Galeriy">
    <!-- Aqui dentro va la galeria -->  
    </article>    
        
        <h1 id="Texto">Mapa</h1>
        <article id="map">
       <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d7479.414296028178!2d-101.2185426954016!3d20.394961084771783!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d20.396711!2d-101.221015!5e0!3m2!1ses!2smx!4v1468541784387" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </article>

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

<!--
<script type="text/javascript">

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 23.3854336, lng: -111.567688},
    zoom: 5
  });
}

    </script>
    
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDisqwraNaE7ca1qlZCpEcjdkqvvua-LQM&callback=initMap">
    </script>

-->
</body>

</html>
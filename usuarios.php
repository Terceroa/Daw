<!DOCTYPE html>
<html>

<head>
 <meta charset="utf-8">
 <title>Usuarios</title>
 <link rel="stylesheet" type="text/css" href="css/style.css">

<style type="text/css">
			
#SeccionA {
    float: left;
    width: 50%;
    height: 60%;
    margin: 20px 0px;
    padding: 20px;
    background: #F2F2F2;
    margin-left: 30px;
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
        <li id="MenuLi"><a href="https://alanvazquezblog.wordpress.com"> Blog </a>
         <!--  <ul>
                <li><a href="https://san10avril10.blogspot.mx">San Carrillo</a></li>
                <li><a href="https://alanvazquezblog.wordpress.com">Alan Vázquez</a></li>
            </ul> -->
        </li>
        <li id="MenuLi"><a href="usuarios.php"> Usuarios </a></li>
    </ul>
</nav>

<section id="SeccionA">
    <h1 id="Texto">Tabla de usuarios</h1>
   		<article>
		<?php 
			require_once 'control/usuarios.php';
			$clsUsuarios = new usuarios();
		 	$dsUsuarios= $clsUsuarios->getUsers();
			$tablausuarios="<table id='listaUsuarios'>";
        	$tablausuarios=$tablausuarios."<thead>";
            $tablausuarios=$tablausuarios."<tr>";
			$tablausuarios=$tablausuarios."<th>SEL</th>";
            $tablausuarios=$tablausuarios."<th>ID</th>";
            $tablausuarios=$tablausuarios."<th>USUARIO</th>";
            $tablausuarios=$tablausuarios."</tr>";			
			$tablausuarios=$tablausuarios."</thead>";		
			$tablausuarios=$tablausuarios."<tbody>";			
			if(sizeof($dsUsuarios) > 0) {
				foreach ($dsUsuarios as $usuario) {
					$tablausuarios=$tablausuarios."<tr>";
					$tablausuarios=$tablausuarios."<td><input type='checkbox' name='seleccionar' id='".$usuario->getId()."'/></td>";
					$tablausuarios=$tablausuarios."<td>".$usuario->getId().'</td>';
					$tablausuarios=$tablausuarios."<td>".$usuario->getUsername().'</td>';
					$tablausuarios=$tablausuarios."</tr>";			
				}
    		}else{ 
					$tablausuarios=$tablausuarios."<tr>";			
					$tablausuarios=$tablausuarios."<td>No existen Usuarios</td>";
				    $tablausuarios=$tablausuarios."</tr>";			
			}
			$tablausuarios=$tablausuarios."</tbody>";
			$tablausuarios=$tablausuarios."</table>";
		?>
		     
		
             <button id="btnBorrar">Eliminar Registro</button>
			
			<?php echo $tablausuarios; ?>
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
	
	$("#btnBorrar").click(function (event) {
		$("input:checkbox[name=seleccionar]:checked").each(function() {
          var parametros = {
          		"ID": $(this).attr("id")
		  	  };
			
		  $.ajax({
	      url: "borrar.php", 
          type: "POST",
          //datos del formulario
          data: parametros,
          //una vez finalizado correctamente
          success: function (response) {
               location.reload();
		  },
          error: function (response) {
               alert(response);
		  },
		  });

    	});
		//window.location.href = path + 'xls/articulosCica2016.xlsx';
     });
});

</script>

</body>
</html>
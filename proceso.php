<?php 
include_once "control/usuarios.php";
$nombre =$_POST['txtusr'];
$contasena = md5($_POST['txtpwd']);

$clsUsuarios = new usuarios();

if(isset($_POST['txtusr']) && isset($_POST['txtpwd'])){
	
	$currUserVO = $clsUsuarios->getByUserPass($nombre, $contasena);
	
	if(sizeof($currUserVO) > 0) {
		foreach ($currUserVO as $UserVO) {
    		echo "Bienvenido ". $UserVO->getUsername();
		}
    }
	else{
			echo "El usuario ".$_POST['txtusr']. " es incorrecto ".$contasena;
	}
}
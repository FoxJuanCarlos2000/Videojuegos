<?php 

require_once 'database.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$username = $_POST['username'];
$password = $_POST['password'];
$descuser = $_POST['descuser'];
$sexo = $_POST['sexo'];

$query = "INSERT INTO `usuarios` (`id`, `username`, `password`, `rol_id`, `nombre`, `correo`, `descuser`, `sexo`) VALUES (NULL, '$username', MD5('$password'), '2', '$nombre', '$correo', '$descuser', '$sexo');";

$guardar = mysqli_query($cn,$query);
			
			if($guardar){
			echo '<script type="text/javascript">alert("Agregado correctamente, Ya puedes iniciar sesión"); window.location="login.php";</script>';
		}else{
			die("Error".mysql_error($cn));
		}
			






 ?>
<?php 


require_once 'database.php';

$correo = $_POST['correo2'];
$password1 = MD5($_POST['password1']);
$password2 = MD5($_POST['password2']);



	$buscarCorreo = "SELECT * from usuarios WHERE correo='$correo'";
	$guardar2 = mysqli_query($cn,$buscarCorreo);
	$contador = mysqli_num_rows($guardar2);



	if($contador !== 1) {
        echo '<script type="text/javascript">alert("No existe el correo. Por favor intenta de nuevo");
		window.location="recuperapass.php";</script>';
      } 
else{

		if ($password1 !== $password2) {
		echo '<script type="text/javascript">alert("No coinciden las contraseñas, Intenta de nuevo");
		window.location="recuperapass.php";</script>';
	
}else{

	$query=	"UPDATE `usuarios` SET `password` = '$password2' WHERE `usuarios`.`correo` = '$correo'";
	$guardar = mysqli_query($cn,$query);
			
	if($guardar){
			echo '<script type="text/javascript">alert("Contraseña modificada correctamente"); window.location="login.php";</script>';
			}else{
				die("Error".mysql_error($cn));
		}
	}

}


 ?>
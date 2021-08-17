<?php 


include("database.php");
	$id = $_REQUEST['id'];
	$modifica = $_POST['modifica'];
	



	$query = "UPDATE `usuarios` SET `rol_id` = $modifica WHERE `usuarios`.`id` = '$id';";




	$resultado = mysqli_query($cn, $query);

	if($resultado){
			echo '<script type="text/javascript">alert("Miembro Editado Correctamente"); window.location="miembrosadmin.php";</script>';
		}else{
			die("Error".mysql_error($cn));
		}


 ?>
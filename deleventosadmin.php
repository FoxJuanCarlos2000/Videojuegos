<?php 

include("database.php");
$id = $_REQUEST['id'];


$query="DELETE FROM eventos WHERE id = '$id'";

$resultado=mysqli_query($cn,$query);
		if($resultado){
			echo '<script type="text/javascript">alert("Evento Eliminado Correctamente"); window.location="eventosadmin.php";</script>';
		}else{
			die("Error".mysql_error($cn));
		}






 ?>
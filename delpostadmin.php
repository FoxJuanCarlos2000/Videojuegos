<?php 

include("database.php");
$id = $_REQUEST['id'];


$query="DELETE FROM publicaciones WHERE id = '$id'";

$resultado=mysqli_query($cn,$query);
		if($resultado){
			echo '<script type="text/javascript">alert("Post Eliminado Correctamente"); window.location="admin.php";</script>';
		}else{
			die("Error".mysql_error($cn));
		}






 ?>
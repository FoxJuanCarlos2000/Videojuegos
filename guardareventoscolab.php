<?php 

include("database.php");

$tituloevento = $_POST['tituloevento'];
$fechaevento = $_POST['fechaevento'];
$plataformas = $_POST['plataformas'];
$region = $_POST['region'];
$categoriaevento = $_POST['categoriaevento'];
$descevento = $_POST['descevento'];





if(isset($_FILES['img'])){
	$nombreimg=$_FILES['img']['name'];
	$ruta=$_FILES['img']['tmp_name'];
	$destino="imagenes/eventos/".$nombreimg;

if(copy($ruta,$destino)){

	$query = "INSERT INTO `eventos`(`id`, `tituloevento`, `fechaevento`, `plataformas`, `region`, `descevento`, `categoriaevento`, `nombreimgevento`, `rutaevento`) VALUES (NULL,'$tituloevento','$fechaevento','$plataformas','$region','$descevento','$categoriaevento','$nombreimg','$destino')";

$guardar = mysqli_query($cn,$query);
			
			if($guardar){
			echo '<script type="text/javascript">alert("Agregado correctamente!"); window.location="eventoscolab.php";</script>';
		}else{
			die("Error".mysql_error($cn));
		}
	}
}

 ?>
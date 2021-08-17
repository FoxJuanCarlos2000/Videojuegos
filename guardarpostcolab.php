<?php 

include("database.php");

$titulo = $_POST['titulo'];
$fecha = $_POST['fecha'];
$usuario = $_POST['usuario'];
$categoria = $_POST['categoria'];
$desc_post = $_POST['desc_post'];




if(isset($_FILES['img'])){
	$nombreimg=$_FILES['img']['name'];
	$ruta=$_FILES['img']['tmp_name'];
	$destino="imagenes/publicaciones/".$nombreimg;

if(copy($ruta,$destino)){

	$query = "INSERT INTO `publicaciones`(`id`, `titulo`, `fecha`, `desc_post`, `usuario`, `categoria`, `nombreimg`,`ruta`) VALUES (NULL,'$titulo','$fecha','$desc_post','$usuario','$categoria','$nombreimg','$destino')";

$guardar = mysqli_query($cn,$query);
			
			if($guardar){
			echo '<script type="text/javascript">alert("Agregado correctamente!"); window.location="colab.php";</script>';
		}else{
			die("Error".mysql_error($cn));
		}
	}
}

 ?>
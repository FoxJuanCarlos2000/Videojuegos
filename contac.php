<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$para = 'piya2000dej@gmail.com';
$titulo = 'FORMULARIO DESDE EL SISTEMA VIDEOJUEGOS';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Teléfono: $telefono\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'nosotros.php';
</script>";
} else {
echo '<script type="text/javascript">alert("Mensaje Enviado!"); window.location="nosotros.php";</script>';
}
}
?>
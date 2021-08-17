<?php 
include_once 'database.php';


	session_start();



	if (isset($_SESSION['rol'])) {
		switch ($_SESSION['rol']) {
				case 1:
					header('location: admin.php');
				break;

				case 2:
					header('location: colab.php');
				break;
			
			default:
				
			}
	}


	if (isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = MD5($_POST['password']);

		$db = new Database();
		$query = $db->connect()->prepare('SELECT * FROM usuarios WHERE username = :username AND password = :password');
		$query->execute(['username' => $username, 'password' => $password]);

		$row = $query->fetch(PDO::FETCH_NUM);
		if ($row == true) {
			//validar rol
			$rol = $row[3];
			$_SESSION['rol'] = $rol;

			switch ($_SESSION['rol']) {
				case 1:
					header('location: admin.php');
				break;

				case 2:
					header('location: colab.php');
				break;
			
			default:
				
			}
		}else{
			//No existe el usuario
			echo "<script> alert('El usuario o contraseña son incorrectos, Vuelve a intentar');
			window.location= 'login.php'

			 </script>  ";
			
		}
	}




 ?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!--ESTILOS PARA EL LOGIN-->
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="./css/login.css">

  
<!--Otros estilos-->
  <script src="./js/jquery.js"></script>
	<script src="./js/jquery.dataTables.min.js"></script>
<!--TITULO DE MI DOCUMENTO-->
	<title>LOGIN</title>
</head>
<body>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
				

			<div class="card-header">
			<a href="./index.php" class="btn btn-block float-right login_btn">Regresa</a>
			</div>
			<div class="card-body">

				<form action="#" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Usuario" name="username" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Contraseña" name="password" required>
					</div>
					
					<div class="form-group">
						<input type="submit" value="Inicia sesión" class="btn btn-block float-right login_btn">
					</div>
				</form>
			</div>
			<div class="d-flex justify-content-center links">
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
				  Crear una cuenta nueva
				</button>
				</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Se te ha olvidado la contraseña
					<a href="./recuperapass.php" class="btn btn-primary" >Recuperar tú contraseña</a>
				  
				
				</div>
				
			</div>
		</div>
	</div>
</div>

<!-- Modal 1  -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Formulario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      	<!--Formulario-->
      	<form onreset="borrar();" action="guardarinfo.php" method="POST">
      	<div class="input-group mb-3">
		  <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i>
		</span>
		  <input type="text" class="form-control" placeholder="Ingresa tu nombre completo" aria-label="Username" aria-describedby="basic-addon1" name="nombre">
		</div>

		<div class="input-group mb-3">
		  <input type="text" class="form-control" placeholder="Ingresa tu correo electronico" aria-label="Recipient's username" aria-describedby="basic-addon2" name="correo">
		  <span class="input-group-text" id="basic-addon2"><i class="fa fa-envelope" aria-hidden="true"></i>
		</span>
		</div>

		<label for="basic-url" class="form-label">Tú nombre de usuario corto te ayudara a iniciar sesión</label>
		<div class="input-group mb-3">
		  <span class="input-group-text" id="basic-addon3"><i class="fa fa-user-plus" aria-hidden="true"></i>
		</span>
		  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Ingresa tu apodo o nombre de usuario corto" name="username">
		</div>

		<div class="input-group mb-3">
		  <input type="password" class="form-control" placeholder="Ingresa una contraseña segura" aria-label="Recipient's username" aria-describedby="basic-addon2" name="password">
		  <span class="input-group-text" id="basic-addon2"><i class="fa fa-unlock-alt" aria-hidden="true"></i>
		</span>
		</div>

		<div class="input-group mb-3">
		  <span class="input-group-text" id="basic-addon3"><i class="fa fa-female" aria-hidden="true"></i> <i class="fa fa-male" aria-hidden="true"></i>


		</span>
		  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Ingresa tu tipo de sexualidad" name="sexo">
		</div>

		<div class="input-group">
		  <span class="input-group-text"><i class="fa fa-comment" aria-hidden="true"></i>
		</span>
		  <textarea class="form-control" aria-label="With textarea" placeholder="En una breve descripción cuentanos ¿cuál es tu videojuego favorito &#128521;" name="descuser"></textarea>
		</div>

      </div>
      <div class="modal-footer">
        <input type="reset" class="btn btn-secondary" value="Vaciar formulario">
        <input type="submit" class="btn btn-primary" value="Enviar formulario" onclick="guardar();">

        </form>

      </div>
    </div>
  </div>
</div>
</div>
<!-- Modal 2  -->


<script>
	function borrar(){
		alert('La informaion del formulario se eliminara');
	}

	function guardar(){
		alert('Seras parte de la comunidad más chida crack <3');
		window.location="./login.php";
	}

</script>

  </body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
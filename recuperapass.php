
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
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
<body>




	<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
				

			<div class="card-header">
			<a href="./login.php" class="btn btn-block float-right login_btn">Regresa</a>
			</div>
			<div class="card-body">

<form action="./recuperapass2.php" method="POST">

			<div class="input-group mb-3">
		  		<input type="text" class="form-control" placeholder="Ingresa tu correo electronico" aria-label="Recipient's username" aria-describedby="basic-addon2" name="correo2" required>
		 		<span class="input-group-text" id="basic-addon2"><i class="fa fa-envelope" aria-hidden="true"></i>
				</span>
			</div>
					
				<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Ingrese Nueva Contraseña" name="password1" required>
				</div>

				<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Confirmar Contraseña" name="password2" required>
				</div>
					
				<div class="form-group">
						<input type="submit" value="Modificar" class="btn btn-block float-right login_btn">
				</div>
				</form>
			</div>
			
		</div>
	</div>
</div>


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
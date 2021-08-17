<?php 
	session_start();

	if (!isset($_SESSION['rol'])) {
		header('location: login.php');
		
	}else{
		if ($_SESSION['rol'] != 1) {
			header('location: login.php');
		}
	}


 ?>

<!doctype html>
<html lang="en">
  <head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--Link de Iconos-->
  <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/style.css">
<!--Otros estilos-->
  <script src="./js/jquery.js"></script>
	<script src="./js/jquery.dataTables.min.js"></script>
 
  

<!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="./index.php"><img class="logo" src="./imagenes/LOGO.png" onmouseenter="bigImg(this)" onmouseleave="normalImg(this)"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
           
           <li class="nav-item">
              <a class="nav-link" href="index.php" onmouseover="title='Volver a pantalla de inicio';">Inicio</a>
            </li>

			<li class="nav-item">
              <a class="nav-link" href="admin.php" onmouseover="title='Administracion de publicaciones';">Publicaciones</a>
            </li>

			<li class="nav-item">
              <a class="nav-link" href="miembrosadmin.php" onmouseover="title='Administracion de miembros';">Miembros</a>
            </li>

			<li class="nav-item">
              <a class="nav-link" href="eventosadmin.php" onmouseover="title='Administracion de eventos';">Eventos</a>
            </li>

			
           
            
          </ul>
          
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
            </li>
            <center><input class="form-control mr-sm-2" type="search" placeholder="Buscador"  id="inputBusqueda" onmouseover="title='Busca lo que necesites en la página';"></center>
            <div onmouseover="title='Puedes iniciar sesión o crear una cuenta nueva';">
			
           <a class="nav-link" href="./cerrarSesion.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
            Cerrar Sesión</a>
          </div>
            </ul>
          </form>
        </div>
      </nav>
	<title>ADMIN</title>
</head>
<body>

	 <!--BUSCADOR-->
	 <header>
      <div class="search" id="search">
        <table class="search-table" id="searchTable">
          <thead>
            <tr>
              <td></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="./index.php">Inicio</a></td>
            </tr>
            <tr>
              <td><a href="./fortnite.php">Fortnite</a></td></a>
            </tr>
            <tr>
              <td><a href="./freefire.php">FreeFire</a></td>
            </tr>
            <tr>
              <td><a href="./cod.php">Call of Duty</a></td>
            </tr>
            <tr>
              <td><a href="./pubg.php">Pubg</a></td>
            </tr>
            <tr>
              <td><a href="#">Contacto</a></td>
            </tr>
            <tr>
              <td><a href="#">Formulario</a></td>
            </tr>
            <tr>
              <td><a href="#">Nuevo juego</a></td>
            </tr>
            <tr>
              <td><a href="#">Nosotros</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </header>

    <br><br><br>
          <!--Breadcrumbs-->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.php"><i class="fa fa-home"></i></a></li>
		  	<li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item"><a href="miembrosadmin.php">Miembros</a></li>
            
          </ol>
        </nav>



<!--Miembros admin-->
<div class="container">
<table class="table table-striped table-hover table-dark table-responsive">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre Completo</th>
      <th scope="col" onmouseover="title='!- Administrador | 2- Colaborador';">Rol</th>
      <th scope="col">Usuario</th>
      <th scope="col">Correo</th>
      <th scope="col">Sexo</th>
      <th scope="col">Fecha y hora de registro</th>
      <th scope="col" colspan="2" style="text-align: center;">ACCIONES</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include("database.php");
  $query="SELECT * FROM usuarios";
  $resultado = mysqli_query($cn,$query);
  foreach($resultado as $res){
     ?>
    <tr>
      <th scope="row"><?php echo $res['id']; ?></th>
      <td><?php echo $res['nombre']; ?></td>
      <td onmouseover="title='!- Administrador | 2- Colaborador';"><?php echo $res['rol_id']; ?></td>
      <td><?php echo $res['username']; ?></td>
      <td><?php echo $res['correo']; ?></td>
      <td><?php echo $res['sexo']; ?></td>
      <td><?php echo $res['fechaR']; ?></td>

      <td><a data-toggle="modal" class="btn btn-warning" data-target="#exampleModal2" >
  <i class="fa fa-pencil-square-o fa-lg"></i></a></td>
     
      <td><a data-toggle="modal" data-target="#exampleModal" class="btn btn-danger">
  <i class="fa fa-trash-o fa-lg"></i></a></td>
<!--href="#?id=<?php echo $res['id']; ?>"-->
    </tr>
     <?php
    }
  ?>
  </tbody>
</table>
</div>


<!-- Modal eliminar miembros-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminación de Miembro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Estás seguro de eliminar al colaborador?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        <a href="delmiembrosadmin.php?id=<?php echo $res['id']; ?>" class="btn btn-danger">SI</a>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificación de miembro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Agrega como Miembro o Administrador

        <form action="editmiembrosadmin.php?id=<?php echo $res['id']; ?>" method="post">
        <div class="form-group">
      <select id="inputState" class="form-control" name="modifica">
        <option selected>Selecciona una opción</option>
        <option value='1'>1- ADMINISTRADOR</option>
        <option value='2'>2- COLABORADOR</option>
      </select>
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        <input type="submit" class="btn btn-success" value="SI">
        </form>
      </div>
    </div>
  </div>
</div>
	

<!--footer-->
<center>
      <footer class="footer" style="max-height: 2000px; background-color: white;">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4">
                
              <span class="copyright">VIDEOJUEGOS 2021</span>
              
              <div style="margin-top: 0px;">
            </div>
            </div>
            <div class="col-md-4">
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#" onmouseover="title='Ir a página de twitter';">
                    <i class="fa fa-twitter-square fa-4x"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#" onmouseover="title='Ir a página de facebook';">
                    <i class="fa fa-facebook-square fa-4x"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#" onmouseover="title='Ir a página de instagram';">
                    <i class="fa fa-instagram fa-4x"></i>
                  </a>
                </li>
              </ul>
              
             
            </div>
           
            <div class="col-md-4">
              <ul class="list-inline quicklinks">
                  <br>
                <li class="list-inline-item">
                  <p style="color: black;" onmouseover="title='Contacto con el admin';">(Cel) 468-686-7949</p>
                </li>
                
                
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </center>

<!--Script para llamar el buscador-->
    <script src="./js/buscador.js"></script>


    <script>
      function bigImg(x) {
        x.style.height = "64px";
        x.style.width = "64px";
      }

      function normalImg(x) {
        x.style.height = "50px";
        x.style.width = "50px";
      }
    </script>
      
  </body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
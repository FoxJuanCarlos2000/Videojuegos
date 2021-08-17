<?php 
	session_start();

	if (!isset($_SESSION['rol'])) {
		header('location: login.php');
		
	}else{
		if ($_SESSION['rol'] != 2) {
			header('location: login.php');
		}
	}


 ?>

 <!DOCTYPE html>
<html lang="en">
  <head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
              <a class="nav-link" href="colab.php" onmouseover="title='Agrega publicaciones';">Publicaciones</a>
            </li>

			<li class="nav-item">
              <a class="nav-link" href="eventoscolab.php" onmouseover="title='Agrega eventos';">Eventos</a>
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
	<title>COLABORADOR</title>
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
			<li class="breadcrumb-item"><a href="#">Colaborador</a></li>
      <li class="breadcrumb-item"><a href="eventoscolab.php">Eventos</a></li>
            
          </ol>
        </nav>

	<!--Publicaciones-->

  <div class="d-flex justify-content-center links">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <i class="fa fa-plus-square" aria-hidden="true"></i> 
          Crear un evento nuevo
        </button>
 </div>


 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Formulario de eventos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <!--Formulario-->
        <form onreset="borrar();" action="guardareventoscolab.php" method="POST" enctype="multipart/form-data">
        <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
    </span>
      <input type="text" class="form-control" placeholder="Ingresa el titulo del evento" aria-label="Username" aria-describedby="basic-addon1" name="tituloevento">
    </div>

    <div class="input-group mb-3">
      <input type="datetime-local" class="form-control" placeholder="Ingresa fecha y hora de la publicación" aria-label="Recipient's username" aria-describedby="basic-addon2" name="fechaevento">
      
    </div>

   

    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Ingresa las plataformas" aria-label="Recipient's username" aria-describedby="basic-addon2" name="plataformas">
      <span class="input-group-text" id="basic-addon2"><i class="fa fa-television" aria-hidden="true"></i>
    </span>
    </div>

    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Ingresa la región" aria-label="Recipient's username" aria-describedby="basic-addon2" name="region">
      <span class="input-group-text" id="basic-addon2"><i class="fa fa-globe" aria-hidden="true"></i>

    </span>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon2"><i class="fa fa-tag" aria-hidden="true"></i>
    </span>
      <div class="form-group">
      <select id="inputState" class="form-control" name="categoriaevento">
        <option selected>Selecciona una categoria...</option>
        <option value='Fortnite'>1- Fortnite</option>
        <option value='Free Fire'>2- Free fire</option>
        <option value='Call Of Duty'>3- Call of Duty</option>
        <option value='Pubg'>4- Pubg</option>
      </select>
    </div>
    </div>

    <div class="input-group">
      <span class="input-group-text"><i class="fa fa-comment" aria-hidden="true"></i>
    </span>
     <textarea class="form-control" aria-label="With textarea" placeholder="En una breve descripción del post &#128521;" name="descevento"></textarea>
    </div>

    <br>
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1"><i class="fa fa-picture-o" aria-hidden="true"></i>
    </span>
      <input type="file" class="form-control" placeholder="Ingresa el titulo del post" aria-label="Username" aria-describedby="basic-addon1" name="img" id="imagen">
    </div>




      </div>
      <div class="modal-footer">
        <input type="reset" class="btn btn-secondary" value="Vaciar formulario">
        <input type="submit" class="btn btn-primary" value="Enviar formulario">

        </form>

      </div>
    </div>
  </div>
</div>
</div>
<br><br>


 <!--Eventos-->

<?php 
    include("database.php");
  $query="SELECT * FROM eventos";
  $resultado = mysqli_query($cn,$query);
  foreach($resultado as $res){
  ?>



        <main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <h1 class="display-4 fst-italic text-center">CATEGORIA <?php echo $res['categoriaevento']; ?></h1>
    <?php
            $re=$res['nombreimgevento'];
           echo "<img width='1000' height='500' src='./imagenes/eventos/".$re."' />";
            ?>  
    <div class="" >
   <h3 class="display-4 fst-italic"><?php echo $res['tituloevento']; ?></h3>
   <h3 class="display-5 fst-italic">FECHA Y HORA: <?php echo $res['fechaevento']; ?></h3>
   <h3 class="display-5 fst-italic">PLATAFORMAS: <?php echo $res['plataformas']; ?></h3>
   <h3 class="display-5 fst-italic">REGIÓN(ES): <?php echo $res['region']; ?></h3>

      <p class="lead text-justify"><?php echo $res['descevento']; ?></p>
      </div>
  </div>


<?php 

}
   ?>



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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>
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
          
            <li class="nav-item dropdown">
              <a onmouseover="title='Se encuentran las diferentes categorias de videojuegos';" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Videojuegos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="./fortnite.php"><i class="fa fa-gamepad" aria-hidden="true"></i> Fortnite</a>
                <a class="dropdown-item" href="./freefire.php"><i class="fa fa-gamepad" aria-hidden="true"></i> FreeFire</a>
                <a class="dropdown-item" href="./cod.php"><i class="fa fa-gamepad" aria-hidden="true"></i> Call of Duty</a>
                <a class="dropdown-item" href="./pubg.php"><i class="fa fa-gamepad" aria-hidden="true"></i> Pubg</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onmouseover="title='Comunidad o informaci??n perteneciente a la pagina';">
                Comunidad
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="./miembros.php"><i class="fa fa-male" aria-hidden="true"></i>
                Miembros</a>
                <a class="dropdown-item" href="./eventos.php"><i class="fa fa-calendar-o" aria-hidden="true"></i>
                Eventos</a>
              </div>
            </li>


            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onmouseover="title='Contacto con nosotros o el admin';">
                Cont??cto
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="./nosotros.php"><i class="fa fa-users" aria-hidden="true"></i>
              Nosotros</a>
               </div>
            </li>

           
            
          </ul>
          
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
            </li>
            <center><input class="form-control mr-sm-2" type="search" placeholder="Buscador"  id="inputBusqueda" onmouseover="title='Busca lo que necesites en la p??gina';"></center>
            <div onmouseover="title='Puedes iniciar sesi??n o crear una cuenta nueva';">
           <a class="nav-link" href="./login.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
            Registro/Login</a>
          </div>
            </ul>
          </form>
        </div>
      </nav>
	<title>EVENTOS</title>
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
            <li class="breadcrumb-item"><a href="#">Comunidad</a></li>
            <li class="breadcrumb-item"><a href="./eventos.php">Eventos</a></li>
            
          </ol>
        </nav>




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
   <h3 class="display-5 fst-italic">REGI??N(ES): <?php echo $res['region']; ?></h3>

      <p class="lead text-justify"><?php echo $res['descevento']; ?></p>
      </div>
  </div>


<?php 

}
   ?>
<br><br>


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
                  <a href="#" onmouseover="title='Ir a p??gina de twitter';">
                    <i class="fa fa-twitter-square fa-4x"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#" onmouseover="title='Ir a p??gina de facebook';">
                    <i class="fa fa-facebook-square fa-4x"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#" onmouseover="title='Ir a p??gina de instagram';">
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
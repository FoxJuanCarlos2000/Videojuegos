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
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onmouseover="title='Comunidad o información perteneciente a la pagina';">
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
                Contácto
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="./nosotros.php"><i class="fa fa-users" aria-hidden="true"></i> Nosotros</a>
              </div>
            </li>

           
            
          </ul>
          
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
            </li>
            <center><input class="form-control mr-sm-2" type="search" placeholder="Buscador"  id="inputBusqueda" onmouseover="title='Busca lo que necesites en la página';"></center>
            <div onmouseover="title='Puedes iniciar sesión o crear una cuenta nueva';">
           <a class="nav-link" href="./login.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
            Registro/Login</a>
          </div>
            </ul>
          </form>
        </div>
      </nav>
	<title>NOSOTROS</title>
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
			<li class="breadcrumb-item"><a href="#">Contácto</a></li>   
			<li class="breadcrumb-item"><a href="./nosotros.php">Nosotros</a></li>           
          </ol>
        </nav>

<center>
      <div class="container marketing">
        <div class="row">
          <div class="col-lg-4">
            <i class="fa fa-eye fa-5x" aria-hidden="true"></i>
            <h2>VISIÓN</h2>
            <p>Llegar a todos los usuarios gamers de toda la republica mexicana.</p>
          </div>


          <div class="col-lg-4">
            <i class="fa fa-flag fa-5x" aria-hidden="true"></i>

            <h2>MISIÓN</h2>
            <p>Ser la mejor página de blog para gamers en battle royal online.</p>
          </div><!-- /.col-lg-4 -->


          <div class="col-lg-4">
            <i class="fa fa-diamond fa-5x" aria-hidden="true"></i>

            <h2>VALORES</h2>
            <p style="text-align: right;">
              <li>Honestidad</li>
              <li>Responsabilidad</li>
              <li>Compromiso</li>
              <li>Disciplina</li>
              <li>Perseveracia</li>
            </p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

</center>


     <!--formulario-->

     
<br>
<div class="container">
    <div class="" style="background-color: #B4E8F6; width: 100%; height: 100%; background-repeat: no-repeat;">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">COMENTARIOS O SUGERENCIAS</h2>
          <h2 class="section-subheading text-ligth">Ayudanos a mejorar la página, enviando tus comentarios o sugerencias crack &#128520;</h2>
         
        </div>
      </div>

      <div class="row" style="margin-top: 20px;" >
        
        <div class="col-lg-12">
          <form method="post" action="contac.php">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" required type="text" placeholder="Nombre *" required="required" data-validation-required-message="Porfavor ingresa tu nombre." name="nombre">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" required id="email" type="email" placeholder="Correo electronico *" required="required" data-validation-required-message="Porfavor ingresa tu correo electronico." name="email">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" required placeholder="Teléfono (Opcional)"  data-validation-required-message="Porfavor ingresa tu numero." name="telefono">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Mensaje *" required="required" data-validation-required-message="Porfavor ingresa tu mensaje." name="mensaje"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
       
                <input type="submit"  name="submit" value="Enviar" class="btn btn-primary btn-lg btn-block">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
 

<br>


<br><br>

<!--footer-->
<center>
      <footer class="footer" style="max-height: 2000px; background-color: white;">
        <div class="container">
        <div style="margin-top: 0px;">	
          <div class="row align-items-center">
            <div class="col-md-4">
                
              <span class="copyright">VIDEOJUEGOS 2021</span>
              
              
            
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
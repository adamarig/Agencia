<!doctype html>
<html lang="en">
  <head>
    <title>Hotel &mdash;AgenciaTIS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="cssHotel/custom-bs.css">
    <link rel="stylesheet" href="cssHotel/jquery.fancybox.min.css">
    <link rel="stylesheet" href="cssHotel/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="cssHotel/owl.carousel.min.css">
    <link rel="stylesheet" href="cssHotel/animate.min.css">
    <link rel="stylesheet" href="cssHotel/style.css">     
  </head>
  <body id="top">


<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="indexHotel.php">HotelGJ</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="indexHome.html" class="nav-link active">Home</a></li>
              <li><a href="indexHotel.php">Hotel</a></li>
              <li><a href="index.php">Autobuses</a></li>
            </ul>
          </nav>

          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="Cconsulta.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span
                  class="mr-2 icon-paper-plane"></span>Consultar tu Reservacion</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span
                class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image" style="background-image: url('imagesHotel/Hotel1.jpg');" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">Editar Reservación</h1>
            </div>

            <form method="POST" class="search-jobs-form">

            <?php
        if(isset($_POST['IdReservacionB'])){
          $idReservacion = $_POST['IdReservacionB'];
          $fechaLlegada= $_POST['llegada'];
          $fechaSalida = $_POST['salida'];
          $NumAdultos = $_POST['AdultosB'];
          $NumNinos = $_POST['ninosB'];
          $tipoHabitacion = $_POST['habitacion'];
          $nombreCliente = $_POST['cliente'];
          $telefono = $_POST['telefonoB'];
          $idCliente = $_POST['idClienteB'];

            $client = new SoapClient("http://54.162.111.41:8080/Hotel.wsdl");
        
            $parametros = array("idReservacion"=> $idReservacion , "fechaLlegada"=> $fechaLlegada, "fechaSalida" => $fechaSalida, "NumAdultos" => $NumAdultos, "NumNinos" => $NumNinos, "tipoHabitacion" => $tipoHabitacion, "nombreCliente" => $nombreCliente, "telefono" => $telefono, "idCliente" => $idCliente);
            $response = $client->__soapCall('EditarReservacion',array($parametros),);
            print"<h2>".$response->{'respuesta'}."</h2>";
        }
    ?>

              <div class="row mb-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <p>Ingresa tu Id Reservacion </p>
                  <input type="text" id="IdReservacionB" name="IdReservacionB" class="form-control form-control-lg" >
                </div>
              <div class="row mb-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <p>Fecha Llegada</p>
                  <input type="date" id="llegada" name="llegada" class="form-control form-control-lg" >
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <p>Fecha Salida</p>
                  <input type="date"  id="salida" name="salida"class="form-control form-control-lg" >
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <p>Adultos</p>
                  <select id="AdultosB" name="AdultosB" class="form-control" >
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <p>Niños</p>
                  <select id="ninosB" name="ninosB" class="form-control">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <p>Habitación</p>
                  <select id="habitacion" name="habitacion" class="form-control">
                    <option>Individual</option>
                    <option>Doble</option>
                    <option>Triple</option>
                    <option>Quad</option>   
                    <option>Queen</option>
                    <option>Doble-Doble</option>
                    <option>Suite</option>
                    <option>Suite Estudio</option> 
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <p>Nombre Cliente</p>
                  <input type="text"  id="cliente" name="cliente"class="form-control form-control-lg" >
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <p>Telefono</p>
                  <input type="text"  id="telefonoB" name="telefonoB"class="form-control form-control-lg" >
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <p>ID Cliente</p>
                  <input type="text"  id="idClienteB" name="idClienteB"class="form-control form-control-lg" >
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <label> </label>
                  <p></p>
                  <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Actualizar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>  
    </section>
    
    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('imagesHotel/Hotel1.jpg');">
      <div class="container">
      </div>
    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('imagesHotel/Hotel1.jpg');">
      <div class="container">
        <div class="row align-items-center">
        </div>
      </div>
    </section>
    
    <footer class="site-footer">


        <div class="row text-center">
          <div class="col-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> Agencia Hotel TIS <i
                aria-hidden="true"></i> by <a href="" target="_blank">Jissell Adamari García Juan</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>
  
  </div>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    
    <script src="js/custom.js"></script>

     
  </body>
</html>
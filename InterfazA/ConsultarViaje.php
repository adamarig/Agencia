<!DOCTYPE html>
<html lang="en">
<head>
	<title>Consultar viaje</title>
	<meta charset="UTF-8">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
   <title>Agencia</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">
<!--===============================================================================================-->
</head>
<body>
 <header>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="#">
                    <strong class="Blue-text">Agencia</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a href="index.php">Inicio</a>
                                <span class="sr-only">(current)</span>

                                 <a href="EliminarViaje.php">Cancelar Viaje</a>
                            </a>
                        </li>
                      
                    </ul>
                       <!-- Links -->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                           
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                      
                    </ul>
                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a href="/paneladministrador" class="nav-link waves-effect">
                              <a href="PanelUsuario.html">Entrar Usuario</a>
                             
                            </a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>

           
        <!-- Navbar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
s

    <!--Main layout-->

   <main class="mt-5 pt-5">
        <div class="container">
                <a id="inicio"/>

            <!--Section: Jumbotron-->
            <section class="card blue wow fadeIn" id="intro">

                <!-- Content -->
                <div class="card-body text-black text-center py-5 px-5 my-5">

                    <h1 class="mb-4">
                        <h1> Consultar Viaje </h1>
                    </h1>
                    <p class="mb-4">
                        <strong>
             



		<form class="login-form">
            
        <?php
        if(isset($_GET['IdB'])){
            $client = new SoapClient("http://100.26.227.87:8080/Autobus1.wsdl");
        
            $parametros = array("Id"=> $_GET['IdB']);
            $response = $client->__soapCall('ConsultarViaje',array($parametros),);
            print"<h2>".$response->{'Id'}.' '.$response->{'Destino'}. ' '.$response->{'FechaSalida'}.' '.$response->{'Hora'}.
            ' '.$response->{'NombreCliente'}. ' '.$response->{'Costo'}. ' '.$response->{'NumAsiento'}."</h2>";
        }
    ?>
           
  <p class="login-text">
    <span class="fa-stack fa-lg">
     
    </span>
  </p>    

        <label >Id</label>
        <input type="text" id="IdB" name="IdB" placeholder="" >
        
   
<input type="submit" name="Aceptar" value="Aceptar" class="login-submit" />
    

</form>
<a href="ConsultarViaje.php" class="login-forgot-pass1">Viajes Lupis</a>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>
            
</body>
</html>
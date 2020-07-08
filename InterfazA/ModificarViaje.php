<!DOCTYPE html>
<html lang="en">
<head>
	<title>Modificar viaje</title>
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
                            <a class="nav-link waves-effect" href="#inicio">Inicio
                                <span class="sr-only">(current)</span>
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
    <main class="mt-5 pt-5">
        <div class="container">
                <a id="inicio"/>

            <!--Section: Jumbotron-->
            <section class="card blue wow fadeIn" id="intro">

                <!-- Content -->
                <div class="card-body text-white text-center py-5 px-5 my-5">

                    <h1 class="mb-4">
                        <strong>Bienvenido a tu Agencia de Autobus Isa </strong>
                    </h1>
                    <p class="mb-4">
                        <strong>
                           En esta Agencia podras encontrar los viajes a todos los lugares que quieras Viajar 
                        </strong>
                    </p>
                </div>
                <!-- Content -->
            </section>
            <!--Section: Jumbotron-->

        </div>
    </main>

    <!--Main layout-->

   <main class="mt-5 pt-5">
        <div class="container">
                <a id="inicio"/>

            <!--Section: Jumbotron-->
            <section class="card blue wow fadeIn" id="intro">

                <!-- Content -->
                <div class="card-body text-black text-center py-5 px-5 my-5">

                    <h1 class="mb-4">
                        
                    </h1>
                    <p class="mb-4">
                        <strong>
             



		<form class="login-form" method="POST">
            
        <?php
        if(isset($_POST['IdB'])){
          $Id = $_POST['IdB'];
          $Destino= $_POST['DestinoB'];
          $FechaSalida = $_POST['FechaSalidaB'];
          $Hora = $_POST['HoraB'];
          $NombreCliente = $_POST['NombreClienteB'];
          $Costo = $_POST['CostoB'];
         $NumAsiento = $_POST['NumAsientoB'];

            $client = new SoapClient("http://100.26.227.87:8080/Autobus1.wsdl");
        
            $parametros = array("Id"=> $Id , "Destino"=> $Destino, "FechaSalida" => $FechaSalida, "Hora" => $Hora, "NombreCliente" => $NombreCliente, "Costo" => $Costo, "NumAsiento" => $NumAsiento);
            $response = $client->__soapCall('ModificarViaje',array($parametros),);
            print"<h2>".$response->{'respuesta'}."</h2>";
        }
    ?>


 
           
  <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>    

        <label >Id</label>
        <input type="text" id="IdB" name="IdB" placeholder="" >
        
   <label >Destino</label>
      <input type="text"  id="DestinoB" name="DestinoB" placeholder=" "  list="listademodelosDestinos">


<datalist id="listademodelosDestinos">

  <option value="Veracruz">

  <option value="Guadalajara">

  <option value="Mexico">

  <option value="Sinaloa">

  <option value="Monterrey">

  <option value="Sonora">

  <option value="Yucatan">

  <option value="Chihuahua">

</datalist>

 
    

      <label >FechaSalida </label>
      <input type="date"  id="FechaSalidaB" name="FechaSalidaB"  placeholder=" " >

      <label >Hora</label>
      <input type="text" id="HoraB" name="HoraB" placeholder="" list="listademodelosHora">

<datalist id="listademodelosHora">

  <option value="2:00">

  <option value="2:30">

  <option value="3:00">

  <option value="3:30">

   <option value="4:00"> 

  <option value="4:30"> 

   <option value="5:00"> 

  <option value="5:30"> 

   <option value="6:00"> 

  <option value="6:30"> 

   <option value="7:00"> 

  <option value="7:30"> 

   <option value="8:00"> 

  <option value="8:30"> 

</datalist>


      <label >NombreCliente</label>
      <input type="text" id="NombreClienteB" name="NombreClienteB"   placeholder="" >

      <label >Costo</label>
    <input type="text"  id="CostoB" name="CostoB" placeholder="" list="listadeCostos" >
<datalist id="listadeCostos">
   <option value= "450">

</datalist>

    <label >NumAsiento</label>
    <input type="text"  id="NumAsientoB" name="NumAsientoB"  placeholder=" " list="listademodelosAsientos"  >


<datalist id="listademodelosAsientos">

  <option value="1A">

  <option value="2A">

  <option value="3B">

  <option value="4B">

   <option value="5C">

  <option value="6C">

  <option value="7D">

  <option value="8D">

  <option value= "9E">

  <option value= "10E">

</datalist>
 
<input type="submit" name="Aceptar" value="Aceptar" class="login-submit" />
    

</form>
<a href="ModificarViaje.php" class="login-forgot-pass1">Viajes Lupis</a>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>
            
</body>
</html>
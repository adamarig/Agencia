<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pagar servicio</title>
	<meta charset="UTF-8">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/cssBanco.css">
<!--===============================================================================================-->
</head>
<body>


		<form class="login-form" method="POST">
            
        <?php
            if(isset($_POST['tarjetab'])){
            
            $tarjeta = $_POST['tarjetab'];
            $pin = $_POST['pinb'];
            $monto = $_POST['montob'];
            $client = new SoapClient("http://3.90.21.24:3132/banco.wsdl");
        
            $parametros = array("tarjeta"=>$tarjeta , "pin"=>$pin , "monto"=>$monto);
            $response = $client->__soapCall('Cobrar',array($parametros),);
            echo "<h3>".$response->{'respuesta'}."</h3>";
            }
    ?>
           
  <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>
  <input type="text" id="tarjetab" name="tarjetab" class="login-password" required="true" placeholder="Tarjeta" />
  <input type="text" id="pinb" name="pinb" class="login-password" required="true" placeholder="Pin" />
  <input type="text" id="montob" name="montob" class="login-password" required="true"  placeholder="Monto a pagar" />

  <input type="submit" name="Pagar" value="Pagar" class="login-submit" />
            








</form>
<a href="index.php" class="login-forgot-pass1">Banco One</a>
<a href="indexHome.html" class="login-forgot-pass">Seguir viajando</a>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>
            
</body>
</html>
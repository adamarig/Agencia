<?php 

	$conexion=mysqli_connect('localhost:8080','isabel','azul1495','autobus');

  

 ?>
<!DOCTYPE html>
<html lang="es">

<?php


  $sql2="SELECT * from administrador where Usuario= 'admin'";
  $resultado=mysqli_query($conexion,$sql2);
  $res = $resultado->fetch_array(MYSQLI_ASSOC);
  $estado = false;
  $estReporte = $res['estadoReporte'];

  if ($estReporte == 'activo') {
     $message = "Se ha activado el reporte correctamente";
     echo "<script type='text/javascript'>alert('$message');</script>";
      global $estado;  
      $estado = true;
  }


     if (isset($_GET['repeliminado'])) {
      $message = "Reporte eliminado correctamente";
      echo "<script type='text/javascript'>alert('$message');
      window.location.href = 'indexAdmin.php';
      </script>";
     } 


     if (isset($_GET['editaralumno'])) {
      $message = "Alumno editado correctamente";
      echo "<script type='text/javascript'>alert('$message');
      window.location.href = 'indexAdmin.php';
      </script>";
     }    

     if (isset($_GET['editarservicio'])) {
      $message = "Servicio editado correctamente";
      echo "<script type='text/javascript'>alert('$message');
      window.location.href = 'indexAdmin.php';
      </script>";
     }

     if (isset($_GET['eliminaralumno'])) {
      $message = "Alumno eliminado correctamente";
      echo "<script type='text/javascript'>alert('$message');
      window.location.href = 'indexAdmin.php';
      </script>";
     }    

     if (isset($_GET['eliminarservicio'])) {
      $message = "Servicio eliminado correctamente";
      echo "<script type='text/javascript'>alert('$message');
      window.location.href = 'indexAdmin.php';
      </script>";
     }

     if (isset($_GET['altaalumno'])) {
      $message = "Alumno ingresado correctamente";
      echo "<script type='text/javascript'>alert('$message');
      window.location.href = 'indexAdmin.php';
      </script>";
     }  


     if (isset($_GET['altaservicio'])) {
      $message = "Servicio Social ingresado correctamente";
      echo "<script type='text/javascript'>alert('$message');
      window.location.href = 'indexAdmin.php';
      </script>";
     }  

     if (isset($_GET['asignaralumno'])) {
          $message = "Alumno asignado correctamente";
          echo "<script type='text/javascript'>alert('$message');
          window.location.href = 'indexAdmin.php';
          </script>";
     }    

     if (isset($_GET['desactivarReporte'])) {
      $message = "Reporte desactivado correctamente";
      echo "<script type='text/javascript'>alert('$message');
      window.location.href = 'indexAdmin.php';
      </script>";
     } 
     
     if (isset($_GET['failalumno'])) {
      $message = "Error matricula del alumno ya registrada";
      echo "<script type='text/javascript'>alert('$message');
      window.location.href = 'indexAdmin.php';
      </script>";
     }

     if (isset($_GET['failsolicitante'])) {
      $message = "Error servicio social ya registrado";
      echo "<script type='text/javascript'>alert('$message');
      window.location.href = 'indexAdmin.php';
      </script>";
     }
?>

<head>
  <meta charset="utf-8">
  <title>Administrador </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/functions.js"></script>

</head>

<body>
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">

        <h1>Administrador</h1>
        <div class="actions">
          <a href="#Formulario" class="btn-get-started">Consultar Reportes</a>
          <a href="#RegistroAlumnos" class="btn-get-started">Registrar Alumnos</a>
          <a href="#RegistroSS" class="btn-get-started">Registrar Servicio Social</a>
          <a href="#ConsultarAlum" class="btn-get-started">Consultar Alumnos</a>
          <a href="#ConsultarSSS" class="btn-get-started">Consultar Servicio Social</a>
          <a href="index.html" class="btn-get-started">Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
 
  About Section
  ============================-->
   <section id="Formulario">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
            <h3 class="section-title">Reportes</h3>
            <div class="section-title-divider"></div>
            <br>
            <?php 
              if ($estado == false) {
              ?>   
               <button type="submit" name="" id="act" class="btn btn-primary " onclick="actReporte()"><lefth>Activar</lefth></button>
             <?php
              }
              ?>

              <?php 
              if ($estado == true) {
              ?>   
               <a href='deshabilitarreporte.php?' class="btn btn-primary" id="Deshabilitar">Deshabilitar reporte</a>
             <?php
              }
              ?>
           

            <div id="Activar" hidden>   
                <form action="activarreporte.php" method="post">
                  <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputAPaterno">Seleccione el periodo del semestre</label>
                        <select name="semestre" class="form-control" id="semestre" onchange="mes()" required>
                           <option value="F-J">Febrero - Julio</option>
                           <option value="A-E">Agosto - Enero</option>
                         </select>
                 </div>
                  <div class="form-group col-md-6">
                    <label for="inputAPaterno">Ingrese el año del semestre</label>
                    <input type="number" class="form-control" id="paterno" name="año" placeholder="2019" min="2019" max="2030"  required>
                 </div>
                     <div class="form-group col-md-6">
                    <label for="inputnombre4">Seleccione el Mes del reporte</label>

                         <select name="mes" class="form-control" id="mes1" hidden>
                           <option value="Agosto">Febrero</option>
                           <option value="Septiembre">Marzo</option>
                           <option value="Octubre">Abril</option>
                           <option value="Noviembre">Mayo</option>
                           <option value="Diciembre">Junio</option>
                           <option value="Enero">Julio</option>
                         </select>

                         <select name="mes" class="form-control" id="mes2" hidden>
                           <option value="Agosto">Agosto</option>
                           <option value="Septiembre">Septiembre</option>
                           <option value="Octubre">Octubre</option>
                           <option value="Noviembre">Noviembre</option>
                           <option value="Diciembre">Diciembre</option>
                           <option value="Enero">Enero</option>
                         </select>
                     </div>

            <button type="submit" name="" id="des" class="btn btn-primary "><lefth>Activar</lefth></button>
                     </div>
                    </form>
             </div>
        </div>
      </div>
    </div>
  </section>


<section id="ConsultarSS">
  <div class="container wow fadeInUp">
    <div class="row">
      <div class="col-md-12">
        <h3 class="section-title">Consultar Reportes</h3>
        <div class="section-title-divider"></div>
        <div class="card mb-3">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>

        <?php 
           $sql="SELECT * from reporte";
          $result=mysqli_query($conexion,$sql);
          $resu = $resultado->fetch_array(MYSQLI_ASSOC);




          ?>
                <tr>
                <td>Matrícula</td>
                <td>Número Reporte</td>
                <td>Lugar de Servicio</td>
                <td>Mes</td>
                <td>Año</td> 
                <td>Horas</td> 
                <td>Ver reporte</td>
                <td>Eliminar reporte</td>
                </tr>
              </thead>
              <tbody>


              <?php 
          while($mostrar=mysqli_fetch_array($result)){
                     $mat = $mostrar['Matricula'];
                     $numReporte = $mostrar['NumReporte'];
                     $mes = $mostrar['Mes']; 
                     $año = $mostrar['año']; 
                     $horas = $mostrar['HorasReportadas']; 

                $sql2="SELECT * from alumno where Matricula= '$mat'";
                $resultado2=mysqli_query($conexion,$sql2);
                $res2 = $resultado2->fetch_array(MYSQLI_ASSOC);
                $soliNum = $res2['NombreSolicitante']; 
             
             

                $File = 'doc.pdf';
           ?>

          <tr>

            <td><?php echo $mat ?></td>
            <td><?php echo $numReporte ?></td>
            <td><?php echo $soliNum ?></td>
            <td><?php echo $mes ?></td>
            <td><?php echo $año ?></td>
            <td><?php echo $horas ?></td>
            <td><a href='verpdf.php?numero=<?php echo $mat ?>&repo=<?php echo $numReporte ?>' target='_blank' class="btn btn-primary" id="editar">Ver Reporte</a></td>
            <td><a href='eliminarreporte.php?alumno=<?php echo $mat ?>' class="btn btn-danger glyphicon glyphicon-remove" id="eliminar"></a></td> 
          </tr>
          </tr>
        <?php 
        }
         ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
      </div>
    </div>
</section>



  <section id="RegistroAlumnos">

    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Registro Alumnos</h3>
          <div class="section-title-divider"></div>
          <form action="altaalumno.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputAddress2">Ingrese la matrícula del alumno</label>
    <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Matrícula" maxlength="9" minlength="9" required> 
  </div>
     <div class="form-group col-md-6">
      <label for="inputnombre4">Ingrese nombre(s) del alumno</label>
      <input type="text" pattern="[a-zA-Z]*" class="form-control" id="nombre" name="nombre" placeholder="Nombre (solo letras)" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputAPaterno">Ingrese el apellido paterno del alumno</label>
      <input type="text" pattern="[a-zA-Z]*" class="form-control" id="paterno" name="paterno" placeholder="Apellido paterno (solo letras)" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputAPaterno">Ingrese el apellido materno del alumno</label>
      <input type="text" pattern="[a-zA-Z]*" class="form-control" id="materno" name="materno" placeholder="Apellido materno (solo letras)" required>
    </div>
    
    <div class="form-group col-md-6">
      <label for="inputAMaterno">Ingrese el correo del alumno</label>
      <input type="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2, 4}$" class="form-control" id="correo" name="correo" placeholder="Correo electrónico" required>
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputCorreo">Ingresa el teléfono del alumno</label>
    <input type="tel" pattern="[0-9]*" class="form-control" id="telefono" name="telefono" placeholder="Teléfono (solo numeros)" maxlength="10" minlength="10" required>
  </div>
  <div class="form-group col-md-6">
    <label for="inputTelefono">Ingrese la contraseña predeterminada para el alumno</label>
    <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" required>
  </div>
  <div class="form-row">
  </div>
  <button type="submit" name="" id="" class="btn btn-primary "><lefth>Guardar</lefth></button>
  </form>    
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Services Section
  ============================-->
  <section id="RegistroSS">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
            <h3 class="section-title">Registros de Servicios Sociales </h3>
            <div class="section-title-divider"></div>
            <form action="altasolicitante.php" method="post">
            <div class="form-row">
              
                    <div class="form-group col-md-6">
                      <label for="inputDescripcion">Nombre del Servicio Social</label>
                      <input type="text" class="form-control" id="nombre" name="varnombre" placeholder="Nombre del Servicio Social" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputUbicacion">Dirección</label>
                      <input type="text" class="form-control" id="direccion" name="vardireccion" placeholder="Dirección" required>
                  </div>   
                 <div class="form-group col-md-6">
                    <label for="inputEncargado">Encargado del servicio</label>
                    <input type="text"  pattern="[a-zA-Z]*" class="form-control" id="inputEncargado" name="varencargado" placeholder="Encargado del servicio (solo letras)" required>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputDescripcion">Perfil solicitado</label>
                <input type="text" class="form-control" id="inputDescripcion" name="varperfil" placeholder="Perfil" required>
            </div>  
            <div class="form-group col-md-6">
                <label for="inputEncargado">Descripción</label>
                <input type="text" class="form-control" id="inputEncargado" name="vardesc" placeholder="Descripción" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEncargado">Lugares disponibles para alumnos</label>
                <input type="number" pattern="[0-9]*" max='20' min='1' class="form-control" id="inputEncargado" name="varlug" placeholder="Lugares disponibles para alumnos" required>
            </div>
            <button type="submit" class="btn btn-primary "><lefth>Guardar</lefth></button>
            </form>  
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Subscrbe Section
  ============================-->
<section id="ConsultarAlum">
  <div class="container wow fadeInUp">
    <div class="row">
      <div class="col-md-12">
        <h3 class="section-title">Consultar Alumnos </h3>
        <div class="section-title-divider"></div>
        <div class="card mb-3">
        <div class="card-header">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <td>Matrícula</td>
                    <td>Nombre(s)</td>
                    <td>Apellido Paterno</td>
                    <td>Apellido Materno</td>
                    <td>Correo</td>
                    <td>Teléfono</td>
                    <td>Formulario</td>
                    <td>Servicio Social</td>
                    <td>Reportes</td>
                    <td>Horas</td>
                    <td>Editar</td>
                    <td>Eliminar</td>
                </tr>
              </thead>
              <tbody>
                <?php 
          $sql="SELECT Matricula,Nombre,ApellidoP,ApellidoM,Correo,Telefono,NumFormulario,NombreSolicitante,TotalReportes,TotalHoras from alumno";
          $result=mysqli_query($conexion,$sql);

          while($mostrar=mysqli_fetch_array($result)){
           ?>

          <tr>
                <?php 
                $mat = $mostrar['Matricula'];
                ?>
            <td id="matricula"><?php echo $mostrar['Matricula'] ?></td>
            <td><?php echo $mostrar['Nombre'] ?></td>
            <td><?php echo $mostrar['ApellidoP'] ?></td>
             <td><?php echo $mostrar['ApellidoM'] ?></td>
            <td><?php echo $mostrar['Correo'] ?></td>
            <td><?php echo $mostrar['Telefono'] ?></td>
            <?php 
            if ($mostrar['NumFormulario']>0) {
              $noF = true;
               ?>
              <td><a href='pdf.php?numero=<?php echo $mat ?>' class="btn btn-primary " id="eliminar">Ver formulario</a></td> 
            <?php 
            }else{
              $noF = false;
               ?>
              <td>El alumno no ha llenado el formulario</td> 
            <?php 
            }
            ?>

             <?php 
             if($noF == true){
            if ($mostrar['NombreSolicitante']== null) {
               ?>
              <td><a href='asignarAlumno.php?matricula=<?php echo $mat ?>' class="btn btn-primary glyphicon glyphicon-plus" id="eliminar">Asignar</a></td> 
            <?php 
            }else{
               ?>
            <td><?php echo $mostrar['NombreSolicitante']; ?></td>
            <?php 
            }
           }else{
            ?>
            <td>No se puede asignar al alumno hasta que llene el formulario</td> 
          <?php 
           }
            ?>


            <td><?php echo $mostrar['TotalReportes'] ?></td>
            <td><?php echo $mostrar['TotalHoras'] ?></td>
            <td><a href='tablaModAlumno.php?matricula=<?php echo $mat ?>' class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" id="editar"></a></td>
            <td><a href='eliminar.php?matricula=<?php echo $mat ?>' class="btn btn-danger  glyphicon glyphicon-remove" id="eliminar"></a></td>  
          </tr>
             <?php 
        }
         ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
         
      </div>
    </div>

    
 
</section>
  <!--==========================
Services Section
============================-->
<section id="ConsultarSSS">
  <div class="container wow fadeInUp">
    <div class="row">
      <div class="col-md-12">
        <h3 class="section-title">Consultar Servicios </h3>
        <div class="section-title-divider"></div>
        <div class="card mb-3">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                <td>Nombre</td>
                <td>Dirección</td>
                <td>Encargado</td>
                <td>Perfil</td>	
                <td>Descripción</td>
                <td>Lugares Disponibles</td>
                <td>Editar</td>	
                <td>Eliminar</td>

                </tr>
              </thead>
              <tbody>
              <?php 
          $sql="SELECT * from solicitante";
          $result=mysqli_query($conexion,$sql);

          while($mostrar=mysqli_fetch_array($result)){
           ?>

          <tr>
                <?php 
                $mat = $mostrar['NombreSolicitante'];
                ?>
            <td><?php echo $mostrar['NombreSolicitante'] ?></td>
            <td><?php echo $mostrar['Direccion'] ?></td>
            <td><?php echo $mostrar['Encargado'] ?></td>
            <td><?php echo $mostrar['PerfilSolicitado'] ?></td>
            <td><?php echo $mostrar['Descripcion'] ?></td>
            <td><?php echo $mostrar['Lugares'] ?></td>
            <td><a href='tablaServicio.php?numero=<?php echo $mat ?>' class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" id="editar"></a></td>
            <td><a href='eliminarservicio.php?numero=<?php echo $mat ?>' class="btn btn-danger glyphicon glyphicon-remove" id="eliminar"></a></td> 
          </tr>
          </tr>
        <?php 
        }
         ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
      </div>
    </div>
  
    
</section>


  <!--==========================
  Subscrbe Section
  ============================-->
 

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>

  <script type="text/javascript">
    document.getElementById("mes1").style.display = "block";
    document.getElementById("mes2").style.display = "none";

    function actReporte(){
    document.getElementById("Activar").hidden = false;
    document.getElementById("act").style.display = "none";
    }


    document.getElementById('semestre').onchange = function() {
       var x = document.getElementById("semestre").value;

      if (x == 'F-J') {
          document.getElementById("mes1").style.display = "block";
          document.getElementById("mes2").style.display = "none";
      }

      if (x == 'A-E') {
          document.getElementById("mes1").style.display = "none";
          document.getElementById("mes2").style.display = "inline";
      }

    };

  </script>

</body>

</html>

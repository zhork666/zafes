<?php 

    ini_set('display_errors', 'off');
    ini_set('display_startup_errors', 'off');
    error_reporting(0);
	
	require('conexion.php');
	
	$nombre1=$_POST['primer_nombre'];
	$nombre2=$_POST['segundo_nombre'];
	$apellido1=$_POST['primer_apellido'];
	$apellido2=$_POST['segundo_apellido'];
	$cedula=$_POST['cedula'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	$celular=$_POST['celular'];
	$clave=$_POST['clave'];
	
$query="INSERT INTO Cliente (Primer_nombre, Segundo_nombre, Primer_apellido, Segundo_apellido, Cedula, Telefono, Email, Celular, Contrasena) VALUES ('$nombre1','$nombre2','$apellido1','$apellido2','$cedula','$telefono','$correo','$celular','$clave')";

	$resultado=$mysqli->query($query);
	
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ZAFE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">

<script src="js/html5shiv.js"></script> 
  <script src="js/respond.min.js"></script>   
        <!-- Place favicon.ico in the root directory -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/style.css">
<script type="text/javascript">
    document.onkeydown = function(){
      if(window.event && window.event.keyCode == 123)
    {
       return false;
      }
}
</script>

<head>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link href="css/ventana_aceptacion.css" rel="stylesheet" type="text/css" />
	<title>Guardar usuario</title>
</head>
<body oncontextmenu="return false">
<!-- Inicio del nav -->
<header class="main_menu_sec navbar navbar-default navbar-fixed-top" style="background-color: #333;">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="lft_hd">
          <a href="index.php"><img style="margin-top: 1px;" src="img/logoz.png" alt=""/></a>
        </div>
      </div>      
      <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="rgt_hd">          
          <div class="main_menu">
            <nav id="nav_menu">
              <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button> 
            <div id="navbar">
              <ul>
                <li><a class="page-scroll" href="index.php">Home</a></li> 
              <li><a href="#">Usuario <i class="fa fa-angle-down"></i></a>
              <ul>
                <li><a class="page-scroll" href="#log_sec">Login</a></li>
                <li><a class="page-scroll" href="registro.php">Registrese</a></li>
              </ul>
              </li>             
              
                <li><a class="page-scroll" href="#abt_sec">Acerca de</a></li>
                <li><a class="page-scroll" href="#ctn_sec">Contactenos</a></li>
              </ul>
            </div>    
            </nav>      
          </div>          
            
        </div>
      </div>  
    </div>  
  </div>  
</header>
<!-- Fin del Nav -->

	<center>	
		
		<?php if($resultado>0){ ?>
			<h1>Usuario Guardado</h1>
			<?php }else{ ?>
			<h1>Error al Guardar Usuario</h1>		
		<?php	} ?>		
		
		<p></p>	
		
	</center>
</body>
</html>	
<?php
	require('conexion.php');
	
	$query="SELECT Id_cliente, Primer_nombre FROM Cliente";
	
	$resultado=$mysqli->query($query);
	
?>
 
<script type="text/javascript">
    document.onkeydown = function(){
      if(window.event && window.event.keyCode == 123)
    {
       return false;
      }
}
</script>

<html oncontextmenu="return false">
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
</head>
<body>

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

  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-3 col-sm-12">
    <center>
    <h2 style="margin-top: 150px; color: #fff;">Usuarios Registrados en la Plataforma</h2>
	<div class="tabla" style="margin-top: 50px;">
		<table border=1 width="80%" method="POST" action="modificar.php">
		<thead>
			<tr>
				<td><b>Id_Cliente</b></td>
				<td><b>Usuario</b></td>
                <td><b>Cambiar Estado</b></td>
				<td><b>Eliminar Usuario</b></td>
			</tr>
            </thead>
			<tbody>
				<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
                        <td><?php echo $row['Id_cliente'];?>
						</td>
						<td><?php echo $row['Primer_nombre'];?>
						</td>
						<td>
							<a href="modificar.php?id=<?php echo $row['Id_cliente'];?>">Activar Usuario</a>
						</td>
						<td>
							<a href="eliminar.php?id=<?php echo $row['Id_cliente'];?>">Eliminar</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		</div>
		<br>
		<br>
		<h2 style="color: #fff;">Proximamente, Todos las funcionalidades serán agregadas</h2>
		</center>
		</div>
		</div>
		</div>
	</body>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="js/vendor/jquery-1.11.2.min.js"></script>

<script src="js/isotope.pkgd.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/appear.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/showHide.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>
<script src="js/plugins.js"></script>
</html>	
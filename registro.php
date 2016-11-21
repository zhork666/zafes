<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ZAFE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
  <script src="js/respond.min.js"></script> <![endif]-->    
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
    </head>
<body oncontextmenu="return false">
     <!-- start preloader -->
        <!-- end preloader -->
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
    
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
                <li><a class="page-scroll" href="inicio_sesion.php">Login</a></li>
                <li><a class="page-scroll" href="registro.php">Registrese</a></li>
              </ul>
              </li>             
              
                <li><a class="page-scroll" href="inicio_sesion.php #abt_sec">Acerca de</a></li>
                <li><a class="page-scroll" href="inicio_sesion.php #ctn_sec">Contactenos</a></li>
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

<!-- start blog Section -->
<section id="blg_sec">
  <div class="container">
    <div class="row">
    <br>
    <br>
    <br>
      <div class="title_sec">
        <h1>Registro</h1>
      </div>    
      <div class="col-lg-7 col-md-8 col-sm-12 ">            
          <div class="post_content">
          <p>Al ingresar tus datos personales en los siguientes campos, podrás disfrutar de todos nuestros servicios y recibir información sobre la empresa.</p>
          <form method="POST" action="guarda_usuario.php">
              <div class="form-group" style="width: 70%;">
                <input type="text" name="primer_nombre" class="form-control" required="required" placeholder="Primer Nombre">
              </div> 
              <div class="form-group" style="width: 70%;">
                <input type="text" name="segundo_nombre" class="form-control" required="required" placeholder="Segundo Nombre">
              </div> 
              <div class="form-group" style="width: 70%;">
                <input type="text" name="primer_apellido" class="form-control" required="required" placeholder="Primer Apellido">
              </div> 
              <div class="form-group" style="width: 70%;">
                <input type="text" name=name="segundo_apellido" class="form-control" required="required" placeholder="Segundo Nombre">
              </div>
              <div class="form-group" style="width: 70%;">
                <input type="text" name="cedula" class="form-control" required="required" placeholder="Cédula">
              </div>
              <div class="form-group" style="width: 70%;">
                <input type="text" name="telefono" class="form-control" required="required" placeholder="Teléfono">
              </div>
              <div class="form-group" style="width: 70%;">
                <input type="text" name="correo" class="form-control" required="required" placeholder="Email">
              </div>
              <div class="form-group" style="width: 70%;">
                <input type="text" name="celular" class="form-control" required="required" placeholder="Celular">
              </div>
              <div class="form-group" style="width: 70%;">
                <input type="password" name="clave" class="form-control" required="required" placeholder="Password">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary" style="background-color: #34a853;">Registrar</button>
              </div>  
          </form> 
          </div>
      </div>        
      
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="sidebar">                   
          <div class="widget">
            <h2>Que puedo hacer?</h2>
            <div class="title_br">Desplace aquí los trabajos que puede realizar:</div>
            <ul class="flickr">
              <li id="ZonaDestino1"><div class="work_box" ></div></li>
              <li id="ZonaDestino2"><div class="work_box"></div></li>
              <li id="ZonaDestino3"><div class="work_box"></div></li>
            </ul>
          </div> 
          <br>    
          <br>
          <br>
          <br>   
          <br>
          <br>
          <br>
          <br>
          <div class="widget">
            <h2>trabajos</h2>
            <div class="title_br"></div>
            <ul class="flickr">
              <li id="ZonaOrigen1"><img title="Ejemplo de un trabajo" src="img/flckr.jpg" id="imagen1" alt=""/></li>
              <li id="ZonaOrigen2"><img title="Ejemplo de un trabajo" src="img/flckr.jpg" id="imagen2" alt=""/></li>
              <li id="ZonaOrigen3"><img title="Ejemplo de un trabajo" src="img/flckr.jpg" id="imagen3" alt=""/></li>
              <li id="ZonaOrigen4"><img title="Ejemplo de un trabajo" src="img/flckr.jpg" id="imagen4" alt=""/></li>
              <li id="ZonaOrigen5"><img title="Ejemplo de un trabajo" src="img/flckr.jpg" id="imagen5" alt=""/></li>
              <li id="ZonaOrigen6"><img title="Ejemplo de un trabajo" src="img/flckr.jpg" id="imagen6" alt=""/></li>
              <li id="ZonaOrigen7"><img title="Ejemplo de un trabajo" src="img/flckr.jpg" id="imagen7" alt=""/></li>
              <li id="ZonaOrigen8"><img title="Ejemplo de un trabajo" src="img/flckr.jpg" id="imagen8" alt=""/></li>
            </ul>
          </div>
      </div>  
    </div>
  </div>
</section>
<!-- start Blog Section -->

<!-- start located map Section -->
<section id="ltd_map_sec">
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="map">           
      <h1>located THE MAP</h1><a href="#slidingDiv" class="show_hide" rel="#slidingDiv"><i class="fa fa-angle-up"></i></a>
      <div id="slidingDiv">

            <div class="map_area">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.7423242006403!2d-75.69686678569398!3d4.8142473965039825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e388748eb594761%3A0xeaf923ce80d4af3a!2sPlaza+de+Bol%C3%ADvar!5e0!3m2!1ses!2sco!4v1479150513298" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

      </div>  
      </div>
    </div>
  </div>
</div>
</section>

<!-- End located map  Section -->
<!-- start footer Section -->
<footer id="ft_sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="ft">            
          <ul>
            <li><a href=""><i class="fa fa-facebook"></i></a></li>
            <li><a href=""><i class="fa fa-twitter"></i></a></li>
            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
            <li><a href=""><i class="fa fa-rss"></i></a></li>
            <li><a href=""><i class="fa fa-flickr"></i></a></li>
            <li><a href=""><i class="fa fa-pinterest"></i></a></li>
            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
            <li><a href=""><i class="fa fa-skype"></i></a></li>
            <li><a href=""><i class="fa fa-google"></i></a></li>
          </ul>         
        </div>
          <ul class="copy_right">
            <li style="color: #fff;">&copy;ZAFE 2016</li>
          </ul>         
      </div>  
    </div>
  </div>
</footer>
<!-- End footer Section -->

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
<script src="js/dragDrop.js"></script>
<script src="jquery.js"></script>
    </body>
</html>
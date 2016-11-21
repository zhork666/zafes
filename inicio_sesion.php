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

<!-- Comienzo del log in -->
<section id="log_sec">
  <div class="container">
    <div class="row">
    <div class="col-lg-4 col-md-12 col-sm-12 col-xs12 "></div>
      <div class="col-lg-4 col-md-12 col-sm-12 col-xs12 ">
        <div class="title_sec">
          <h1>Login</h1>
          <br>
          <center><input type="text" name="name" class="form-control name-field" required="required" placeholder="Usuario"></center>
          <br>
          <center><input type="text" name="name" class="form-control name-field" required="required" placeholder="Contraseña"></center>
          <br>
          <center><button type="submit" class="btn btn-primary" style="background-color: #34a853;">Ingresar</button></center>
        </div>        
      </div> 
      <div class="col-lg-4 col-md-12 col-sm-12 col-xs12 "></div>     
    </div>
  </div>
</section>
<!-- start about Section -->
<section id="abt_sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
        <div class="title_sec">
          <h1>Acerca de</h1>
          <h2>Aquí vendrá la información acerca de la empresa</h2>
        </div>      
      </div>    
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
        <div class="abt">
          <p>La profundización respecto a los objetivos de la empresa.</p>
        </div>
      </div>      
    </div>
  </div>
</section>
<!-- Fin del Log in -->






<!-- Seccion de Servicios -->
<section id="pr_sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
        <div class="title_sec">
          <h1>Nuestros Servicios</h1>
          <h2>Proximamente descubriras que servicios ofrecemos</h2>
        </div>      
      </div>    
      
      </div>  
      </section>      
<!-- Fin de la secció de servicios -->
 

<!-- Sección de los contactos -->
<section id="ctn_sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
        <div class="title_sec">
          <h1>Contacto</h1>
          <h2>Puedes enviarnos un correo</h2>
        </div>      
      </div>    
      <div class="col-sm-6"> 
        <div id="cnt_form">
          <form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
            <div class="form-group">
            <input type="text" name="name" class="form-control name-field" required="required" placeholder="Nombre">
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control mail-field" required="required" placeholder="Tu Email">
            </div> 
            <div class="form-group">
              <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Mensaje"></textarea>
            </div> 
            <div class="form-group">
              <button type="submit" class="btn btn-primary" style="background-color: #34a853;">Envíar</button>
            </div>
          </form> 
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="cnt_info">
          <ul>
            <li><i class="fa fa-facebook"></i><p>Dirección de Facebook de la empresa</p></li>
            <li><i class="fa fa-envelope"></i><p>Correo para contactarlos</p></li>
            <li><i class="fa fa-phone"></i><p>Número del contacto a la empresa</p></li>
          </ul>
        </div>
      </div>      
    </div>
  </div>
</section>
<!-- Fin de la sección -->

<!-- Mapa de localización -->
<section id="ltd_map_sec">
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="map">           
      <h1>Nuestra Localización</h1><a href="#slidingDiv" class="show_hide" rel="#slidingDiv"><i class="fa fa-angle-up"></i></a>
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

<!-- Fin del mapa -->

<!-- Inicio del Footer -->
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
<!-- Fin del Footer -->

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

    </body>
</html>

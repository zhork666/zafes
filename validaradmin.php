<?php
    ini_set('display_errors', 'off');
    ini_set('display_startup_errors', 'off');
    error_reporting(0);

	$cedula=$_POST['usuario'];
	$clave=$_POST['clave'];
	function Conectarse()
	{
		if (!($link=mysql_connect("localhost", "root", "1234")))
		{
			echo "Error conectando a la base de datos.";
		}
		if (!mysql_select_db("zafe", $link))
		{
			echo "Error seleccionando la base de datos.";
			exit();
		}
		return $link; //no le digas q yo t dije si
	}

	$con = Conectarse();
	$query="SELECT * FROM administrador WHERE Cedula='".$cedula."' AND Contrasena='".$clave."'";
		
	$q = mysql_query($query);
	try{
		if(mysql_result($q, 0))
		{
			$result = mysql_result($q, 0);

			header("location:crudadmin.php");
		}else{
			echo "Error al iniciar sesión Administrador";
		}
	}catch(Exception $error){}
	mysql_close($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Validación</title>
	<style type="text/css">
		body {
			background-color: #815aa4;
			color: #fff;
			font-size: 32px;
			text-align: center;
			padding: 5px 50px 5px 5px;
			margin-top: 100px;
		}

		#circulo { 
		   width: 300px;
		   height: 300px;
		   background:#fff; 
		   -moz-border-radius: 120px; 
		   -webkit-border-radius: 120px; 
		   border-radius: 200px;
		   position: relative;
		   margin-top: 50px;
		}

		#logo {
			position: absolute;
			margin-top: 85px;
			margin-left: -90px;
		}
	</style>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<br>
<img width="15%" id="logo" src="img/zafe logo.png">
<center><div style="z-index: -10;" id="circulo"></div></center>
</body>
</html>
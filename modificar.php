<?php 

    ini_set('display_errors', 'off');
    ini_set('display_startup_errors', 'off');
    error_reporting(0);
	
	require('conexion.php');
	
	$id_cliente=$_POST['Id_cliente'];
	
$query="UPDATE Cliente SET Id_estado = 2 WHERE Id_Cliente = '$id_cliente'";

	$resultado=$mysqli->query($query);
	
?>

<html>
<head>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link href="css/ventana_aceptacion.css" rel="stylesheet" type="text/css" />
	<title>Guardar usuario</title>
</head>
<body>
	<center>	
		
		<?php if($resultado>0){ ?>
			<h1>Usuario Activado</h1>
			<?php }else{ ?>
			<h1>Error al Activar Usuario</h1>		
		<?php	} ?>		
		
		<p></p>	
		
		<a href="crudAdmin.php">Regresar</a>
		
	</center>
</body>
</html>	
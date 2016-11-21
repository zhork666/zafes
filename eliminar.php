<?php 

	require('conexion.php');
	
	$id_cliente=$_POST['Id_Cliente'];
	
	$query="DELETE FROM Cliente WHERE Id_Cliente = '$id_cliente'";

	$resultado=$mysqli->query($query);
	
?>

<html>
<head>
<link href="css/ventana_aceptacion.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<title>Guardar usuario</title>
</head>
<body>
	<center>	
		
		<?php if($resultado>0){ ?>
			<h1>Usuario Eliminado</h1>
			<?php }else{ ?>
			<h1>Error al Eliminar Usuario</h1>		
		<?php	} ?>		
		
		<p></p>	
		
		<a href="crudAdmin.php">Regresar</a>
		
	</center>
</body>
</html>	
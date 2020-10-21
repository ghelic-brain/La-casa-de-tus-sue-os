<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
	<?php require_once "menu.php"; ?>
	
</head>
<body>
	<div id="contenedorProductos">

	</div>
		<script>
			$(document).ready(function(){
				$('#contenedorProductos').load("productos/grid_productos.php");
			});
		</script>
</body>
</html>
<?php 
	}else{
		header("location:../index.php");
	}
 ?>
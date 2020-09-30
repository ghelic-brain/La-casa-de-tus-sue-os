<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
	<?php require_once "menu.php"; ?>
	<style>
		.contenedorPrincipal{
        
        
		display: grid;
		grid-template-columns: 25% 25% 25% 25%;
		
		
		grid-column-gap: 0px;
		grid-row-gap: 0px;
		
}
@media (max-width: 600px) {
	.contenedorPrincipal{
        
    
		grid-template-columns: 50% 50%;
		
	
		
}
		}

		@media (max-width: 450px) {
	.contenedorPrincipal{
        
    
		grid-template-columns: 100%;
		
	
		
}
		}
	
.contenidoProducto{
	
}
.contein{
	
	overflow: hidden;
	position: relative;
	color:#333;
	font-size:1.2em;
}   
   .contein .image{ 
		transition: all 1.2s ease;
		max-width: 100%;
	}
	.contein .float{
		opacity: 0;
		transition: all .6s ease;
		visibility: hidden;
		position: absolute;
		bottom: 10%;
		left: -150px;
	}
	.contein .title{
			
		font-size: 1.3em;   
	}
		.contein .subtitle{
			font-size: .8em;
			text-align: justify;
		}

	
	

.contein:hover .image{
	filter: opacity(.5);
	-webkit-transform:scale(1.3);
	transform:scale(1.3);
}
.contein:hover .float{
	opacity: 1;
	visibility: visible;
	left: 20px;
}
	</style>
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
<style>
.contenedorPrincipal{
    margin:auto;
    width:95%;
	display: grid;
	grid-template-columns: 25% 25% 25% 25%;
	grid-column-gap: 10px;
	grid-row-gap: 10px;
		
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
.contenedorPrincipal .producto{
	padding:5px;
	box-shadow:1px 1px 15px #dddddd;
}
.titulo{
	font-size:25px;
	font-weight: bold;
}
.descripcion{
	font-size:19px;
}
	
</style>
<?php 
	require_once "../../clases/Conexion.php";
	$c= new conectar();
	$conexion=$c->conexion();
	$sql="SELECT art.nombre,
					art.descripcion,
					art.comuna,
					art.precio,
					img.ruta,
					cat.nombreCategoria,
					art.habitaciones,
					art.baños,
					art.id_producto
		  from articulos as art 
		  inner join imagenes as img
		  on art.id_imagen=img.id_imagen
		  inner join categorias as cat
		  on art.id_categoria=cat.id_categoria";
	$result=mysqli_query($conexion,$sql);

 ?>

<div class="contenedorPrincipal" style="text-align: center; ">



	<?php while($ver=mysqli_fetch_row($result)): ?>


	<div class="producto" >

		<?php 
			$imgVer=explode("/", $ver[4]) ; 
			$imgruta=$imgVer[1]."/".$imgVer[2]."/".$imgVer[3];
		?>

  		<img class=" " width="100%" src="<?php echo $imgruta ?>">
  		<div class="">
    	<span class="titulo"><?php echo $ver[1]; ?></span>
    	<p class="descripcion"><?php echo $ver[1]; ?></p>
  	</div>
  	<ul class="list-group list-group-flush">
    	<li class="list-group-item">Numero contacto: <?php echo $ver[2]; ?></li>
    	<li class="list-group-item">precio: <?php echo $ver[3]; ?></li>
		<li class="list-group-item">habitaciones: <?php echo $ver[6]; ?></li>
		<li class="list-group-item"> baños: <?php echo $ver[7]; ?></li>
  	</ul>
	
</div>
		

	

		
		
		
	
	
<?php endwhile; ?>
	</div>
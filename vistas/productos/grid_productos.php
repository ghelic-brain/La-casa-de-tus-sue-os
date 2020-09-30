
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

<div class="contenedorPrincipal" style="text-align: center;">


	<?php while($ver=mysqli_fetch_row($result)): ?>

		<div class="contein" (click)="viewNotice()">
		<?php 
			$imgVer=explode("/", $ver[4]) ; 
			$imgruta=$imgVer[1]."/".$imgVer[2]."/".$imgVer[3];
			?>
			<picture><img width="100%" src="<?php echo $imgruta ?>"></picture>
			<div class="float">
			<h4 class="title">nombre propiedad:<?php echo $ver[0]; ?></h4>
			<span class="subtitle">descripcion propiedad:<?php echo $ver[1]; ?>
			numero:<?php echo $ver[2]; ?>
			precio:<?php echo $ver[3]; ?>
			</span>
    		</div>
    
		</div>

	

		
		
		
	
	
<?php endwhile; ?>
	</div>
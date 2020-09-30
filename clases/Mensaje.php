<?php
    class Mensaje{

        public function mensajeDeCliente($datos){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="UPDATE clientes set nombre='$datos[1]',
										apellido='$datos[2]',
										direccion='$datos[3]',
										email='$datos[4]',
										telefono='$datos[5]',
										rfc='$datos[6]' 
								where id_cliente='$datos[0]'";
			return mysqli_query($conexion,$sql);
		}
    }
?>
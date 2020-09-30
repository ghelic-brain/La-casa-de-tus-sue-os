<?php 
session_start();
if(isset($_SESSION['usuario'])){

	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>clientes</title>
        <?php require_once "menu.php"; ?>
        <style>
            label {
    display:block;
    margin-top:20px;
    letter-spacing:1px;
}
 

.principal {
    display:block;
    margin:0 auto;
    width:510px;
    color: #666666;
    font-family:Arial;
}
 
form {
    margin:0 auto;
    width:400px;
}
 
input, textarea {
    width:380px;
    height:27px;
    background:whitesmoke;
    border:2px solid #f6f6f6;
    padding:10px;
    margin-top:5px;
    font-size:10px;
    color:#222;
}
 
textarea {
    height:150px;
    color:#222;
}
 
#submit {
    color:#222; 
    width:85px;
    height:35px;
    border:none;
    margin-top:20px;
    cursor:pointer;
}
        </style>
	</head>
	<body>
    <form method="post" action="../procesos/correos/correos.php">
       <label for="nombre">Nombre:</label>
       <input id="nombre" name="nombre" placeholder="Nombre completo">
       <label for="email">Email:</label>
       <input id="email" name="email" type="email" placeholder="ejemplo@email.com">
       <label for="mensaje">Mensaje:</label>
       <textarea id="mensaje" name="mensaje" placeholder="Danos tu mensaje"></textarea>
       <input id="submit" name="submit" type="submit" value="Enviar">
       
</form>

	</body>
	</html>



	<?php 
}else{
	header("location:../index.php");
}
?>
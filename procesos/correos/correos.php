<?php
            
            
            if ($_POST['submit']) {

                $nombre = $_POST['nombre'];
                $email = $_POST['email'];
                $mensaje =$_POST['mensaje'];
                $para = 'eldraco123@gmail.com';
                $titulo = 'Hola - La Webera';
            
                $msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
                if (mail ($para, $titulo, $msjCorreo)) {
                    echo 'El mensaje se ha enviado';
                } else {
                    echo 'Falló el envio';
                }
            }
?>
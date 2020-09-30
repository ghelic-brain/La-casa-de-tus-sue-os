
   
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
       <title>La casa de tus sueños</title>
       
    
        <!-- CSS Boostrap 4 -->
        <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
        <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
        <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
        <link rel="stylesheet" type="text/css" href="public/css/styles.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <style>
        .contenedorN{
            
            display:flex;
            justify-content:center;
            aling-items:center;
        }
        .titleN{
            font-size:40px;
            margin-top:30px;
            margin-bottom:30px;
        }
        .subtitleN{
            font-size:25px;
            margin-top:30px;
            margin-bottom:40px;
        }
        .cuerpo{
            justify-content: space-around;
            padding:10px;
            
        }

        .article{
            box-shadow: #333 3px 3px 20px;
            justify-content: flex-start;
            display:flex;
            aling-items:center;
            flex-direction: column;
            width:25%;
            
        }
        .article h2{
            text-align: center;
            color:#333;
            font-size:32px;
            font-weight: 500px;
        }

        .article p{
            text-align: justify;
            padding:10px;
            aling-text:center;
            color:#222;
            font-size:22px;
        }
        .byebye{
            margin:10px;
            display:block;
            aling-text:center;
            width:100%;
            font-size:35px;
        }
    </style>

   </head>
   <body>
   <?php
        require_once "views/default/navbar.php";
    ?>

<div class="contenedorN" style="flex-direction: column;">
        <center><h2 class="titleN">Somos La casa de tus sueños</h2></center>
        <center><h4 class="subtitleN">Pequeño proyecto de ejemplo</h4></center>
        <div class="contenedorN cuerpo">
            <div class="article">
                <h2>¿Quiénes somos?</h2>
                <p> Somos una plataforma que ofrece contacto entre vendedores y compradores de propiedades. Nos encargamos de proporcionar a los clientes toda la información disponible con relación a la propiedad de interés.</p>
            </div>
            <div class="article">
                <h2>Metas</h2>
                <p>
                    Queremos llegar apoyar la venta de bienes e inmuebles a la mayor cantidad de usuarios posibles, de forma eficiente y sin complicaciones. 
                </p>
            </div>
            <div class="article">
                <h2>Visión</h2>
                <p>
                    Facilitaremos el encontrar casa en momentos de pandemia de la forma más eficiente posible sin que el usuario corra riesgos.
                </p>
            </div>
        </div>
       <center>
       <span class="byebye"> Por favor inicia sesión para continuar</span>
       </center>
        
     
                
            
    </div>
       
   <?php
        require_once "views/default/footer.php";
    ?>

   
    

    
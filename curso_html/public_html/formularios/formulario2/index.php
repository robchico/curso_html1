<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Formulario</title>
        <link rel="icon" type="image/png" href="../examen/img/apple-touch-icon.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,  initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
        <!--<link href="style/mi_css.css" rel="stylesheet" type="text/css"/>-->
    </head>
    <body class="">
        <?php
//            session_start();
//            // Establecer tiempo de vida de la sesión en segundos
//            $inactividad = 60;
//            // Comprobar si $_SESSION["timeout"] está establecida
//            if (isset($_SESSION["timeout"])) {
//                // Calcular el tiempo de vida de la sesión (TTL = Time To Live)
//                $sessionTTL = time() - $_SESSION["timeout"];
//                if ($sessionTTL > $inactividad) {
//                    session_destroy();
//                    header("Location: Error_Page.php");
//                }
//            }
//            // El siguiente key se crea cuando se inicia sesión
//            $_SESSION["timeout"] = time();
            
        ?>
        <?php
            include_once './vista/menu.php';
        ?>
        <header class="m-auto">
            <p class="m-4 display-3">Primer formulario</p>   
        </header>
        <div class="bg-light w-75 m-auto container m-4 border border-primary rounded-lg shadow-lg">
            <?php
                include_once './vista/formulario.php';
                
            ?>
        </div>


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"  crossorigin="anonymous"></script>
        <script src="./events/events1.js" type="text/javascript"></script>
    </body>
</html>


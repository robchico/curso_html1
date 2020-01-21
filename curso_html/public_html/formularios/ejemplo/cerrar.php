<head>
    <title>Validando usuarios en PHP</title>
    <meta charset="UTF-8">
    <meta name="description" content="Proceso para validad formularios en PHP"/>
    <meta name="keywords" content="validar usuarios,php"/>
    <meta name="author" content="Juan Luis Mora Blanco" />
</head>
<body>
    <?php
    include ("seguridad.php");
    session_unset();
    session_destroy();
    ?>
    <h1>Control de sesiones</h1>
    <p>Sesion cerrada</p>
    <p><a href="index.php">Volver al inicio</a></p>
</body>
</html>

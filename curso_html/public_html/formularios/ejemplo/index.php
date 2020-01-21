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
    ?>
    <h1>Control de sesiones</h1>
    <p>Se ha autetificado usted como:
 <?php echo $_SESSION['usuario']; ?> a la hora UNX: <?php echo $_SESSION['usuario']; ?> con éxito<p>
    <p>Puede cerrar su sesión aquí: <a href="cerrar.php?cerrar">Cerrar sesión</a></p>
</body>
</html>


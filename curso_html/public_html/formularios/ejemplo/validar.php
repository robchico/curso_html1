<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Validando usuarios en PHP</title>
        <meta charset="UTF-8">
        <meta name="description" content="Proceso para validad formularios en PHP"/>
        <meta name="keywords" content="validar usuarios,php"/>
        <meta name="author" content="Juan Luis Mora Blanco" />
    </head>
    <body>
        <?php
        if (isset($_POST['nombre']) && isset($_POST['clave'])) {
            if (($_POST['nombre'] == "usuario") && ($_POST['clave'] == "123456")) {
                session_start();
                $_SESSION['usuario'] = "usuario";
                $_SESSION['tiempo'] = time();
                header("location:index.php");
            } else
                header("location:index.php");
        }
        else {
            ?>
            <h1>Control de sesiones</h1>
            <table align="center">
                <form action="validar.php" method="POST"/>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre"/></td>
                </tr>
                <tr>
                    <td>Clave:</td>
                    <td><input type="password" name="clave"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Acceder"/></td>
                </tr>
            </form>
    <?php
}
?>
</body>
</html>


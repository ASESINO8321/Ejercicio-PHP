<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <title>Prueba 1</title>
</head>
<body>
    <header class="header">
        <?php
            include "modules/navegation.php";
        ?>
    </header>
    <main class="main">
        <section class="section">
            <?php
                #creamos un nuevo objeto
                $mvc = new MvcController();
                #indicamos la funcion de los enlaces desde el archivo controlador
                $mvc -> enlacesPaginasController();
            ?>
        </section>
    </main>
    <script src="logic/main.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/main.css">
    <title>Prueba 1</title>
</head>
<body>
    <header class="header">
        <!--invocamos el archivo de navegacion-->
        <?php
            include "modules/navegation.php";
        ?>
    </header>
    <main class="main">
        <section class="section">
            <!--creamos un objeto con la direccion del archivo que vamos a mostrar dependiendo del usuario-->
            <?php
                #creamos un nuevo objeto
                $mvc = new MvcController();
                #indicamos la funcion de los enlaces desde el archivo controlador
                $mvc -> enlacesPaginasController();
            ?>
        </section>
    </main>
    <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous"></script>
    <script src="LOGIC/main.js"></script>
</body>
</html>
<?php
    #usamos require_once() para requerir el archivo junto con su codigo para el funcionamiento
    #-----------------------------
    require_once "controllers/controller.php";

    #creamos un objeto para traer la clase que contiene la funcion de plantilla
    #-----------------------------
    $mvc = new MvcController();
    #le indicamos al objeto cual funcion queremos llamar
    #-----------------------------
    $mvc -> plantilla();
?>
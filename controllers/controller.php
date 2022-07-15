<?php
    #creamos una clase
    #----------------------------- 
    class MvcController{
        #llamamos la plantilla mediande una funcion publica
        #-----------------------------
        public function plantilla(){
            #include() lo utilizamos para invocar el archivo que contiene el html base
            #-----------------------------
            include "views/template.php";
        }
        #creamos una segunda funcion la cual controla los enlaces de paginas
        #-----------------------------
        public function enlacesPaginasController(){
            #creamos un if() con la propiedad isset para saber si la variable viene definida o no
            #-----------------------------
            if(isset($_GET["v"])){
                #creamos una variable la cual tenga el enlace por medio de un get
                #-----------------------------
                $enlacesController = $_GET["v"];
            }
            #creamos un else por si la variable esta limpia lleve al index
            #-----------------------------
            else{
                $enlacesController = "index";
            }
            #creamos una variable la cual llame la clase y funcion en el archivo model y pasarle la variable del controlador
            #-----------------------------
            $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
            #incluimos la variable respuesta en el archivo
            include $respuesta;
        }
    }
?>
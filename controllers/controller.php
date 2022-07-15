<?php
    class MvcController{
        #llamamos la plantilla mediande una funcion publica
        #-----------------------------
        public function plantilla(){
            #include() lo utilizamos para invocar el archivo que contiene el html base
            #-----------------------------
            include "views/template.php";
        }
    }
?>
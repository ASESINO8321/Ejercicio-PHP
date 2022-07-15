<?php
    #interaccion del usuario con los enlaces
    #-----------------------------
    #creamos una nueva clase para el proceso de cambio de hojas
    #-----------------------------
    class EnlacesPaginas{
        #creamos una funcion estatica para los enlaces
        #-----------------------------
        public static function enlacesPaginasModel($enlacesModel){
            #creamos un if() con la lista blanca de enlaces permitidos
            #-----------------------------
            if($enlacesModel == "ixwYmnTLkaSdmnKLjmanjr" || $enlacesModel == "rHnfgyhuKJeghmjkdHFGBT" || $enlacesModel == "dOJHGwrwvnppitbDGBDTNJ" ||
               $enlacesModel == "AchgikghfJGJGUYGBJgyug" || $enlacesModel == "cNGHdfhrwrgvJHGHTFXjby"){
                    #creamos una variable que contenga la direcion y elecion del usuario
                    #-----------------------------
                    $module = "views/modules/".$enlacesModel.".php";
               }
            #creamos un else if() para que cuando se incia la web venga con una direccion por defecto
            #-----------------------------
            else if($enlacesModel == "index"){
                #variable con direcion del archivo de inicio
                #-----------------------------
                $module = "views/modules/ixwYmnTLkaSdmnKLjmanjr.php";
            } 
            #creamos un else() para que si se ingresa una direccion lleve al inicio
            #-----------------------------
            else{
                $module = "views/modules/ixwYmnTLkaSdmnKLjmanjr.php";
            }
            #returnamos la variable para ser leida por el controlador
            return $module;
        }
    }
?>
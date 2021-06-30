<?php

    class ControladorPlantilla{
        /*Llamada a la plantilla */
        public function ctrTraerPlantilla(){
            #el metodo include() funciona para invocar documentos html o php
            include "./vistas/plantilla.php";
        }
    }

?>
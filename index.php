<?php
    /*el metodo require establece que el archivo invocado es obligatorio para el funcionamiento del programa.
    Si el archivo especificado en el require no se encuentra saltara un error "PHP Fatal error".
    El metodo require_once es similar a require, salvo que al usar el primero se impide la carga del archivo mas de una vez*/
    require_once "controladores/plantilla.controlador.php";
    require_once "controladores/formularios.controladores.php";
    require_once "modelos/formulario.modelos.php";
    $plantilla = new ControladorPlantilla();

    $plantilla -> ctrTraerPlantilla();
?>
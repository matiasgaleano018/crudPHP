<?php
    class Conexion{
        static public function conectar(){
            /*PDO es la clase con la que tenemos acceso a las bases de datos
            a PDO debemos pasarle dos parametros, (en donde esta alojado nuestra BD;el nombre de la misma, el nombre de usuario, contraseña) */
            $link = new PDO("mysql:host=localhost;dbname=curso_php", "root", "");
            /*executamos la variable y le decimos que trabajaremos con caracteres latinos a travez del utf8 */
            $link ->exec("set names utf8");
            return $link;
        }
    }
?>
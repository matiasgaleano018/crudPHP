<?php
    require_once "conexion.php";
    class ModeloFormulario{
        static public function mdlRegistro($tabla, $datos){
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password) VALUES (:nombre, :email, :password)");
            /*En esta ocacion estamos protegiendo los datos evitando que pongamos diractamente los parametros
            de la variable $datos y evitando ataques a la base de datos.
            El metodo prepare() prepara una sentencia sql*/
            #PARAM_STR parametro string
            $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
            $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

            if($stmt->execute()){
                return true;
            }else{
                print_r(Conexion::conectar()->errorInfo());
            }
            $stmt -> close();
        }
        static public function mdlSeleccionarRegistro($tabla, $item, $valor){

            if($item == null && $valor == null){
                $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla ORDER BY id DESC");

                $stmt->execute();
                return $stmt->fetchAll(); //fetchAll me devuelve todos los registros de la tabla
            }else{
                $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla WHERE $item = :$item");
                $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

                $stmt->execute();
                return $stmt->fetch();
            }

            $stmt -> close();
        }
        static public function mdlActualizarRegistro($tabla, $datos){
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre,email=:email,password=:password WHERE id=:id");

            
            $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
            $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
            $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

            if($stmt->execute()){
                return true;
            }else{
                print_r(Conexion::conectar()->errorInfo());
            }
            $stmt -> close();
        }
        static public function mdlEliminarRegistro($tabla, $valor){
            $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id=:id");
            
            $stmt->bindParam(":id", $valor, PDO::PARAM_INT);
            if($stmt->execute()){
                return true;
            }else{
                print_r(Conexion::conectar()->errorInfo());
            }
            $stmt -> close();
        }
            
    }

?>
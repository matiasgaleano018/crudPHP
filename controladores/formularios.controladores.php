<?php

    class ControladorFormulario{
        static public function ctrRegistro(){
            if(isset($_POST["registroNombre"])){
                $tabla = "registros";
                $datos = array("nombre"=>$_POST["registroNombre"], "email"=>$_POST["registroEmail"], "password"=>$_POST["registroPassword"]);
                $respuesta = ModeloFormulario::mdlRegistro($tabla, $datos);
                return $respuesta;
            }
        }

        static public function ctrSeleccionarUsuarios($item, $valor){
            $tabla = "registros";
            $respuesta = ModeloFormulario::mdlSeleccionarRegistro($tabla, $item, $valor);
            return $respuesta;
        }
        public function ctrLogin(){
            if(isset($_POST["loginEmail"])){
                $tabla = "registros";
                $item = "email";
                $valor = $_POST["loginEmail"];
                $respuesta = ModeloFormulario::mdlSeleccionarRegistro($tabla, $item, $valor);
                if($respuesta["email"] == $_POST["loginEmail"] && $respuesta["password"] == $_POST["loginPassword"]){
                    $_SESSION["validarIngreso"] = "ok";
                    echo '<script>
                        if(window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href);
                        }
                        window.location = "index.php?pagina=inicio";
                    </script>';
                    
                    echo '<div class="alert alert-success m-2"><i class="fas fa-check-circle"></i> Inicio de sesión exitoso!</div>';
                }else{
                    echo '<script>
                        if(window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href);
                        }
                    </script>';
                    echo '<div class="alert alert-danger m-2"><i class="fas fa-exclamation-circle"></i> Usuario no encontrado</div>';
                }
            }
        }
        static public function ctrActualizarUsuario(){
            if(isset($_POST["actualizarNombre"])){
                if($_POST["actualizarPassword"] != ""){
                    $password = $_POST["actualizarPassword"];
                }else{
                    $password = $_POST["passwordActual"];
                }
                $tabla = "registros";
                $datos = array("id"=>$_POST["idUsuario"],"nombre"=>$_POST["actualizarNombre"], "email"=>$_POST["actualizarEmail"], "password"=>$password);
                $respuesta = ModeloFormulario::mdlActualizarRegistro($tabla, $datos);
                if($respuesta){
                    return true;
                }
            }
        }
        public function ctrEliminarRegistro(){
            if(isset($_POST["eliminarRegistro"])){
                $tabla = "registros";
                $valor = $_POST["eliminarRegistro"];
                $respuesta = ModeloFormulario::mdlEliminarRegistro($tabla, $valor);
                if($respuesta){
                    echo '<script>window.location = "index.php?pagina=inicio";</script>';
                }
            }
        }
    }
?>
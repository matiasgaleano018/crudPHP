<?php

    if(isset($_GET["id"])){
        $item = "id";
        $valor  = $_GET["id"];
        $usuarios = ControladorFormulario::ctrSeleccionarUsuarios($item, $valor);
        
    }
?>


<div class="d-flex justify-content-center">
    <form class="bg-light p-5 m-2" method="post">
        <div class="mb-3">
            <div class="mb-3">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Escriba su nombre" name="actualizarNombre" value="<?php echo $usuarios["nombre"]?>">
                </div>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escriba su email" name="actualizarEmail" value="<?php echo $usuarios["email"]?>">
            </div>
            <div class="mb-3">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                    <input type="password" class="form-control" id="pwt" placeholder="Escriba su constraseña" name="actualizarPassword">
                    <input type="hidden" name="passwordActual" value="<?php echo $usuarios["password"]?>">
                    <input type="hidden" name="idUsuario" value="<?php echo $usuarios["id"]?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary container">Actualizar</button>
            <?php 
                $actualizar = ControladorFormulario::ctrActualizarUsuario();
                if($actualizar){
                    echo '<script>
                    if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                    </script>';
                    echo '<div class="alert alert-success m-2"><i class="fas fa-user-check"></i> El usuario ha sido actualizado</div>';
                    echo '<script>setTimeout(()=>{window.location = "index.php?pagina=inicio";}, 3000)</script>';
                }
                
            ?>
        </div>
    </form>
</div>
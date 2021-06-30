<div class="d-flex justify-content-center">
    <form class="bg-light p-5 m-2" method="post">
        <h2 class="text-center">Regístrese</h2>
        <div class="mb-3">
            <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" id="exampleInputPassword1" name="registroNombre">
            </div>
            </div>
            <label for="email" class="form-label">Email:</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="registroEmail">
            </div>
            <div id="emailHelp" class="form-text">Nunca compartimos tu email con alguien mas.</div>
            </div>
            <div class="mb-3">
            <label for="pwt" class="form-label">Contraseña:</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" id="pwt" name="registroPassword">
            </div>
            <button type="submit" class="btn btn-primary container">Enviar</button>
            <label for="pwt" class="form-label text-center">¿Ya tienes una cuenta? <a href="index.php?pagina=inicio">Iniciar Sesión</a></label>
            <?php 
                $registro = ControladorFormulario::ctrRegistro();
                if($registro){

                    echo '<script>
                        if(window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href);
                        }
                    </script>';
                    echo '<div class="alert alert-success m-2"><i class="fas fa-user-check"></i> El usuario ha sido registrado</div>';
                }
            ?>
        </div>
    </form>
</div>
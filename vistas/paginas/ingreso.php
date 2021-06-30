<div class="d-flex justify-content-center">
    <form class="bg-light p-5 m-2" method="post">
        <h2 class="text-center">Iniciar Sesión</h2>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="loginEmail">
            </div>
            </div>
            <div class="mb-3">
            <label for="pwt" class="form-label">Contraseña:</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" id="pwt" name="loginPassword">
            </div>
            <button type="submit" class="btn btn-primary container">Iniciar</button>
            <?php
                $ingreso = new ControladorFormulario;
                $ingreso -> ctrLogin();
            ?>
        </div>
    </form>
</div>
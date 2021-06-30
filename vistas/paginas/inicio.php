<?php
  if(!isset($_SESSION["validarIngreso"])){
    echo '<script>window.location = "index.php?pagina=ingreso";</script>';
    return;
  }else{
    if($_SESSION["validarIngreso"] != "ok"){
      echo '<script>window.location = "index.php?pagina=ingreso";</script>';
      return;
    }
    
  }
  $usuarios = ControladorFormulario::ctrSeleccionarUsuarios(null, null);

  
?>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Fecha de Registro</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($usuarios as $key => $value):?>
        <tr>
        <td><?php echo ($key + 1);?></td>
        <td><?php echo $value["nombre"];?></td>
        <td><?php echo $value["email"];?></td>
        <td><?php echo $value["fecha"];?></td>
        <td>
          <div class="btn-group">
            <div class="px-1">
              <button class="btn btn-warning" title="Editar"><a href="index.php?pagina=editar&id=<?php echo $value["id"];?>"><i class="fas fa-user-edit link-dark"></i></a></button>
            </div>
            <div class="px-1">
              <form method="post">
                <input type="hidden" value=<?php echo $value["id"];?> name="eliminarRegistro">
                <button type="submit" class="btn btn-danger" title="Eliminar"><i class="far fa-trash-alt"></i></button>
                <?php
                  $eliminar = new ControladorFormulario();
                  $eliminar -> ctrEliminarRegistro();
                
                ?>
              </form>
            </div>
          </div>
        </td>
      </tr>
      <?php endforeach?>
    </tbody>
</table>
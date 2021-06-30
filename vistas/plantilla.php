<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid bg-light p-1">
        <h1 class="text-center">Php course</h1>
    </div>
    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">
                <?php if(isset($_GET["pagina"])):?>
                    <?php if($_GET["pagina"]=="registro"): ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=registro" class="nav-link active">Registro</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=registro" class="nav-link">Registro</a>
                        </li>
                    <?php endif?>

                    <?php if($_GET["pagina"]=="ingreso"): ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=ingreso" class="nav-link active">Ingreso</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=ingreso" class="nav-link">Ingreso</a>
                        </li>
                    <?php endif?>

                    <?php if($_GET["pagina"]=="inicio"): ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=inicio" class="nav-link active">Inicio</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=inicio" class="nav-link">Inicio</a>
                        </li>
                    <?php endif?>

                    <?php if($_GET["pagina"]=="salir"): ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=salida" class="nav-link active">Salir</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=salir" class="nav-link">Salir</a>
                        </li>
                    <?php endif?>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="index.php?pagina=registro" class="nav-link active">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?pagina=ingreso" class="nav-link">Ingreso</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?pagina=inicio" class="nav-link">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?pagina=salir" class="nav-link">Salir</a>
                        </li>
                <?php endif?>
            </ul>
        </div>
    </div>
    <div class="container w-96">
        <?php
            if(isset($_GET["pagina"])){
                if($_GET["pagina"] == "inicio" || $_GET["pagina"] == "registro" || $_GET["pagina"] == "ingreso" || $_GET["pagina"] == "salir" || $_GET["pagina"] == "editar"){
                    include "paginas/".$_GET["pagina"].".php";
                }else{
                    include "paginas/404.php";
                }
            }else{
                include "paginas/registro.php";
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/65c05c0a98.js" crossorigin="anonymous"></script>
</body>
</html>
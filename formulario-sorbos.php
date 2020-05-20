<?php
include_once("clases/sorbo.php");
include_once("clases/db.php");
$db = new Db;
if (isset($_POST["submit"])) {
    $donador = $_POST["donador"];
    $codigo = $_POST["pin"];
    $fecha = $_POST["fecha"];
    $establecimiento = $_POST["establecimiento"];
    $organizador = $_POST["organizador"];
    $causa = $_POST["causa"];

    //INTENTAMOS QUE SE GUARDE EN BASE DE DATOS
<<<<<<< HEAD:formularios/formulario-sorbo.php
    $sorbo = new Sorbo($donador,$codigo,$fecha,$establecimiento,$organizador,$causa);
    
    if ($sorbo) {
        $guardarSorbo  = $db->guardarSorbo($sorbo);   
    }else {
=======
    $sorbo = new Sorbo($donador, $codigo, $fecha, $establecimiento, $organizador, $causa);

    if ($sorbo) {
        $guardarSorbo  = $db->guardarSorbo($sorbo);
    } else {
>>>>>>> modificaciones varias:formulario-sorbos.php
        echo "no se pudo crear el sorbo";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD:formularios/formulario-sorbo.php
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css"><!--CSS-->
=======
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!--CSS-->
>>>>>>> modificaciones varias:formulario-sorbos.php
    <title>Agregar Sorbo</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div>
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="logotipo" width="19%">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link font-roboto" href="https://www.sorbosolidario.com/causas-sociales/#alida">Volver<span class="sr-only"></span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 mx-auto ">
                <h2>Ingreso de sorbos</h2>
            </div>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="mx-auto">
                    <div class="col-12 col-md-6">
                        <label for="">Donador:</label>
                        <input name="donador" type="text" value="" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="">Numero del Sorbo:</label>
                        <input name="pin" type="string" value="" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="">Fecha:</label>
                        <input name="fecha" type="date" value="" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="">Establecimiento:</label>
                        <input name="establecimiento" type="text" value="" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="">Oganizador:</label>
                        <input name="organizador" type="text" value="" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="">Causa:</label>
                        <input name="causa" type="text" value="" required>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class=" mx-auto col-12 col-md-3">
                    <button name="submit" type="submit">Agregar</button>
                </div>
            </div>
        </form>
        <?php if (isset($_POST["pin"])) : ?>
            <div class="row">
                <div class="col-4 mx-auto mt-3">
                    <span>Sorbo agregado con exito</span>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>
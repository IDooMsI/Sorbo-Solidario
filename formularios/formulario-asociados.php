<?php
include_once("../clases/establecimiento-asociado.php");
include_once("../clases/db.php");
$db = new Db;

function createImg($file, $request)
{
    $nombre = $file["imagen"]["name"];
    $archivo = $file["imagen"]["tmp_name"];
    $ext = pathinfo($nombre, PATHINFO_EXTENSION);

    $miArchivo = "asociados/";
    $miArchivo = $miArchivo . $request['nombre'] . "." . $ext;

    move_uploaded_file($archivo, $miArchivo);
    return $miArchivo;
}


if (isset($_POST["submit"])) {
    $nombre = $_POST["nombre"];
    $rubro = $_POST["rubro"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST['direccion'];
    $imagen = createImg($_FILES, $_POST);
    if (isset($_POST["facebook"])) {
        $facebook = $_POST["facebook"];
    } else {
        $facebook = "no posee";
    };

    if (isset($_POST["instagram"])) {
        $instagram = $_POST["instagram"];
    } else {
        $instagram = "no posee";
    };

    if (isset($_POST["twitter"])) {
        $twitter = $_POST["twitter"];
    } else {
        $twitter = "no posee";
    };

    if (isset($_POST["web"])) {
        $web = $_POST["web"];
    } else {
        $web = "no posee";
    };

    // INTENTAMOS QUE SE GUARDE EN BASE DE DATOS
    $establecimiento = new EstablecimientoAsociado($nombre, $rubro, $telefono, $direccion, $imagen, $facebook, $instagram, $twitter, $web);
    if ($establecimiento) {
        $guardarEstablecimiento  = $db->guardarEstablecimiento($establecimiento);
    } else {
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <!--CSS-->
    <title>Agregar Sorbo</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div>
            <a class="navbar-brand" href="#">
                <img src="../img/logo.png" alt="logotipo" width="19%">
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
                <h2>Ingreso de asociado</h2>
            </div>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="mx-auto">
                    <div class="col-12 col-md-6">
                        <label for="">Nombre:</label>
                        <input name="nombre" type="string" value="" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="">Rubro:</label>
                        <input name="rubro" type="string" value="" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="">Telefono:</label>
                        <input name="telefono" type="string" value="" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="">Direccion:</label>
                        <input name="direccion" type="string" value="" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="">imagen:</label>
                        <input name="imagen" type="file" value="" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="">Facebook:</label>
                        <input name="facebook" type="text" value="">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="">Instragram:</label>
                        <input name="instragram" type="text" value="">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="">Twitter:</label>
                        <input name="twitter" type="text" value="">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="">Web:</label>
                        <input name="web" type="text" value="">
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
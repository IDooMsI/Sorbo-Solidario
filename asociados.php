<?php
include_once("clases/db.php");

$db = new Db;
$establecimientos = $db->traerEstablecimientos();
$cantidad = $db->contarEstablecimientos();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3    zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/asociados.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--CSS-->
    <title>Establecimientos Asociados</title>
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
    <div>
        <img src="img/imagen-de-causas2.png" alt="" width="100%">
    </div>
    <div class="container fuente">
        <div class="row">
            <div class="col-12">
                <div class="text-center titulo">
                    <h1 class="col-12">Nuestros establecimientos asociadas</b></h1>
                </div>
                <div class="my-4">
                    <div class="col-12 text-center">
                        <h3 class="totaldonado">Total de Asociados: <b><?= $cantidad ?></b></h3>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($establecimientos as $est) : ?>
                        <div class=" col-3">
                            <div class="padre">
                                <div class="text-center">
                                    <h1><strong><?= $est['nombre'] ?></strong></h1>
                                </div>
                                <div class="text-center">
                                    <h3>Rubro: <strong><?= $est['rubro'] ?></strong></h3>
                                </div>
                                <div class="text-center">
                                    <img class="w-50" src="formularios/<?= $est['imagen'] ?>" alt="foto">
                                </div>
                                <div class="text-center">
                                    <h3>Direccion: <strong><?= $est['direccion'] ?></strong></h3>
                                </div>
                                <div class="text-center">
                                    <h3>Telefono: <strong><?= $est['telefono'] ?></strong></h3>
                                </div>
                                <div class="row text-center">
                                    <div class="col-3">
                                        <a href="<?= $est['facebook'] ?>"><i class="fab fa-2x fa-facebook-square" title="Facebook"></i></a>
                                    </div>
                                    <div class="col-3">
                                        <a href="<?= $est['instagram'] ?>"><i class="fab fa-2x fa-instagram" title="Instagram"></i></a>
                                    </div>
                                    <div class="col-3">
                                        <a href="<?= $est['twitter'] ?>"><i class="fab fa-2x fa-twitter-square" title="Twitter"></i></a>
                                    </div>
                                    <div class="col-3">
                                        <a href="<?= $est['web'] ?>"><i class="fas fa-2x fa-globe-europe" title="Pagina web"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
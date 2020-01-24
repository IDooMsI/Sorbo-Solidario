<?php
$donado = [];

$donacionesJson = file_get_contents("base-de-datos/base.json");
$arrayDonaciones = json_decode($donacionesJson,true);
$totalDonaciones = count($arrayDonaciones);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3    zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"><!--CSS-->
    <title>Donaciones Alida</title>
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
                <div class="row titulo">
                    <h1 class="col-12">Sorbos recaudados para <b>Alida</b></h1>
                </div>
                <div class="row my-3">
                <div class="col-12 conttotaldonado">
                        <div class="col-9">
                            <h3 class="totaldonado">Total de Sorbos:<b><?= $totalDonaciones ?></b></h3>
                        </div>
                    </div>
                </div>
                <div class="row mt-4" style="overflow-x:auto;">
                    <table class=" col-12 table">
                        <tr class="">
                            <th>Colaborador</th>
                            <th>N° Sorbo</th>
                            <th>Fecha</th>
                            <th>Lugar</th>
                            <th>Organiza</th>
                        </tr>
                        <?php foreach($arrayDonaciones as $key => $donacion): ?>
                            <tr class="">
                            <?php foreach($donacion as $dato): ?>
                                <th><?= $dato?></th>
                            <?php endforeach;?>        
                            </tr>    
                        <?php endforeach;?>    
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
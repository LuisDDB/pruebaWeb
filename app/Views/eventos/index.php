<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include("componentes/head.php"); ?>
    <title>Eventos</title>

</head>

<body class="bg-dark">


    <!-- Header -->
    <?=$this->include("componentes/header.php"); ?>
    <!-- fin header -->


    <br>
    <br>
    <br>

    <div class="container ">
        <table class="table table-bordered border-light table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre del evento</th>
                    <th scope="col">Organizador</th>
                    <th scope="col">Lugar</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Cantidad de invitados</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <!-- Inicio de forEach -->
                <?php
                    foreach($evento as $e):
                ?>
                <tr>
                    <td><?=$e["id"];?></td>
                    <td><?=$e["nombreEvento"];?></td>
                    <td><?=$e["nombreOrganizador"];?></td>
                    <td><?=$e["lugar"];?></td>
                    <td><?=$e["fecha"];?></td>
                    <td><?=$e["cantInvitados"];?></td>
                    <td>Aquí van iconos</td>
                </tr>
                <!-- Fin forEach -->
                <?php  endforeach;?>
        </table>
    </div>
</body>

</html>
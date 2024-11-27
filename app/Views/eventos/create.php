<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include("componentes/head.php");?>
    <title>Crear Evento</title>
</head>

<body class="bg-dark">

    <!-- Aqui comienza el header -->
    <?= $this->include("componentes/header.php");?>
    <!-- fin header -->


    <br>
    <br>

    <main class="container border border-4 w-50 border-success rounded-3 mt-4">

        <br>
        <h1 class=" mx-auto text-light fs-2 text-center ">Crear nuevo evento</h1>

            <form name="eventoForm" method="POST" action="<?=base_url();?>/store">
                <!-- Nombre evento -->
                <div class="mt-4 mb-2">
                    <label for="nombreEvento" class="form-label text-light">Nombre del evento</label>
                    <input type="text" class="form-control" name="nombreEvento" require>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <!-- columna Lugar y Organizador -->
                <div class="row mb-5">
                    <!-- Lugar -->
                    <div class=" col-6">
                        <label for="lugar" class="form-label text-light">Lugar</label>
                        <input type="text" class="form-control" name="lugar" require>
                    </div>

                    <!-- Nombre organizador -->
                    <div class=" col-6">
                        <label for="nombreOrganizador" class="form-label text-light">Nombre del
                            organizador</label>
                        <input type="text" class="form-control" name="nombreOrganizador" require>
                    </div>
                </div>

                <!-- Columna invitados y fecha -->
                <div class="row mb-2">
                    <!-- Cantidad invitados-->
                    <div class=" col-6">
                        <label for="cantInvitados" class="form-label text-light">Cantidad de
                            invitados</label>
                        <input type="num" class="form-control" name="cantInvitados" require>
                    </div>

                    <!-- Fecha -->
                    <div class=" col-6">
                        <label for="fecha" class="form-label text-light">Fecha del evento</label>
                        <input type="date" class="form-control" name="fecha" require>
                    </div>
                </div>

                <button type="submit" class="mt-5 mb-4 btn btn-primary">Submit</button>


            </form>

    </main>
</body>

</html>
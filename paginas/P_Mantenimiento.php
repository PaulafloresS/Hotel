<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <!-- Google font -->
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet"> 
      <!-- ionicons -->
      <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

      <link rel="stylesheet" href="../css/Estilo.css">
        <title>MANTENIMIENTO</title>
    </head>
    <body>
        <!-- Menu -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="P_Inicial.php" id="iniciar-sesion"><img src="../imagenes/logotipo.jpg" class="logo-brand" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                </li>
                <li class="nav-item">
                <a class="nav-link" href="P_Inicial.php" id="iniciar-sesion">Inicio</a>
            </ul>
            </div>
        </div>
        </nav>

        <!-- Menu  -->
        <section id="mantenimiento" class="topmargin-lg">
            <div class="container-fluid">
                <div class="content-center topmargin-lg">
                <h2 ><b>Mantenimiento</b></h2>
                </div>
            
                <!-- Opciones -->
                <div class="row">

                    <div class="col-md-6">
                        <div class="man-container">
                            <div class="text-center topmargin-lg">
                                <h2><b>Habitaciones</b></h2>
                                <br>
                                <a href="P_MHab_Listado.php"><h3>Actualizar habitacion</h3></a>
                                <a href="P_RegistroHabitacion.php"><h3>Registrar nueva habitacion</h3></a>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <div class="man-container">
                            <div class="text-center topmargin-lg">
                                <h2><b>Empleados</b></h2>
                                <br>
                                <a href="P_MEmpl_Listado.php"><h3>Actualizar empleado</h3></a>
                                <a href="P_RegistroEmpleado.php"><h3>Registrar nuevo empleado</h3></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="man-container">
                            <div class="text-center topmargin-lg">
                                <h2><b>Clientes</b></h2>
                                <br>
                                <a href="P_MClien_Listado.php"><h3>Actualizar cliente</h3></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="man-container">
                            <div class="text-center topmargin-lg">
                                <h2><b>Servicios</b></h2>
                                <br>
                                <a href="P_MServ_Listado.php"><h3>Actualizar servicio</h3></a>
                                <a href="P_RegistroServicio.php"><h3>Registrar nuevo servicio</h3></a>
                            </div>
                        </div>
                    </div>
                
                </div>            
            </div>
        </section>

        <section id="footer" class="bd-f"> 
            <div class="container">
                <div class="content-center">
                <p><b>El descanso medieval</b></p>
                <p>......................................................</p>
                </div>
            </div>
        </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../style.css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="../assets/codoacodo.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>codo a codo</title>
</head>

<body>
    <header>
        <!-- navbar -->
        <div>
            <nav class="navbar navbar-expand-lg bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand text-white" href="#">
                        <img src="../assets/codoacodo.png" alt="logo codo a codo" width="60" height="40"
                            class="d-inline-block align-text-top" />
                        Conf Bs As
                    </a>
                </div>
                <div class="container-fluid tex">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item text-white">
                                <a class="nav-link active text-white" aria-current="page" href="../index.html">La
                                    conferencia</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Los oradores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">El lugar y la fecha</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="formulario.html">Formulario de registro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="compraTikets.html">Comprar tickets</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <br /><br /><br />

        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../assets/codoacodo.png" alt="" width="80" height="60" class="d-inline-block align-text-top">
                    Usuarios
                </a>
            </div>
        </nav>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $conexion = mysqli_connect("localhost", "root", "", "usuarios_conf_bs_as");

      $consultas = mysqli_query($conexion, "SELECT * FROM usuarios");

      while ($listadoArray = mysqli_fetch_array($consultas)) {
        echo "<tr>";
        echo "<th scope='row'>" . $listadoArray['id_usuarios'] . "</th>";
        echo "<td>" . $listadoArray['Nombre'] . "</td>";
        echo "<td>" . $listadoArray['Apellido'] . "</td>";
        echo "<td>" . $listadoArray['Email'] . "</td>";
        echo "<td>" . $listadoArray['Status'] . "</td>";
        echo "</tr>";
      }

      mysqli_close($conexion);
    ?>
  </tbody>
</table>
               
                          
                   

    </main><br>


    <!-- navbar inferior -->
    <footer>
        <nav>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">Preguntas frecuentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Contáctanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Prensa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Conferencias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Términos y condiciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Privacidad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Estudiantes</a>
                </li>
            </ul>
        </nav>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="index.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->


</body>

</html>

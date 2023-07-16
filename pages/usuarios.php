<?php

$conexion = mysqli_connect("localhost", "root", "", "usuarios_conf_bs_as");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["Nombre"];
    $apellido = $_POST["Apellido"];
    $email = $_POST["Email"];
    $status = $_POST["Status"];

    // Realizar la inserción en la base de datos
    $query = "INSERT INTO usuarios (Nombre, Apellido, Email, Status) VALUES ('$nombre', '$apellido', '$email', '$status')";
    $resultado = mysqli_query($conexion, $query);

    if ($resultado) {
        // Redirigir a la página "TablaDatos"
        header("Location: TablaDatos.php");
        exit(); // Asegurarse de terminar la ejecución del script después de la redirección
    } else {
        echo "Error al registrar el usuario.";
    }
}
    


mysqli_close($conexion);
?>
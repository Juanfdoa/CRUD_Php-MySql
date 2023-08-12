<?php
include("../Modelo/connection.php");
$conexion = connection();

$id = null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO users VALUES ('$id','$name','$lastname','$username','$password','$email')";

if (mysqli_query($conexion, $sql)  == TRUE) {
    echo "
    <script>
        alert('Usuario registrado correctamente');
        window.location = '../Vista/index.php';
    </script>
    ";
}else {
    "
    <script>
        alert('Error al registrar usuario');
        window.location = '../Vista/index.php';
    </script>
    ";
}

mysqli_close($conexion);

?>
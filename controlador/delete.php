<?php

include("../modelo/connection.php");
$conexion = connection();

$id=$_GET["id"];

$sql = "DELETE FROM users WHERE id='$id'";

$delete = $conexion -> query($sql);
if ($delete) {
    echo "<script>
    alert('El registro ha sido eliminado');
    location.href='../Vista/index.php';
    </script>";
}else{
    echo "<script>
    alert('El registro no pudo ser eliminado');
    location.href='../Vista/index.php';
    </script>";
}

?>
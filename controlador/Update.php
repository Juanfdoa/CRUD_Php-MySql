<?php

include("../modelo/connection.php");
$conexion = connection();

$id=$_POST["id"];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql="UPDATE users SET name='$name', lastname='$lastname', username='$username', password='$password', email='$email' WHERE id='$id'";
$update = $conexion -> query($sql);

if ($update) {
	echo "<script>
	alert('El registro ha sido Modificado');
	location.href='../Vista/index.php';
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='index.php';
	</script>";
}

?>
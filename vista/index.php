<?php
include("../modelo/connection.php");
$conexion = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($conexion, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Crud-php</title>
</head>
<body>
    <h1>CRUD</h1>
    <h2>PHP-MySql</h2>
    <div class="mt-5">
        <form class="row g-3 needs-validation" action="../controlador/create.php" method="POST">
            <div class="col-md-4">
                <input type="text" name="name" class="form-control" placeholder="Nombre"> 
            </div>
            <div class="col-md-4">
                <input type="text" name="lastname" class="form-control" placeholder="Apellido">
            </div>
            <div class="col-md-4">
                <input type="text" name="username" class="form-control" placeholder="Nombre de usuario">
            </div>
            <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="col-md-6">
                <input type="password" name="password" class="form-control" placeholder="contraseña"> 
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
        </form>
    </div>

    <div class="m-5">   
    <h3>Usuarios registrados</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>username</th>
                <th>Email</th>
                <th>Password</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_array($query)): ?>
            <tr>
                <th><?= $row['id'] ?></th>
                <th><?= $row['name'] ?></th>
                <th><?= $row['lastname'] ?></th>
                <th><?= $row['username'] ?></th>
                <th><?= $row['email'] ?></th>
                <th><?= $row['password'] ?></th>
                <th><a href="update.php?id=<?= $row['id'] ?>"><img src="public/img/edit.png" width="30px"/></th>
                <th><a href="../controlador/delete.php?id=<?= $row['id']?>"><img src="public/img/delete.png" width="30px"/></a></th>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
    </div>
</body>
</html>
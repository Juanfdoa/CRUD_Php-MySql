<?php
include("../modelo/connection.php");
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query)

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
    <title>Editar usuarios</title>
</head>
<body>
    <div class='m-5'>
        <h3>Actualizar usuario</h3>
        <form class="row g-3 needs-validation" action="../controlador/Update.php" method="POST">
            <div class="col-md-0">
                <input type="hidden" name="id" class="form-control" value="<?= $row['id'] ?>">
            </div>
            <div class="col-md-4">
                <input type="text" name="name" class="form-control" value="<?= $row['name'] ?>">
            </div>
            <div class="col-md-4">
                <input type="text" name="lastname" class="form-control" value="<?= $row['lastname'] ?>">
            </div>
            <div class="col-md-4">
                <input type="text" name="username" class="form-control" value="<?= $row['username'] ?>">
            </div>
            <div class="col-md-6">
                <input type="email" name="email" class="form-control" value="<?= $row['email'] ?>">
            </div>
            <div class="col-md-6">
                <input type="password" name="password" class="form-control" value="<?= $row['password'] ?>">
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>
</body>
</html>
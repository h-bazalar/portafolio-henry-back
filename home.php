<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['uname'])) {

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="shadow w-450 p-3 text-center">
            <h3 class="display-4">Hola, <?=$_SESSION['uname']?></h3>
            <a href="Logout.php" class="btn btn-warning">cerrar sesión</a>
        </div>      
    </div>
</body>

</html>

<?php }else {
    header("Location: login.php");
    exit;
} ?>
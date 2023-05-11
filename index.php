<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio de sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
      <form class="shadow w-450 p-3" 
            action="php/signup.php" 
            method="post">

          <h4 class="display-4 fs-1">Crear Cuenta</h4><br>
          <?php if(isset($_GET["error"])){ ?>
          <div class="alert alert-danger" role="alert">
              <?php echo $_GET["error"]; ?>
          </div>
          <?php }?>

          <?php if(isset($_GET["success"])){ ?>
          <div class="alert alert-success" role="alert">
              <?php echo $_GET["success"]; ?>
          </div>
          <?php }?>

        <div class="mb-3">
          <label 
                class="form-label">Nombre Completo</label>
          <input 
                type="text" 
                class="form-control"
                name="fname"
                value="<?php echo (isset($_GET["fname"])) ?$_GET["fname"]:"" ?>"
                >
        </div>

        <div class="mb-3">
          <label class="form-label">Nombre de Usuario</label>
          <input 
                type="text" 
                class="form-control"
                name="uname"
                value="<?php echo (isset($_GET["uname"])) ?$_GET["uname"]:"" ?>"
                >
        </div>

        <div class="mb-3">
          <label class="form-label">Contraseña</label>
          <input 
                type="password" 
                class="form-control"
                name="pass"
                >
        </div>

        <button type="submit" class="btn btn-primary">Registrarse</button>
        <a href="login.php" class="link-secondary">Iniciar Sesión</a>
      </form>      
    </div>
</body>

</html>
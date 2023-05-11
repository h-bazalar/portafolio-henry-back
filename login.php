<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Login</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
   <div class="d-flex justify-content-center align-items-center vh-100">
      <form class="shadow w-450 p-3" 
            action="php/login.php" 
            method="post">

         <h4 class="display-4 fs-1">Iniciar Sesión</h4><br>
         <?php if(isset($_GET["error"])){ ?>
         <div class="alert alert-danger" role="alert">
            <?php echo $_GET["error"]; ?>
         </div>
         <?php }?>

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

      <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
      <a href="index.php" class="link-secondary">Registrarse</a>
      </form>      
   </div>
</body>

</html>
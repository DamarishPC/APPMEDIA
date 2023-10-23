<!DOCTYPE html>
<html lang="es-pe">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="css/iniciar.css">
</head>
<body>
    <h1>INICIAR SESION</h1>
    <form action=""
          method="get">
        <input type="text" name="usuario" placeholder="Ingrese su Usuario"><br>
        <input type="password" name="password" placeholder="Ingrese su Password"><br>
        <input class="ingresar-btn" type="submit" name="ingresar" value="Ingresar">
        <input class="registrarse-btn" type="submit" name="registrarse" value="Registrarse">
        <input type="submit" name="regresar" value="Regresar">
    </form>
<?php
if(isset($_GET['ingresar'])){
   $usuario = $_GET['usuario'];
   $password = $_GET['password'];

   if ($usuario === 'Dama03' && $password === '1234'){
    if(isset($_GET['ingresar'])){
        header('Location: panel.php');
    }
  }
}
if(isset($_GET['registrarse'])){
    header('Location: nuevousuario.php');
  }
if(isset($_GET['regresar'])){
    header('Location: Appmedia.php');
}
?>
</body>
</html>
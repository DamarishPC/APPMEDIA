<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>
    <link rel="stylesheet" href="css/nuevousuario.css">
</head>
<body>
    <h1>CREAR NUEVO USUARIO</h1>
    <form action="" method="get">
         <input type="text" name="nombre" placeholder="Ingrese su Nombre"><br>
         <input type="text" name="usuario" placeholder="Ingrese su Usuario"><br>
         <input type="password" name="password" placeholder="Ingrese su Password"><br>
         <input type="text" name="edad" placeholder="Ingrese su Edad"><br>
         <input class="crear-btn" type="submit" name="crear" value="Crear Usuario">
         <input class="iniciar-btn" type="submit" name="iniciar" value="Iniciar Sesion">
         <input type="submit" name="regresar" value="Regresar">
    </form>

<?php
if(isset($_GET['crear'])){
   $nombre = $_GET['nombre'];
   $usuario = $_GET['usuario'];
   $password = $_GET['password'];
   $edad = $_GET['edad'];
     
    header('Location: nuevousuario.php');
}
  
if(isset($_GET['iniciar'])){
    header('Location: panel.php');
  }
if(isset($_GET['regresar'])){
    header('Location: Appmedia.php');
}
?>
</body>
</html>
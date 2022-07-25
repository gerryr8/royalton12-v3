<?php 
session_start();

$varsession=$_SESSION['email'];
if($varsession == null || $varsession = ''){

echo("Inicia sesión");
header("Location: login.php");

die();
 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <link rel="stylesheet" href="css/admin.css?v=<?php echo(rand()); ?>" />
<script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>
   

    <title>Resguardo de equipos</title> 
    <script src="jspdf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
   
    <script src="app.js"></script>
  
    <title>Registro de Usuarios</title>
</head>
<body style="background-image:url(green-concrete-wall.jpg);">
<header>
    <div class="flex" style="position: relative;">
        <div class="logo" style="position:relative; left:10%;">
            <img class="royal" width="95%" height="auto"src="royal.png">
          </div>
          <div class="user" style="position: relative; left:10%;">
        <h3 style="position:relative; color: white; font-weight: 500;">Bienvenido: <br><?php echo  $_SESSION['nombre'];  ?> <?php echo $_SESSION['apellido']; ?></h3>
</div>
        <div class="link" style="position: relative; left:10%;">
            <a href="registro.php">Registrar Usuarios</a>
        </div>
        <div class="link">
         <a href="cerrar.php">Cerrar Sesión</a>
        </div>
    </div>
</header>
<section class="register">
    <div style="display: flex; ">
    <div style="display:flex-box; width:40%; margin-right: 10%;">
    <h2 style="padding-bottom: 20px; font-weight: 500;">Registro de Usuarios</h2>
  
    <form action="insert_register.php" method="post"">
        <input class="regis" type="name" placeholder="Nombre" required name="name" style="display: block; margin-bottom:10px;">
        <input class="regis" type="name" placeholder="Apellido" required name="lastname" style="display: block; margin-bottom:10px;">
        <input class="regis" type="email" placeholder="Correo" required name="email" style="display: block; margin-bottom:10px;">
        <input class="regis" type="password" placeholder="Contraseña" required name="password" style="display: block; margin-bottom:10px;">
        <h3 style="padding-bottom: 10px; font-weight: 500;">Permisos</h3>
        <select required name="role" style="display: block; margin-bottom:20px;">
            <option value="1">Administrador</option>
            <option selected value="2">Usuario</option>
        </select>
        <input class="btn-reg"type="submit" value="Agregar" style="display: inline-block; margin-bottom:10px;">
        <a style="margin-left: 30px;"href="admin.php"> Regresar</a>
    </form>


</div>


<div style="display: flex-box;  height: auto; width: 80%;">
    <h2 style="padding-bottom: 20px; font-weight: 500;">Usuarios Agregados</h2>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <table width="100% "border="0">
                    <tr>
    
                        <td class="tbg" >Nombre</td>
                        <td class="tbg">Apellido</td>
                        <td class="tbg">Email</td>
                        <td class="tbg">Rol</td>
                    </tr>
                    <?php 
                    include "dataseconect.php";


                         $query="SELECT * FROM usuarios";
                         $result = mysqli_query($conn, $query);

                         //function(if =1 admin 2 rol);
                        while ($row = mysqli_fetch_assoc($result)) {?>
                        
                    <tr>
                        <td style="padding-left: 5px;"><?php echo $row['nombre'];?></td>
                        <td style="padding-left: 5px;"><?php echo $row['apellido'];?></td>
                        <td style="padding-left: 5px;"><?php echo $row['email'];?></td>
                        <td style="text-align: center;"><?php echo $row['rol'];?></td>

                    </tr>
                    <?php }
                  
                    ?>
                </table>

    </div>
                        </div>
</section>
  
   
    
</body>
</html>
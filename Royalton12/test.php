<?php include "dataseconect.php";


$departamento = $_POST['departamento'];
$nombres = $_POST['nombres'];
$puesto = $_POST['puesto'];
$n_anfitrion = $_POST['n_anfitrion'];


$consulta = "INSERT INTO resguardos (departamento, nombres, puesto, n_anfitrion) VALUES ('$departamento','$nombres','$puesto','$n_anfitrion')";


$query = mysqli_query($conn, $consulta);

if($query){?>
    <script>window.alert("Reporte enviado");
                window.location.href='user.php';
                location.reload();</script> <?php

}else{
    echo "incorrecto";
    ?>
    <script>window.alert("Falló al enviar tu reporte");
                window.location.href='user.php';
                location.reload();</script> <?php


}

?>



























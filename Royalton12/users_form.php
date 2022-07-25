
<?php include("dataseconect.php");



  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado


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
    <script src="jspdf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <script src="app.js"></script>
    <link rel="stylesheet" href="css/admin.css?v=<?php echo(rand()); ?>" />
    <link rel="stylesheet" href="css/form.css?v=<?php echo(rand()); ?>" />
    <title>User forms</title>
</head>
<body style="background-image: url(green-concrete-wall.jpg);">
    
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
<h2 style="font-weight:500; display: inline; margin-left:10%;">Firmar Formularios</h2>
    <a href="javascript:history.back()"> Regresar</a>
<div class="form">

  
    <?php 

    $id=$_GET['id'];

    $query="SELECT * FROM resguardos WHERE id_form ='$id'";

    $res=mysqli_query($conn, $query);
    
    $row = mysqli_fetch_assoc($res)?>
        <!--                
        <h2>Nombre: <?php /* echo $row['nombres'];?></h2>
        <h2>Departamento: <?php echo $row['departamento'];?></h2>
        <h2>Puesto: <?php echo $row['puesto']; */?></h2>-->
       
<form action="" id="form"> 

                        <label for="departamentos" class="form-label">Deparment</label>
                        <select disabled class="form-select" id="departamentos" name="departamento">
                            <option seleccted value=""><?php echo $row['departamento'];?></option>
                           
                        </select>
                        <br>
                 


                    
                            <label for="nombre" class="form-label">Last names</label>
                            <input disabled class="form-control" id="nombre" name="nombres" placeholder="<?php echo $row['nombres'];?>">
                        
                    
                                <label for="puesto" class="form-label">Position</label>
                                <input disabled type="text" class="form-control" id="puesto" name="puesto" placeholder="<?php echo $row['puesto'];?>">
                           <br>
                               
                                    <label for="numerodealfitrion" class="form-label">N° host</label>
                                    <input disabled type="text" class="form-control" id="numerodealfitrion" name="n_anfitrion" placeholder="<?php echo $row['n_anfitrion'];?>">
                            
            
</div>
                <section style="display: flex;" >

  <div class="column-1">                  
                        
                            <label for="" class="form-label">New hotel</label>
                            <div class="form-check-inline">
                                <input type="radio" name="newhotels" class="form-check-input" id="discapacidad-si" value="1">
                                <label for="discapacidad-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" name="newhotels" class="form-check-input" id="discapacidad-no" value="0" checked>
                                <label for="discapacidad-no" class="form-check-label">No</label>
                            </div>
                       
                        
                                <label for="" class="form-label">New post</label>
                                <div class="form-check-inline">
                                    <input type="radio" name="newposts" class="form-check-input" id="discapacidad-si" value="1">
                                    <label for="discapacidad-si" class="form-check-label">Si</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="radio" name="newposts" class="form-check-input" id="discapacidad-no" value="0" checked>
                                    <label for="discapacidad-no" class="form-check-label">No</label>
                                </div>
                          
                                
                                    <label for="" class="form-label">New spa</label>
                                    <div class="form-check-inline">
                                        <input type="radio" name="newspas" class="form-check-input" id="discapacidad-si" value="1">
                                        <label for="discapacidad-si" class="form-check-label">Si</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input type="radio" name="newspas" class="form-check-input" id="discapacidad-no" value="0" checked>
                                        <label for="discapacidad-no" class="form-check-label">No</label>
                                    </div>
                             
                                    
                                        <label for="" class="form-label">New change</label>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="newchanges" class="form-check-input" id="discapacidad-si" value="1">
                                            <label for="discapacidad-si" class="form-check-label">Si</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="newchanges" class="form-check-input" id="discapacidad-no" value="0" checked>
                                            <label for="discapacidad-no" class="form-check-label">No</label>
                                        </div>
                                  
                                    
                                            <label for="" class="form-label">Usuario pc/Remoto
                                                (AD)</label>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" name="usuarioremotos" class="form-check-input" id="discapacidad-si" value="1">
                                                <label for="discapacidad-si" class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" name="usuarioremotos" class="form-check-input" id="discapacidad-no" value="0" checked>
                                                <label for="discapacidad-no" class="form-check-label">No</label>
                                            </div>
                                    
                                            
                                                <label for="" class="form-label">Correo
                                                    electronico</label>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" name="Correoelectronicos" class="form-check-input" id="discapacidad-si" value="1">
                                                    <label for="discapacidad-si" class="form-check-label">Si</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" name="Correoelectronicos" class="form-check-input" id="discapacidad-no" value="0" checked>
                                                    <label for="discapacidad-no" class="form-check-label">No</label>
                                                </div>





                                            
                                                    <label for="" class="form-label">Internet (sitios
                                                        especificos)</label>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" name="internets" class="form-check-input" id="discapacidad-si" value="1">
                                                        <label for="discapacidad-si" class="form-check-label">Si</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" name="internets" class="form-check-input" id="discapacidad-no" value="0" checked>
                                                        <label for="discapacidad-no" class="form-check-label">No</label>
                                                    </div>
                                               
                                </div>


<div class="column-2">

                                                    
                                                        <label for="" class="form-label">Pin de impresion</label>
                                                        <div class="form-check form-check-inline">
                                                            <input type="radio" name="pins" class="form-check-input" id="discapacidad-si" value="1">
                                                            <label for="discapacidad-si" class="form-check-label">Si</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input type="radio" name="pins" class="form-check-input" id="discapacidad-no" value="0" checked>
                                                            <label for="discapacidad-no" class="form-check-label">No</label>
                                                        </div>
                  
                                              
                                                        
                                                            <label for="" class="form-label">Vision online (Vincard)</label>

                                                            <div class="form-check form-check-inline">
                                                                <input type="radio" name="visions" class="form-check-input" id="discapacidad-si" value="1">
                                                                <label for="discapacidad-si" class="form-check-label">Si</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input type="radio" name="visions" class="form-check-input" id="discapacidad-no" value="0" checked>
                                                                <label for="discapacidad-no" class="form-check-label">No</label>
                                                            </div>
                                                   

                                                    
                                                            

                                                                <label for="" class="form-label">Abrhil aplicativo</label>
                                                                <div class="form-check form-check-inline">
                                                                    <input type="radio" name="aplicativos" class="form-check-input" id="discapacidad-si" value="1">
                                                                    <label for="discapacidad-si" class="form-check-label">Si</label>
                                                                </div>

                                                                <div class="form-check form-check-inline">
                                                                    <input type="radio" name="aplicativos" class="form-check-input" id="discapacidad-no" value="0" checked>
                                                                    <label for="discapacidad-no" class="form-check-label">No</label>
                                                                </div>
                                                            



                                                                
                                                                    <label for="" class="form-label">Abrhil asistencia (web)</label>
                                                                    <div class="form-check form-check-inline">
                                                                        <input type="radio" name="asistencias" class="form-check-input" id="discapacidad-si" value="1">
                                                                        <label for="discapacidad-si" class="form-check-label">Si</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input type="radio" name="asistencias" class="form-check-input" id="discapacidad-no" value="0" checked>
                                                                        <label for="discapacidad-no" class="form-check-label">No</label>

                                                                    </div>
                                                                

                                                           
                                                                    
                                                                        <label for="" class="form-label">Sistema zafiro</label>
                                                                        <div class="form-check form-check-inline">
                                                                            <input type="radio" name="zafiros" class="form-check-input" id="discapacidad-si" value="1">
                                                                            <label for="discapacidad-si" class="form-check-label">Si</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input type="radio" name="zafiros" class="form-check-input" id="discapacidad-no" value="0" checked>
                                                                            <label for="discapacidad-no" class="form-check-label">No</label>
                                                                        </div>
   



                                                                
                                                                        
                                                                            <label for="" class="form-label">Consola verkada</label>
                                                                            <div class="form-check form-check-inline">
                                                                                <input type="radio" name="consolas" class="form-check-input" id="discapacidad-si" value="1">
                                                                                <label for="discapacidad-si" class="form-check-label">Si</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input type="radio" name="consolas" class="form-check-input" id="discapacidad-no" value="0" checked>
                                                                                <label for="discapacidad-no" class="form-check-label">No</label>
                                                                            </div>
                                                                  

</div>



<div>

<span class="d-block pb-2">Firma digital aqui</span>
                                                                    <div class="signature mb-2" style="width: 80px; height: 100px;">
                                                                        <canvas id="signature-canvas" style="border: 1px dashed red; width: 200px; height: 100px;"></canvas>
                                                                    </div>

                                                                    <button type="submit" class="btn-reg" id="send" style="width:80px; margin-top: 20px;">Enviar</button>
                                                                   


</div>
                                                                  
                                                            
</form>

                </section>



                              
</form >
      

</body>
</html>
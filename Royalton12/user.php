

    
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
    <title>USER Resguardo de equipos</title>
    <link rel="stylesheet" href="css/user.css?v=<?php echo(rand()); ?>" />
   <script src="jspdf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>

 
    
</head>

<body background="https://static.vecteezy.com/system/resources/previews/001/176/927/non_2x/blue-and-white-abstract-background-vector.jpg" style="color: black ;">

<header>
    <div class="flex" style="position: relative;">
        <div class="logo" style="position:relative; left:10%;">
            <img class="royal" width="95%" height="auto"src="royal.png">
          </div>
        
        <div class="user" style="position: relative; left:10%;">
        <h3 style="position:relative; color: white; font-weight: 500;">Bienvenido: <br><?php echo  $_SESSION['nombre'];  ?> <?php echo $_SESSION['apellido']; ?></h3>

         <a href="cerrar.php">Cerrar Sesión</a>
        </div>
    </div>
</header>
<div class="form">

                <form action="test.php" id="form" method="post">
                    <div class=" row mb-3">
                        <label for="departamentos" class="form-label">Deparment</label>
                        <select class="form-select " id="departamentos" name="departamento" required style="width:150px">
                            <option value="">Departamento</option>
                            <option value="ayb">AyB
                            </option>
                            <option value="it">It
                            </option>
                            <option value="Talento y cultura">Talento y cultura
                            </option>
                            <option value="Finanzas">Finanzas
                            </option>
                            <option value="Costos">Costos
                            </option>
                            <option value="Guest service">Guest service
                            </option>
                            <option value="Bluen line">Blue line
                            </option>
                        </select>
                    </div>


                            <label for="nombre" class="form-label" style="width:100px">Last names</label>
                            <input type="text" class="form-control" id="nombre" name="nombres" required>
                        
                       
                            <div class="col-md-6">
                                <label for="puesto" class="form-label" style="width:100px">Position</label>
                                <input type="text" class="form-control" id="puesto" name="puesto" required>
                            </div>
                           
                                <div class="col-md-6">
                                    <label for="numerodealfitrion" class="form-label" style="width:100px">N° host</label>
                                    <input type="text" class="form-control" id="numerodealfitrion" name="n_anfitrion" required>
                                </div>
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
</body>
</html>
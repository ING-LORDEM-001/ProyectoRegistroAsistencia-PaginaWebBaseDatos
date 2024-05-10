<?php 
    include("conexion2.php");
    $con=conectar();

    session_start();
    $codigo=$_SESSION['var'];

    $sql="SELECT *  FROM tbmaterias";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);


    


    $servidor = "localhost";
    $usuario_db = "root";
    $password_db = "";
    
    $nombre_db = "scar_base";
    $conexion = mysqli_connect($servidor, $usuario_db, $password_db, $nombre_db);
   

    $columna = 'Materia';
    $columnaM = 'Materia';
    $columna2 = 'Cod_Identificacion';
    $columna3 = 'Asistencias';
    $columna4 = 'Faltas';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200&display=swap" rel="stylesheet">
    <title>Lista de MateriasAlum</title>
    <link rel="icon" type="image/png" href="/IMG/LOGO.jpg">
</head>
<body class="gradient-background">
    <section class="visible" id="matematicas">
        <div class="agregar__alumno">
          <!--<a href="#" class="agregar__alumno--btn" id="agregarAlumno" onclick="ocultarAgregarMostrarInputs()">Agregar alumno</a>-->
          <div class="oculto" id="agregarAlumnoBox">
            <input type="text" placeholder="Nombre" id="nombre">
            <input type="number" placeholder="Asistencias" id="asistencias">
            <input type="number" placeholder="Faltas" id="faltas">
            <input type="submit" value="Agregar" onclick="agregarFila(), ocultarInputsMostrarBoton()" class="agregar__alumno--btn-active">
          </div>
        </div>
        <h1 class="titulo__pagina">Tus Materias</h1>
        
        <section class="materia__box">
          <div class="materia">
                    <div class="row"> 
                        <div class="col-md-8">
                            <table class="table__alumno" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Materia</th>
                                        <th>Asistencias</th>
                                        
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php

                                         

                                            while($row=mysqli_fetch_array($query)){
                                           
                                               $consm = $row['Materia'];
                                               $string = strval($consm);
                                            $conexion = mysqli_connect($servidor, $usuario_db, $password_db, $nombre_db);
                                               $consulta= "SELECT $columna FROM tbmaterias WHERE Materia= '$string' ";
                                                $resultado = mysqli_query($conexion, $consulta);
                                                //$fila = mysqli_num_rows($resultado);
                                                $fila = mysqli_fetch_array($resultado);
                                                $valor = $fila[$columna];
                                                
                            


                                                   $conexion = mysqli_connect($servidor, $usuario_db, $password_db, $nombre_db);
                                                    $consulta2 = "SELECT $columna2 FROM $valor WHERE Cod_Identificacion = '$codigo'";
                                                        $resultado5 = mysqli_query($conexion, $consulta2);
                                                        
                                               
                                                // Almacenar el valor de la columna en una variab
                                                if(mysqli_num_rows($resultado5) == 1 ) {

                                                    $fila2 = mysqli_fetch_array($resultado5);
     
                                                        $valor2 = $fila2[$columna2];

                                                    // Iniciar sesión y redirigir al usuario a la página de inicio
                                                           $valorM = $valor;

                                                    $conexion = mysqli_connect($servidor, $usuario_db, $password_db, $nombre_db);
                                                    $consulta3 = "SELECT $columna3 FROM $valor WHERE Cod_Identificacion = '$codigo'";
                                                        $resultado6 = mysqli_query($conexion, $consulta3);
                                                        $fila3 = mysqli_fetch_array($resultado6);
    
                                                        $valor3 = $fila3[$columna3];

                                                        $conexion = mysqli_connect($servidor, $usuario_db, $password_db, $nombre_db);
                                                    $consulta4 = "SELECT $columna4 FROM $valor WHERE Cod_Identificacion = '$codigo'";
                                                        $resultado7 = mysqli_query($conexion, $consulta4);
                                                        $fila4 = mysqli_fetch_array($resultado7);
    
                                                        $valor4 = $fila4[$columna4];

                                       ?>
                                          <tr>
                                                
                                                  <th><?php  echo $valor2?></th>
                                                  <th><?php  echo $valorM?></th>
                                                  <th><?php  echo $valor3?></th>
                                                 
                                             </tr>
                                        <?php                     



                                                }

                                                
                                     
                                            }
                                        ?>



                                </tbody>
                            </table>
                        </div>
                    </div> 

            </div>
        </section>
        <script src="JS/app.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>



  </body>
</html>
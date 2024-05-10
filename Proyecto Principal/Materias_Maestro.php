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

     $columnaM = 'Materia';

     $columna = 'Alumno';
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
    <title>Lista de alumnos</title>
    <link rel="icon" type="image/png" href="/IMG/LOGO.jpg">
</head>
<body class="gradient-background">
    <section class="visible" id="matematicas">
        <div class="agregar__alumno">
          <div class="oculto" id="agregarAlumnoBox">
            <input type="text" placeholder="Nombre" id="nombre">
            <input type="number" placeholder="Asistencias" id="asistencias">
            <input type="number" placeholder="Faltas" id="faltas">
            <input type="submit" value="Agregar" onclick="agregarFila(), ocultarInputsMostrarBoton()" class="agregar__alumno--btn-active">
          </div>
        </div>
        <h1 class="titulo__pagina">Lista de alumnos</h1>
        <section class="materia__box">
          <div class="materia">
            <h1>Materias</h1>
        <section class="materia__box">
          <div class="materia">
                    <div class="row"> 
                        <div class="col-md-8">


<?php
         while($row=mysqli_fetch_array($query)){          
            
   $consm = $row['Materia'];
   $string = strval($consm);
   $conexion = mysqli_connect($servidor, $usuario_db, $password_db, $nombre_db);
   $consulta= "SELECT $columnaM FROM tbmaterias WHERE Cod_Identificacion='$codigo' AND Materia= '$string'";
    $resultado = mysqli_query($conexion, $consulta);
    //$fila = mysqli_num_rows($resultado);

    if(mysqli_num_rows($resultado) == 1 ) {
    $fila = mysqli_fetch_array($resultado);

        // Almacenar el valor de la columna en una variable
        $valor = $fila[$columnaM];
?>

<table class="table" >
                                <thead class="table-success table-striped" >

                                <th> Materia</th>
                                <th><?php echo$valor?> </th>
                                <th> </th>
                                    <tr>
                                    <th>Cod_Identificacion</th>
                                        <th>Alumno</th>
                                        <th>Asistencias</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>


 <?php       
$sql2="SELECT *  FROM $valor";
     $query2=mysqli_query($con,$sql2);
 
     $row2=mysqli_fetch_array($query2);
     
   
     while($row2=mysqli_fetch_array($query2)){



    

?>
<tr>  
  <th><?php  echo $row2['Cod_Identificacion']?></th>
      <th><?php  echo $row2['Alumno']?></th>
      <th><?php  echo $row2['Asistencias']?></th>
      
      
 </tr>
 
<?php
    }
   
}

}
?>
                                        
                                </tbody>
                            </table>



                        </div>
                    </div> 

            </div>
        </section>
        <script src="JS/app_maestro.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

           

  </body>
</html>
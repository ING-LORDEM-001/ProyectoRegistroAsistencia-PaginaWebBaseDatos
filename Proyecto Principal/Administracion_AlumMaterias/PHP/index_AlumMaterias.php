<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM tbmaterias";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);

    $servidor = "localhost";
    $usuario_db = "root";
    $password_db = "";



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA TABLA MAESTROS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/style3.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200&display=swap" rel="stylesheet">
        
    </head>
    <body class="gradient-background">

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <table>
            <tr>
                <th colspan="2"><h1 class="titulo__pagina">Lista de Materias/Alumnos</h1></th>
            </tr>
            <tr>
                <td>
                    <label>Nombre de la Materia</label>
                   

                       <input type="text" name="MateriaP" >    
                    

                    
                </td>
                <td>
                    <input type="submit" name="enviar" value="BUSCAR">
                </td>
            </tr>
        </table>
    </form>

<table>
    <thead>
    <tr>
        <tr>
       
        <th>Cod_Identificacion</th>
        <th>Alumno</th>     
        <th>Asistencias</th>  
        <th></th>
        <th></th>
        </tr>

        </tr>
    </thead>
    <tbody>
        <?php
        if(isset($_POST['enviar'])){
            //mostrar
            $Materia = $_POST['MateriaP'];

            session_start();
        $_SESSION['var'] = $Materia;

            if(empty($_POST['MateriaP'])){
                echo "<script language='JavaScript'>
                     alert('Ingrese el Dato Valido');
                     location.assign('index_AlumMaterias.php');
                     </script>
                     ";
            }
            else{
                
                if(!empty($_POST['MateriaP'])){
                    $sql="select * from tbmaterias where Materia like '%".$Materia."%'";
                    //$sql="select * from usuario where apellidos=".$apellidos." and nomre like '%".$nombre."%'";
                }
            }

            $resultado=mysqli_query($con,$sql);

            if(mysqli_num_rows($resultado) == 1) {

                $nombre_db = "scar_base";
                $conexion = mysqli_connect($servidor, $usuario_db, $password_db, $nombre_db);
                 $consulta = "SELECT * FROM $Materia ";
                $resultado2 = mysqli_query($conexion, $consulta);


            }
            while($filas=mysqli_fetch_array($resultado2)){
                ?>
                <tr>
                  
                    <th><?php  echo $filas['Cod_Identificacion']?></th>
                    <th><?php  echo $filas['Alumno']?></th>
                    <th><?php  echo $filas['Asistencias']?></th>
                    
                    
                    <th><a href="actualizar.php?  id=<?php echo $filas['id'] ?>"  class="agregar__alumno--btn-active">Editar</a></th>
                    <th><a href="delete.php?id=<?php echo $filas['id'] ?>"  class="agregar__alumno--btn-active">Eliminar</a></th>   
                
                
                
                </tr>
                <?php
        }            
        }else{
            //mostrar all
            //echo('busqueda prohibida'); 
        }



        ?>
        </tbody>
    </table>

            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="login" id="iniciarSesion">
                            <h1 class="contenedor_login--titulo">Ingrese datos de nuevo registro</h1>
                                <form action="insertar.php" method="POST">

                                    
                                    <input type="text" class="form-control mb-3" name="Cod_Identificacion" placeholder="Cod_Identificacion">
                                    <input type="text" class="form-control mb-3" name="Alumno" placeholder="Alumno">
                                    <input type="text" class="form-control mb-3" name="Materia" placeholder="Materia">
                                    <input type="submit" class="agregar__alumno--btn-active">
                                </form>
                        </div>

                        
                    </div>  
            </div>
    </body>
</html>
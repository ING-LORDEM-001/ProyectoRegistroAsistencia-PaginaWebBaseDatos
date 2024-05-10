<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM tbalumnos";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PAGINA  TABLA ALUMNOS</title>
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
                <th colspan="2"><h1 class="titulo__pagina">Listas de Alumnos</h1></th>
            </tr>
            <tr>
                <td>
                    <label>Codigo de Identificacion</label>
                    <input type="text" name="Cod_Identificacion">
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
        <th>Nombres</th>       
        <th></th>
        <th></th>
        </tr>

        </tr>
    </thead>
    <tbody>
        <?php
        if(isset($_POST['enviar'])){
            //mostrar
            $Cod_Identificacion = $_POST['Cod_Identificacion'];

            if(empty($_POST['Cod_Identificacion'])){
                echo "<script language='JavaScript'>
                     alert('Ingrese el nobre y apellido');
                     location.assign('index_tbalumnos.php');
                     </script>
                     ";
            }
            else{
                
                if(!empty($_POST['Cod_Identificacion'])){
                    $sql="select * from tbalumnos where Cod_Identificacion like '%".$Cod_Identificacion."%'";
                    //$sql="select * from usuario where apellidos=".$apellidos." and nomre like '%".$nombre."%'";
                }
            }

            $resultado=mysqli_query($con,$sql);
            while($filas=mysqli_fetch_assoc($resultado)){
                ?>
                <tr>
                    
                    <th><?php  echo $filas['Cod_Identificacion']?></th>
                    <th><?php  echo $filas['Nombre']?></th>
                    <th><a href="actualizar.php?id=<?php echo $filas['id'] ?>"  class="agregar__alumno--btn-active">Editar</a></th>
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
                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                                    
                                    <input type="submit" class="agregar__alumno--btn-active">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="class="materia"" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                    <tr>
                                   
                                    <th>Cod_Identificacion</th>
                                    <th>Nombres</th>        
                                    <th></th>
                                    <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                
                                                <th><?php  echo $row['Cod_Identificacion']?></th>
                                                <th><?php  echo $row['Nombre']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="agregar__alumno--btn-active">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="agregar__alumno--btn-active">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
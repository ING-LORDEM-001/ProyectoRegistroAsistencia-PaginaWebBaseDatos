<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];
session_start();
$MateriaP=$_SESSION['var'];

$sql="SELECT * FROM $MateriaP WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                        
                                <input type="text" class="form-control mb-3" name="Cod_Identificacion" placeholder="Cod_Identificacion" value="<?php echo $row['Cod_Identificacion']  ?>">
                                <input type="text" class="form-control mb-3" name="Alumno" placeholder="Alumno" value="<?php echo $row['Alumno']  ?>">
                                 
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
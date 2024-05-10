<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM tbmaterias WHERE id='$id'";
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
                        
                                <input type="text" class="form-control mb-3" name="Cod_Materia" placeholder="Cod_Materia" value="<?php echo $row['Cod_Materia']  ?>">
                                <input type="text" class="form-control mb-3" name="Materia" placeholder="Materia" value="<?php echo $row['Materia']  ?>">
                                <input type="text" class="form-control mb-3" name="MaestroImpart" placeholder="MaestroImpart" value="<?php echo $row['MaestroImpart']  ?>">
                                <input type="text" class="form-control mb-3" name="Cod_Identificacion" placeholder="Cod_Identificacion" value="<?php echo $row['Cod_Identificacion']  ?>">
                                <input type="text" class="form-control mb-3" name="MateriaCam" placeholder="Materia A Cambiar">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
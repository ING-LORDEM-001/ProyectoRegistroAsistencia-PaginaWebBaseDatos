<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Cod_Identificacion=$_POST['Cod_Identificacion'];
$Nombre=$_POST['Nombre'];

$sql="UPDATE tbalumnos SET  id='$id',Cod_Identificacion='$Cod_Identificacion',Nombre='$Nombre' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index_tbalumnos.php");
    }
?>
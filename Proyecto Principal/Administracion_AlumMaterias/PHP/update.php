<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Cod_Identificacion=$_POST['Cod_Identificacion'];
$Alumno=$_POST['Alumno'];
session_start();
$MateriaP=$_SESSION['var'];

$sql="UPDATE $MateriaP SET  id='$id',Cod_Identificacion='$Cod_Identificacion',Alumno='$Alumno' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index_AlumMaterias.php");
    }
?>
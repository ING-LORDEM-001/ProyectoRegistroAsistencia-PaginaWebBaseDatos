<?php

include("conexion.php");
$con=conectar();

$id=$_GET['Materia'];

$sql="DELETE FROM tbmaterias  WHERE id='$id'";
$query=mysqli_query($con,$sql);


    if($query){
        Header("Location: index_tbmaterias.php");
    }
?>
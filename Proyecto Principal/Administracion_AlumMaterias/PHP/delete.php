<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];
session_start();
$MateriaP=$_SESSION['var'];

$sql="DELETE FROM $MateriaP WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index_AlumMaterias.php");
    }
?>
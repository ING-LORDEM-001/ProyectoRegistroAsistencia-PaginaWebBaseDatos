<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];
$Nombre=$_GET['Nombre'];


$sql="DELETE FROM usuariologin WHERE Cod_Identificacion='$id'";
$query=mysqli_query($con,$sql);


$sql="DELETE FROM tbmaestros  WHERE Cod_Identificacion='$id' ";
$query=mysqli_query($con,$sql);


$sql="DELETE FROM tbmaterias WHERE Cod_Identificacion='$id'";
$query=mysqli_query($con,$sql);




     echo $id;

    /*if($query){
        Header("Location: index_usuarios.php");
    }*/
?>
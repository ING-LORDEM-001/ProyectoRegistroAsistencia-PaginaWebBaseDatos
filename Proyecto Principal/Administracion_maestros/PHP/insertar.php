<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Cod_Identificacion=$_POST['Cod_Identificacion'];
$Nombre=$_POST['Nombre'];


$sql="INSERT INTO tbmaestros VALUES('$id','$Cod_Identificacion','$Nombre')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index_tbmaestros.php");
    
}else {
}
?>
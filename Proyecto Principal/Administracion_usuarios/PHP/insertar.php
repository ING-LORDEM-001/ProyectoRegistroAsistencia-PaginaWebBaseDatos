<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Usuario=$_POST['Usuario'];
$password=$_POST['Contraseña'];
$cuenta=$_POST['TipodeCuenta'];
$Cod_Identificacion=$_POST['Cod_Identificacion'];
$Nombre=$_POST['Nombre'];

$sql="INSERT INTO usuariologin VALUES('$id','$Usuario','$password', '$cuenta','$Cod_Identificacion','$Nombre')";
$query= mysqli_query($con,$sql);


if($query){
    Header("Location: index_usuarios.php");
    
}else {
}
?>
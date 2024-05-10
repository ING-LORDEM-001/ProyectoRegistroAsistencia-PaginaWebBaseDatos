<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Cod_Identificacion=$_POST['Cod_Identificacion'];
$Alumno=$_POST['Alumno'];
$Materia=$_POST['Materia'];
$Asistencias= 0;
$Faltas=0;

$sql="INSERT INTO $Materia VALUES('$id','$Cod_Identificacion','$Alumno','$Asistencias', '$Faltas')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index_AlumMaterias.php");
    
}else {
}
?>
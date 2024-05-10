<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Cod_Materia=$_POST['Cod_Materia'];
$Materia=$_POST['Materia'];
$MaestroImpart=$_POST['MaestroImpart'];
$Cod_Identificacion=$_POST['Cod_Identificacion'];
$MateriaCam=$_POST['MateriaCam'];

$sql="UPDATE tbmaterias SET  id='$id',Cod_Materia='$Cod_Materia',Materia='$Materia',MaestroImpart='$MaestroImpart',Cod_Identificacion='$Cod_Identificacion' WHERE id='$id'";
$query=mysqli_query($con,$sql);

$sql = "ALTER TABLE $MateriaCam RENAME TO $Materia";



if ($con->query($sql) === TRUE) {
    //echo "El nombre de la tabla ha sido cambiado correctamente";
  } else {
    //echo "Error al cambiar el nombre de la tabla: " . $conn->error;
  }

    if($query){
        Header("Location: index_tbmaterias.php");
    }
?>
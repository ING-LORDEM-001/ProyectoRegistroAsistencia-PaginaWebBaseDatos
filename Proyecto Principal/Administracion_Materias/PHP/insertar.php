<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Cod_Materia=$_POST['Cod_Materia'];
$Materia=$_POST['Materia'];
$MaestroImpart=$_POST['MaestroImpart'];
$Cod_Identificacion=$_POST['Cod_Identificacion'];


$servidor = "localhost";
    $usuario_db = "root";
    $password_db = "";
    
    $nombre_db = "scar_base";

$sql="INSERT INTO tbmaterias VALUES('$id','$Cod_Materia','$Materia','$MaestroImpart','$Cod_Identificacion')";
$query= mysqli_query($con,$sql);


$conexion = mysqli_connect($servidor, $usuario_db, $password_db, $nombre_db);
$sqlM = "CREATE TABLE $Materia (
    id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Cod_Identificacion VARCHAR(10) NOT NULL,
    Alumno VARCHAR(50) NOT NULL,
    Asistencias INT(2) NOT NULL,
    Faltas INT(2) NOT NULL
)";

if (mysqli_query($conexion, $sqlM)) {
    echo "Tabla creada correctamente";
} else {
    echo "Error al crear la tabla: " . mysqli_error($conexion);
}
mysqli_close($conexion);





if($query){
    Header("Location: index_tbmaterias.php");
    
}else {
}



?>
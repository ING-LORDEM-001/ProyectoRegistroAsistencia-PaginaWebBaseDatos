<?php

include("conexion.php");
$con=conectar();
include("conexionM.php");
$cone=conectar2();

$sqli="SELECT *  FROM tbmaterias";
    $quer=mysqli_query($cone,$sqli);

    $row=mysqli_fetch_array($quer);



$id=$_POST['id'];
$Usuario=$_POST['Usuario'];
$password=$_POST['Contraseña'];
$cuenta=$_POST['TipodeCuenta'];
$Cod_Identificacion=$_POST['Cod_Identificacion'];
$Nombre=$_POST['Nombre'];
$Codigoacambiar=$_POST['Codigoacambiar'];

$columna = 'Materia';
$columna2 = 'Cod_Identificacion';

$servidor = "localhost";
$usuario_db = "root";
$password_db = "";

$nombre_db = "scar_base";
$conexion = mysqli_connect($servidor, $usuario_db, $password_db, $nombre_db);


$sql="UPDATE usuariologin SET  Cod_Identificacion='$Codigoacambiar', usuario='$Usuario', pasword='$password', Tcuenta='$cuenta', Cod_Identificacion='$Cod_Identificacion', Nombre='$Nombre' WHERE   Cod_Identificacion='$Codigoacambiar'  ";
$query=mysqli_query($con,$sql);

$sql="UPDATE tbmaestros SET  Cod_Identificacion='$Codigoacambiar',Cod_Identificacion='$Cod_Identificacion',Nombre='$Nombre' WHERE Cod_Identificacion='$Codigoacambiar' ";
$query=mysqli_query($con,$sql);


$sql="UPDATE tbmaterias SET  Cod_Identificacion='$Codigoacambiar',Cod_Identificacion='$Cod_Identificacion', MaestroImpart='$Nombre' WHERE Cod_Identificacion='$Codigoacambiar' ";
$query=mysqli_query($con,$sql);


if($cuenta== "Alumno") {

    $sql="UPDATE tbalumnos SET  Cod_Identificacion='$Codigoacambiar',Cod_Identificacion='$Cod_Identificacion',Nombre='$Nombre' WHERE Cod_Identificacion='$Codigoacambiar' ";
$query=mysqli_query($con,$sql);




    while($row=mysqli_fetch_array($quer)){
                                           
        $consm = $row['Materia'];
        $string = strval($consm);
     $conexion = mysqli_connect($servidor, $usuario_db, $password_db, $nombre_db);
        $consulta= "SELECT $columna FROM tbmaterias WHERE Materia= '$string' ";
         $resultado = mysqli_query($conexion, $consulta);
         $fila = mysqli_num_rows($resultado);
         
        
        
                 if(mysqli_num_rows($resultado) == 1 ) {
                     $fila = mysqli_fetch_array($resultado);
                     $valor = $fila[$columna];

                    $sql="UPDATE $valor SET   Cod_Identificacion='$Codigoacambiar',Cod_Identificacion='$Cod_Identificacion',Alumno='$Nombre' WHERE Cod_Identificacion='$Codigoacambiar' ";
                    $query=mysqli_query($con,$sql);

                 
                 }
    }

} 





   if($query){
        Header("Location: index_usuarios.php");
    }
?>
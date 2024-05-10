<?php
// Verificar si se envió el formulario
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos ingresados por el usuario
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $tcuentaA="Alumno";

    $tcuentaM="Maestro";
    
    $tcuentaAd="Administracion";
 

    $id = 'Id'; // El ID de la fila que deseas obtener
    $columna = 'Cod_Identificacion'; // El nombre de la columna que deseas obtener


    // Conectar a la base de datos y realizar la consulta de verificación
    $servidor = "localhost";
    $usuario_db = "root";
    $password_db = "";
    
    $nombre_db = "scar_base";
    $conexion = mysqli_connect($servidor, $usuario_db, $password_db, $nombre_db);
    $consulta = "SELECT * FROM usuariologin WHERE usuario='$usuario' AND pasword='$password' AND Tcuenta='$tcuentaA' ";
    $resultado = mysqli_query($conexion, $consulta);

    


    $consulta = "SELECT * FROM usuariologin WHERE usuario='$usuario' AND pasword='$password' AND Tcuenta='$tcuentaM' ";
    $resultado2 = mysqli_query($conexion, $consulta);

    $consulta = "SELECT * FROM usuariologin WHERE usuario='$usuario' AND pasword='$password' AND Tcuenta='$tcuentaAd' ";
    $resultado3 = mysqli_query($conexion, $consulta);

    // Verificar si se encontró el usuario en la base de datos
    if(mysqli_num_rows($resultado) == 1 && $tcuentaA == "Alumno") {
        // Iniciar sesión y redirigir al usuario a la página de inicio

        

        $conexion = mysqli_connect($servidor, $usuario_db, $password_db, $nombre_db);
    $consulta = "SELECT $columna FROM usuariologin WHERE  usuario='$usuario' ";
        $resultado5 = mysqli_query($conexion, $consulta);
        $fila = mysqli_fetch_array($resultado5);
        
        // Almacenar el valor de la columna en una variable
        $valor = $fila[$columna];



        session_start();
        $_SESSION['var'] = $valor;
        
        ///echo $valor;
        header("Location: index_alumno.html");
    } 

    else if(mysqli_num_rows($resultado2) == 1 && $tcuentaM == "Maestro"){

        //echo "cuenta de Maestro";

        $conexion = mysqli_connect($servidor, $usuario_db, $password_db, $nombre_db);
    $consulta = "SELECT $columna FROM usuariologin WHERE  usuario='$usuario' ";
        $resultado5 = mysqli_query($conexion, $consulta);
        $fila = mysqli_fetch_array($resultado5);
        
        // Almacenar el valor de la columna en una variable
        $valor = $fila[$columna];

    
            session_start();
            $_SESSION['var'] = $valor;

  //echo $valor;
       header("Location: Index_Maestro.html");

    }
    else if(mysqli_num_rows($resultado3) == 1 && $tcuentaAd == "Administracion"){

        //echo "cuenta de Administracion";


        $conexion = mysqli_connect($servidor, $usuario_db, $password_db, $nombre_db);
        $consulta = "SELECT $columna FROM usuariologin WHERE  usuario='$usuario' ";
            $resultado5 = mysqli_query($conexion, $consulta);
            $fila = mysqli_fetch_array($resultado5);
            
            // Almacenar el valor de la columna en una variable
            $valor = $fila[$columna];

    
            session_start();
            $_SESSION['var'] = $valor;

  //echo $valor;
       header("Location: Index_admin.html");



    }

    else {
        // Mostrar un mensaje de error si el usuario no existe en la base de datos
        //echo "Usuario o contraseña incorrectos.";
        echo "<script language='JavaScript'>
        alert('Ingrese Un Usuario Valido');
        location.assign('login.php');
        </script>
        ";

        header("Location: login.html");
    }
}
?>







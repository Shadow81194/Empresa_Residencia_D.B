<?php  
session_start();
include 'conexion_sh.php';

$correo = $_POST['correo_log'];
$contrasena = $_POST['contrasena_log'];

$valida_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE 
correo='$correo' AND contrasena='$contrasena' ");

if(mysqli_num_rows($valida_login) > 0){
    $_SESSION['usuario']=$correo;
    header("location: ../bienvenido.php");
    exit;
}else{
    echo '
    <script>
    alert("Usuario no existe, Intenta de nuevo");
    window.location= "../index.php";
    </script>
    ';
    exit;
}
mysqli_close($conexion);
?>
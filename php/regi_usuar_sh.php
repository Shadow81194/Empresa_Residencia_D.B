<?php  
include 'conexion_sh.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios(nombre, correo, usuario, contrasena)
         VALUE('$nombre', '$correo', '$usuario', '$contrasena')";



$verificacion_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");
if(mysqli_num_rows($verificacion_correo) > 0){
    echo '
    <script>
    alert("Este correo ya esta registrado, Intenta con otro correo");
    window.location= "../index.php";
    </script>
    ';
    exit();
}

$verificacion_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");
if(mysqli_num_rows($verificacion_usuario) > 0){
    echo '
    <script>
    alert("Este correo ya esta registrado, Intenta con otro correo");
    window.location= "../index.php";
    </script>
    ';
    exit();
}


$jecutar = mysqli_query($conexion, $query);

if($jecutar){
    echo '
    <script>
    alert("Usuario almacenado exitosamente");
    window.location= "../index.php";
    </script>
    ';
}
else{
    echo '
    <script>
    alert("Intentalo de nuevo, Usuario No almacenado exitosamente");
    window.location= "../index.php";
    </script>
    ';
}
mysqli_close($conexion);
?>
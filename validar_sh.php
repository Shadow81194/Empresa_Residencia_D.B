<?php
session_start();

include 'db_sh.php';

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

$_SESSION['usuario']=$usuario;
$conexion=mysqli_connect("localhost","root","root","rol");
$consulta="SELECT*FROM usuarios where usuario=
'$usuario' and contraseña='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);



if($filas['id_cargo']==1){ //administrador
    header("location:adminitador_sh.php");

}else
if($filas['id_cargo']==2){  //cliente
header("location:estudiante_sh.php");
}
else{
    ?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}

mysqli_close($conexion);
?>
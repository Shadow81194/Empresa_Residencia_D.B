<?php
$id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $cedula = $_POST['cedula'];
  $correo = $_POST['correo'];
  $usuario = $_POST['usuario'];
  $motivo = $_POST['motivo'];
  $fecha_ingeso = $_POST['fecha_ing'];
  $fecha_salida = $_POST['fecha_sal'];
  $cantidad = $_POST['cantida_V'];
  $mes = $_POST['mes'];

  $conexion = mysqli_connect("localhost", "root", "root", "login_regi_db");

$query = "UPDATE visitante1 SET nombre = '$nombre', cedula= '$cedula', correo= 
'$correo', usuario = '$usuario', motivo = '$motivo', fecha_ing = '$fecha_ingeso', 
fecha_sal = '$fecha_salida', cantida_V = '$cantidad', mes ='$mes' WHERE id LIKE $id";
 
 $rta = mysqli_query($conexion, $query);
 if(!$rta){
    echo "No se Actualizo!";
 }
 else{
    header("location: datos_sh.php");
 }
 
?>
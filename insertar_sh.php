<?php
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

$query = "INSERT INTO visitante1(nombre, cedula, correo, usuario, motivo, fecha_ing, fecha_sal, cantida_V, mes)
         VALUE('$nombre', '$cedula', '$correo', '$usuario', '$motivo', '$fecha_ingeso', '$fecha_salida', '$cantidad', '$mes')";
 
 $rta = mysqli_query($conexion, $query);
 if(!$rta){
    echo "No se Inserto!";
 }
 else{
    header("location: datos_sh.php");
 }
 
?>
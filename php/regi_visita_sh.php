<?php
  include 'conexionesRe_sh.php';

  $nombre = $_POST['nombre'];
  $cedula = $_POST['cedula'];
  $correo = $_POST['correo'];
  $usuario = $_POST['usuario'];
  $motivo = $_POST['motivo'];
  $fecha_ingeso = $_POST['fecha_ing'];
  $fecha_salida = $_POST['fecha_sal'];
  $cantidad = $_POST['cantida_V'];
  $mes = $_POST['mes'];

  $query = "INSERT INTO visitante1(nombre, cedula, correo, usuario, motivo, fecha_ing, fecha_sal, cantida_V, mes)
         VALUE('$nombre', '$cedula', '$correo', '$usuario', '$motivo', '$fecha_ingeso', '$fecha_salida', '$cantidad', '$mes')";


$verificacion_correo = mysqli_query($conexion, "SELECT * FROM visitante1 WHERE correo='$correo' ");
if(mysqli_num_rows($verificacion_correo) > 0){
  echo '
    <script>
    alert("Este correo ya esta registrado, Intenta con otro correo");
    window.location= "../estudiante_sh.php";
    </script>
    ';
    exit();
}

$verificacion_cedula= mysqli_query($conexion, "SELECT * FROM visitante WHERE cedula='$cedula' ");
if(mysqli_num_rows($verificacion_cedula) > 0){
    echo '
    <script>
    alert("Esta cedula ya esta registrado, Intenta con otro cedula");
    window.location= "../estudiante_sh.php";
    </script>
    ';
    exit();
}

$verificacion_usuario= mysqli_query($conexion, "SELECT * FROM visitante WHERE usuario='$usuario' ");
if(mysqli_num_rows($verificacion_usuario) > 0){
    echo '
    <script>
    alert("Este usuario ya esta registrado, Intenta con otro usuario");
    window.location= "../estudiante_sh.php";
    </script>
    ';
    exit();
}



$jecutar = mysqli_query($conexion, $query);
if($jecutar){
    echo '
    <script>
    alert("Usuario almacenado exitosamente");
    window.location= "../estudiante_sh.php";
    </script>
    ';
}
else{
    echo '
    <script>
    alert("Su Registro No fue Guardado");
    window.location= "../estudiante_sh.php";
    </script>
    ';
}
mysqli_close($conexion);
?>
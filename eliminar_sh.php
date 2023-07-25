<?php
$id = $_GET['id'];


  $conexion = mysqli_connect("localhost", "root", "root", "login_regi_db");

$query = "DELETE FROM visitante1 WHERE id LIKE $id";
 
 $rta = mysqli_query($conexion, $query);
 if(!$rta){
    echo "No se Elimino!";
 }
 else{
    header("location: php/regis_dato_sh.php");
 }
 
?>
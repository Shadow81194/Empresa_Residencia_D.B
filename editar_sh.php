<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
  $cedula = $_GET['cedula'];
  $correo = $_GET['correo'];
  $usuario = $_GET['usuario'];
  $motivo = $_GET['motivo'];
  $fecha_ingeso = $_GET['fecha_ing'];
  $fecha_salida = $_GET['fecha_sal'];
  $cantidad = $_GET['cantida_V'];
  $mes = $_GET['mes'];
  ?>
    <div>
        <form action="sh_editar_sh.php" method="POST">
            <table border = "1">
                <tr>
                    <td>Ingreser Datos del Visitante:</td>
                    <td><input type="text" name="id" id="" style="visibility:hidden" value="<?=$id?>"></td>
                </tr>

                <tr>
                    <td>NOMBRES</td>
                    <td><input type="text" name="nombre" id="" value="<?=$nombre?>"></td>
                </tr>
                <tr>
                    <td>CEDULA</td>
                    <td><input type="text" name="cedula" id="" value="<?=$cedula?>"></td>
                </tr>
                <tr>
                    <td>CORREO</td>
                    <td><input type="text" name="correo" id="" value="<?=$correo?>"></td>
                </tr>
                <tr>
                    <td>USUARIO</td>
                    <td><input type="text" name="usuario" id="" value="<?=$usuario?>"></td>
                </tr>
                <tr>
                    <td>MOTIVO DE VISITA</td>
                    <td><input type="text" name="motivo" id="" value="<?=$motivo?>"></td>
                </tr>
                <tr>
                    <td>FECHA DE INGRESO</td>
                    <td><input type="text" name="fecha_ing" id="" value="<?=$fecha_ingeso?>"></td>
                </tr>
                <tr>
                    <td>FECHA DE SALIDA</td>
                    <td><input type="text" name="fecha_sal" id="" value="<?=$fecha_salida?>"></td>
                </tr>
                <tr>
                    <td>CANTIDAD</td>
                    <td><input type="number" name="cantida_V" id="" value="<?=$cantidad?>"></td>
                </tr>
                <tr>
                    <td>MES</td>
                    <td><input type="text" name="mes" id="" value="<?=$mes?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Actualizar"></td>
                    <td><a href="datos_sh.php">Cancelar</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
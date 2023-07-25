<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Meriendo';
    background-image: url(../fon.jpg);
    background-attachment: fixed;
    background-size: cover;
}

.redes a img{
    width: 40px;
    display: inline-block;
    margin: 15px;
}
.info{
   background-color: rgba(10, 10, 10, 0.363);
   color: rgb(235, 250, 252);
   padding: 20px;
   text-align: center;
}
header{
    max-width: 1500px;
    margin: auto;
    padding: 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

nav ul{
    display: flex;
    list-style: none;
}

nav ul li{
    margin: 0 20px;
}

nav ul li a{
    text-decoration: none;
    color: rgb(7, 6, 6);
}

nav ul li a:hover{
    text-decoration: underline;
}

section {
    padding-top: 100px;
    text-align: center;
}

section h1{
    font-size: 80px;
    color: rgb(0, 0, 0);
    
}
section a{
    text-decoration: none;
    padding: 10px 15px;
    font-size: 40px;
}
 table{
    text-align: center;
}

</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de los Registros</title>
    <link rel="stylesheet" href="assets/css/esti_Reside.css">
</head>
<body>
<header>
        <nav>
            <ul>
                <form action="residencia.php" method="POST">
                <li><a><button>Inicio</button></a></li>
                </form>
                <form action="index.php" method="POST">
                <li><a><button>Login</button></a></li>
                </form>
                <form action="infomacion.php" method="POST">
                <li><a><button>Infomacion</button></a></li>
                </form>
            </ul>
        </nav>

        <div class="redes"> 
            <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Flogin%3Flang%3Des"><img src="../twitter.png" alt=""></a>
            <a href="https://www.instagram.com/"><img src="../instagram.png" alt=""></a>
            <a href="https://es-la.facebook.com/login/device-based/regular/login/"><img src="../facebook.png" alt=""></a>
        </div>
    </header>

    <section>
        <h1>Residencia</h1>

    <div>
        <form action="buscar_sh.php" method="POST">
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar">
            <a href="nuevo_sh.php">Nuevo</a>
        </form>
    </div>

    <div>
        <table border = "1">
            <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Cedula</td>
            <td>Correo</td>
            <td>Usuario</td>
            <td>Motivo de visita</td>
            <td>Fecha de Ingreso</td>
            <td>Fecha de Salida</td>
            <td>Cantidad de visitante</td>
            <td>Mes</td>
            <td>Opciones</td>
            </tr>

            <?php
            $buscar = $_POST['buscar'];
             $conexion = mysqli_connect("localhost", "root", "root", "login_regi_db");
            $sql = "SELECT id, nombre, cedula, 
            correo, usuario, motivo, fecha_ing, 
            fecha_sal, cantida_V, mes FROM visitante1 WHERE mes LIKE '$buscar' '%' order by id desc";
            $rta = mysqli_query($conexion, $sql);
            while($mostrar = mysqli_fetch_row($rta)){
                ?>
                <tr>
                    <td><?php echo $mostrar['0'] ?></td>
                    <td><?php echo $mostrar['1'] ?></td>
                    <td><?php echo $mostrar['2'] ?></td>
                    <td><?php echo $mostrar['3'] ?></td>
                    <td><?php echo $mostrar['4'] ?></td>
                    <td><?php echo $mostrar['5'] ?></td>
                    <td><?php echo $mostrar['6'] ?></td>
                    <td><?php echo $mostrar['7'] ?></td>
                    <td><?php echo $mostrar['8'] ?></td>
                    <td><?php echo $mostrar['9'] ?></td>
                    <td>
                        <a href="editar_sh.php?
                            id=<?php echo $mostrar['0'] ?> &
                            nombre= <?php echo $mostrar['1'] ?> &
                            cedula=<?php echo $mostrar['2'] ?> &
                            correo=<?php echo $mostrar['3'] ?> &
                            usuario=<?php echo $mostrar['4'] ?> &
                            motivo=<?php echo $mostrar['5'] ?> &
                            fecha_ing=<?php echo $mostrar['6'] ?> &
                            fecha_sal=<?php echo $mostrar['7'] ?> &
                            cantida_V=<?php echo $mostrar['8'] ?> &
                            mes=<?php echo $mostrar['9'] ?> 
                            ">Editar</a>
                        <a href="eliminar_sh.php?  id=<?php echo $mostrar['0'] ?>">Eliminar</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
    </section>
</body>
</html>
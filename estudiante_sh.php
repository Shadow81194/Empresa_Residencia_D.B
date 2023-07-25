<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Meriendo';
    background-image: url(assets/images/bg1.jpg);
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
   font-size: 40px;
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
    font-size: 30px;
    color: rgb(0, 0, 0);
    font-weight: bold;
}


</style>
<?php  
session_start();

if(!isset($_SESSION['usuario'])){
    echo '
    <script>
    alert("Por favor debes iniciar sesion");
    window.location= "index.html";
    </script>
    ';
    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido Usuario</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilosRegi.css">
</head>

<body>
<main>
<div class="info">
        <p> Por favor registre a su visitante para estar pendiente </p>
    </div>
    
    <header>
            <div class="redes"> 
            <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Flogin%3Flang%3Des"><img src="twitter.png" alt=""></a>
            <a href="https://www.instagram.com/"><img src="instagram.png" alt=""></a>
            <a href="https://es-la.facebook.com/login/device-based/regular/login/"><img src="facebook.png" alt=""></a>
        </div>
    </header>
    <section>
    <h1> ESTUDIANTE </h1>  
    </section>

    <div class="contenedor__todo">
          <div class="contenedor__login-register">
            <!--Register-->
            
            <form action="php/regi_visita_sh.php" method="POST" class="formulario__register">
                <h2>Registro de Visitante</h2><br>
                <br>
                <h2>Ingrese su nombre completo:</h2>
                <input type="text" placeholder="Nombre completo" name="nombre"><br>
                <br>
                <h2>Ingrese su cedula:</h2>
                <input type="number" placeholder="Cedula " name="cedula"><br>
                <br>
                <h2>Ingrese su correo eletronico</h2>
                <input type="text" placeholder="Correo Electronico" name="correo"><br>
                <br>
                <h2>Ingrese su usuario:</h2>
                <input type="text" placeholder="Usuario" name="usuario"><br>
                <br>
                <h2>Ingrese el Motivo de la visita:</h2>
                <select class="form-select" aria-label="Default select example" name="motivo">
                    <option selected>Eliga el motivo</option>
                    <option value="Vista">Vista</option>
                    <option value="Graduacion">Graduacion</option>
                    <option value="Trámites">trámites</option>
                    <option value="Titulación">Titulación</option>
                  </select><br>
                <br>
                <h2>Ingrese la fecha de ingreso:</h2>
                <input type="date" placeholder="Fecha de ingreso" name="fecha_ing"><br>
                <br>
                <h2>Ingrese la fecha de salida:</h2>
                <input type="date" placeholder="Fecha de salida" name="fecha_sal"><br>
                <br>
                <h2>Ingrese la cantida de visitante:</h2>
                <input type="number" placeholder="Cantidad de visitante" name="cantida_V"><br>
                <br>
                <h2>Ingrese el Mes de la visita:</h2>
                <select class="form-select" aria-label="Default select example" name="mes">
                    <option selected>Eliga el motivo</option>
                    <option value="Enero">Enero</option>
                    <option value="Febrero">Febrero</option>
                    <option value="Marzo">Marzo</option>
                    <option value="Abril">Abril</option>
                    <option value="Mayo">Mayo</option>
                    <option value="Junio">Junio</option>
                    <option value="Julio">Julio</option>
                    <option value="Agosto">Agosto</option>
                    <option value="Septiembre">Septiembre</option>
                    <option value="Octubre">Octubre</option>
                    <option value="Noviembre">Noviembre</option>
                    <option value="Diciembre">Diciembre</option>
                  </select><br>
                <br>
                <button>Regístrarse</button>
            </form>
            
            </div>
        </div>

       
        <section>
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
            
            </tr>

            <?php
            
            $conexion = mysqli_connect("localhost", "root", "root", "login_regi_db");
            $sql = "SELECT id, nombre, cedula, 
            correo, usuario, motivo, fecha_ing, 
            fecha_sal, cantida_V, mes FROM visitante1 order by id desc";
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
                    
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
        </section>
    
</main>
    <a href="php/cerrar_sesion.php"> Cerrar Session</a>
</body>

</html>
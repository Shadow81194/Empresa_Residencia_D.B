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

section{
    padding-top: 100px;
    text-align: center;
}

section h1{
    font-size: 80px;
    color: rgb(86, 181, 219);
    
}

section h5{
    text-decoration: none;
    color: rgb(245, 245, 220);
    border: 3px solid rgb(0, 0, 0); 
    padding: 10px 15px;
    font-size: 30px;
}


</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información</title>
    <link rel="stylesheet" href="assets/css/esti_Reside.css">
</head>
<body>

    <div class="info">
        <p> Información Residencia Universitaria Don Bosco  </p>
    </div>

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
                <li><a><button>Información</button></a></li>
                </form>
            </ul>
        </nav>

        <div class="redes"> 
            <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Flogin%3Flang%3Des"><img src="twitter.png" alt=""></a>
            <a href="https://www.instagram.com/"><img src="instagram.png" alt=""></a>
            <a href="https://es-la.facebook.com/login/device-based/regular/login/"><img src="facebook.png" alt=""></a>
        </div>
    </header>

    <section>
        <h1>INFORMACION</h1>
        <h5 > La empresa ofrece servicios de hospedaje a estudiantes de la Universidad 
                Politécnica Salesiana provenientes de comunidades salesianas vulnerables, de la 
                zona andina, amazónica y costa del Ecuador. Son jóvenes shuar, achuar, indígenas y afroecuatorianos. 
                Además de hospedaje ofrece servicios de alimentación: Desayuno, almuerzo y merienda. 
                Durante la estadía los estudiantes también tienen a disposición espacios 
                recreativos como canchas y salas de juegos, espacio de lavandería, zonas wifi, 
                comedor, salas de estudio, salas de cómputo y audiovisuales.
                A la vez se realizan actividades recreativas donde se fomenta la integración y 
                compartir de los estudiantes, celebrando cumpleaños y noches interculturales con 
                el fin de fortalecer la identidad cultural de los residentes.</h5>
                <img src="aa01.jpg" alt="">
    </section>

</body>

</html>
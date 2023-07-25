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

section a{
    text-decoration: none;
    color: rgb(250, 243, 243);
    border: 3px solid rgb(0, 0, 0); 
    padding: 10px 15px;
    font-size: 18px;
}


</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residencia Universitaria Don Bosco</title>
    <link rel="stylesheet" href="assets/css/esti_Reside.css">
</head>
<body>

    <div class="info">
        <p> Residencia Matilde Álvarez y Avenida Mariscal Sucre </p>
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
                <li><a><button>Infomacion</button></a></li>
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
        <h1>Residencia</h1>
        
        <a href="https://www.ups.edu.ec/noticias?articleId=642138&byid">Conocer mas </a>
    </section>

</body>

</html>
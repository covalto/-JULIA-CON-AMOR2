<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="donaciones.css">
	<link rel="stylesheet" href="../css/normalize.css">
	<title>DONACIONES</title>
</head>
<body>
	<main class="contenedor">
		 <div class="contedenor__caja-vinculos">
            <a href="" class="contenedor__vinculo1">¿PORQUE JULIA CON AMOR?</a>

            <div class="contenedor__caja-interna-vinculo ">
                <a href="" class="contenedor__vinculo2">¿CUENTANOS?</a>
            </div>

        </div>



        <header class="contenedor__header">

            <div class="container__logo">
                <img src="logo.jpg" alt="" class="logo">
            </div>
            <nav class="contenedor__nav">
                <a href="../index.html" class="contenedor__nav-link" target="_blanck">INICIO</a>
                <a href="" class="contenedor__nav-link">ENTERATE
                    <ul class="contenedor__nav-lista">
                        <li><a href="">MISION</a></li>
                        <li><a href="">DATOS ECONOMICOS</a></li>
                        <li><a href="">TRANSPARENCIA</a></li>
                        <li><a href="">HISTORIA</a></li>
                    </ul>
                </a>
                <a href="" class="contenedor__nav-link">PROYECTOS</a>
                <a href="" class="contenedor__nav-link">CONOCENOS</a>
            </nav>
        </header>

        <!-- contenedor de donaciones-->


        <div class="containedor__donacion">

			<h1>DONACIONES</h1>
			<hr>
			<h3 class="title__donar">COOPERACION PARA EL DESARROLLO</h3>

			<form method="post" class="contenedor__formulario">

				<div class="contenedor__input">
					<label for="label">Nombre :</label>
					<input type="text" name="name" required>
				</div>

				<div class="contenedor__input ">
					<label for="apellido">Apellido:</label>
					<input type="text" name="apellido" required>
				</div>

				<div class="contenedor__input">
					<label for="Correo">Correo :</label>
					<input type="email" name="email" class="correo" required>
				</div>

				<div class="contenedor__input">
					<label for="telefono">Telefono:</label>
					<input type="tel" name="telefono"  size="20" minlength="9" maxlength="10"required>
				</div>

				<div class="contenedor__btn">
					<button type="submit" value="Submit" name="enviar">ENVIAR</button>

				 <input type="reset" id="borrar">
				</div>
		    </form>


		    <form method="post" class="contenedor__formulario-2">
		    	<h3>¿CUANTO DESEAS DONAR?</h3>

		    	<img src="donar.png">

		    	    <div class="caja-donar">
		    	    	<input type="number" name="number" required>
		    	    </div>
		    		
		    		
		    		<div class="envio-dinero">
                        <button type="submit">DEPOSITAR</button>

                    </div>

		    </form>
		</div>

		<footer>
            <div class="contenedor__footer-redes">                
                <h3>REDES SOCIALES</h3>
                <ul class="redes">
                    <li><img src="facebook1.gif" width="30px" height="30px"><a href="#">facebook</a></li>

                    <li><img src="icons8-instagram.gif" width="30px" height="30px"><a href="#">Instagram</a></li>

                    <li><img src="icons8-twitter.gif" width="30px" height="30px" class="img3"><a href="#">twitter</a></li>

                    
                </ul>
            </div>

            <div class="contenedor__footer-ubicacion">
                <h3>UBICANOS</h3>

                <img src="home.gif" id="home" width="40px" height="30px">

                <p>Direccion: Cll 69B 106-23<br>Tel. 123456789</p>

                <p>MEDELLIN<br>ANTIOQUIA</p>

            </div>

			<div class="contenedor__footer-colaboracion">
                <h3 class="footer--h3">COLABORACIONES</h3>

                <p class="footer--p">Soluciones Constructivas <br>Salud y vida <br>Creciendo Juntos</p>
            </div>
        </footer>

        <?php

         include("registro_donacion.php");

        ?>

		
	</main>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<html>
<head>
	<meta charset="utf-8">
<!--llamamos a los estilos-->
	<link rel="stylesheet" type="text/css"  href="style.css">
		<script
		src="https://code.jquery.com/jquery-3.2.1.js"
		integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
		crossorigin="anonymus"></script>
		<!--llamamos al jscript-->
		<script  src="app.js
		" ></script>

	<title>Aerolineas la Leche</title>
</head>
<body background="imagenes/sayagata-400px.png">
	<nav>
	<ul class="nav">
		<li class="nav-item">
			<a class="nav-link" href="#" id="home">Inicio</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#" id="system">¿Quienes Somos?</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#" id="about">Venta de Boletos</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#" id="contact">Contactanos</a>
		</li>
        <li class="nav-item">
			<a class="nav-link" href="#" id="acercade">Acerca De</a>
		</li>
	</ul>
</nav>
 <section class="detalle">
 	<h1>Aerolineas la Leche</h1>
 	<h4><small><center>Comodidad a tu alcanze</center></small></h4> 
 	
 </section>
 <!--imagen de fondo-->
 <figure>
 	<img src="imagenes/arriba.jpg">
 </figure>
 <marquee><img src="imagenes/avion_4.png"  height="120"></marquee>
 <article class="articulo">
 	<h2>¿Quienes Somos?</h2>
 	<p> Aerolineas La Leche S.A. de C.V., que opera como Aeroméxico, es la aerolínea de bandera mexicana con base en el Aeropuerto Internacional de la Ciudad de México. Posee una flota de 71 aeronaves con 59 nuevas órdenes, y cotiza dentro de la Bolsa Mexicana de Valores. La aerolínea realiza vuelos directos hacia/desde México, Estados Unidos, Canadá, el Caribe, Centro y Sudamérica, Europa y Asia; adicionalmente ofrece vuelos de código compartido con las empresas asociadas a la alianza Skyteam de la que es miembro fundador junto a Delta Air Lines, Air France y Korean Air.3​ Tiene su sede corporativa en el emblemático Paseo de la Reforma en la Colonia Cuauhtémoc de la Ciudad de México.</p>
 </article>
 <br>
 <article class="articulo">
 <center>
 	<h2>Venta de Boletos</h2>
    <br>
 	<table border="1">
		<tr>
		
			<th> Venecia, Italia </th>
			<th> Múnich, Alemania</th>
			<th> Toronto, Canada</th>

		</tr>
		<tr>
			<td> <center>
					<a href="italia.php"> 
						<STYLE>A {text-decoration: none; color:black;} </STYLE> 
				     Vuelo 8:00  
			        </a>  
			</center></td>
			
			<td> <center>
					<a href="alemania.php"> 
						<STYLE>A {text-decoration: none; color:black;} </STYLE> 
				     Vuelo 8:00  
			        </a>  
			</center></td>

			<td> <center>
					<a href="canada.php"> 
						<STYLE>A {text-decoration: none; color:black;} </STYLE> 
				     Vuelo 8:00   
			        </a>  
			</center></td>
		</tr>

		<tr>
			<td> <center>
					<a href="italia.php"> 
						<STYLE>A {text-decoration: none; color:black;} </STYLE> 
				     Vuelo 15:00   
			        </a>  
			</center></td>
			
			<td> <center>
					<a href="alemania.php"> 
						<STYLE>A {text-decoration: none; color:black;} </STYLE> 
				     Vuelo 16:00   
			        </a>  
			</center></td>

			<td> <center>
					<a href="canada.php"> 
						<STYLE>A {text-decoration: none; color:black;} </STYLE> 
				     Vuelo 22:00   
			        </a>  
			</center></td>
		</tr>



		</table>
        </center>
 </article>
 <br>
 <br>
 <article class="articulo">
 <!--formulario-->
 <h2>Contactanos</h2>
 <form id="form">
 	<label>Nombre *</label>
 	<input type="text" name="">
 	<label>Asunto *</label>
 	<input type="text" name="">
 	<label>Correo *</label>
 	<input type="text" name="">
 	<label>Mensaje *</label>
 	<textarea>
 		
 	</textarea>
 	<br><br>
 	<input type="submit"  class="submit" value="Enviar">
 </form>
 </article>
<br>

<article class="articulo">
<center><h2>Acerca De</h2></center>
<p><center>
			<br> 
		<h3> INSTITUTO TECNOLOGICO DE LA LAGUNA </h3>		<br>
		<p>Aarón Castillo Olvera  </p>						
		<p>NoCtrl 16130792        </p>						<br>
		<p>Martin Flores Castruita</p>  					
		<p>NoCtrl 16130803        </p>						<br>
	</center>
	<br><br></p>
</article>
<br>
<br>
<br>
</body>
</html>
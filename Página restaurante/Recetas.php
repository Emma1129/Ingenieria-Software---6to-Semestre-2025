<?php
// Conexión a la base de datos para obtener los likes de las recetas
require_once 'db.php';
$mysqli = connect_db();

// Consulta para obtener el conteo de likes por receta
$res = $mysqli->query("SELECT recipe_id, COUNT(*) AS total FROM likes GROUP BY recipe_id");
$likes = [];

// Almacenar los resultados en un array asociativo [recipe_id => total_likes]
while ($row = $res->fetch_assoc()) {
  $likes[$row['recipe_id']] = $row['total'];
}
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <!-- METADATOS BÁSICOS -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodieCraft</title>
    
    <!-- FAVICON Y RECURSOS EXTERNOS -->
    <link rel="icon" href="https://foodiex-yz.netlify.app/img/favicon.ico">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="./FoodieXYZ_files/fontawesome/css/all.min.css"/>
    <!-- Hoja de estilos principal -->
    <link rel="stylesheet" href="./FoodieXYZ_files/styles.css">
    <!-- Estilos de extensión de Chrome (probablemente inyectado) -->
    <link rel="stylesheet" href="chrome-extension://bojobppfploabceghnmlahpoonbcbacn/app/content-style.css">
</head>

<body>
    <!-- ENCABEZADO PRINCIPAL -->
    <header>
        <!-- Logo del sitio -->
        <span class="logo">
            <a href="">FoodieCraft</a>
        </span>

        <!-- NAVEGACIÓN PRINCIPAL (versión escritorio) -->
        <nav class="navigation-header">
            <a href="index.php">Inicio</a>
            <a href="recetas.php">Recetas</a>
            <a href="blog.php">Blog</a>
            <a href="registro.php">Registro</a>
            <a href="nosotros.php">Nosotros</a>
        </nav>

        <!-- ENLACES A REDES SOCIALES -->
        <ul class="social-links">
            <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
        </ul>

        <!-- BOTÓN MENÚ MÓVIL -->
        <button class="btn-menu-responsive">
            <i class="fa-solid fa-bars-staggered"></i>
        </button>

        <!-- MENÚ MÓVIL (oculto por defecto) -->
        <div class="menu-mobile">
            <!-- Botón para cerrar menú móvil -->
            <div class="btn-close">
                <i class="fa-solid fa-x"></i>
            </div>
            
            <!-- Logo en versión móvil -->
            <span class="logo">
                <a href="">FoodieCraft</a>
            </span>

            <!-- NAVEGACIÓN MÓVIL -->
            <nav class="navigation-mobile">
                <a href="index.php">Inicio</a>
                <a href="recetas.php">Recetas</a>
                <a href="blog.php">Blog</a>
                <a href="registro.php">Registro</a>
                <a href="nosotros.php">Nosotros</a>
            </nav>

            <!-- REDES SOCIALES EN MÓVIL -->
            <ul class="social-links">
                <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
            </ul>
        </div>
    </header>

	    <!-- CONTENIDO PRINCIPAL - LISTADO DE RECETAS -->
		<main class="container">
			<h2>Recetas sencillas y sabrosas</h2>
			<p>
				Delicias culinarias sencillas para mejorar tu cocina diaria.
				Descubra comidas rápidas y deliciosas que impresionarán a sus
				invitados y harán de cada comida una ocasión especial.
			</p>

			<!-- Instrucción para dar likes -->
			<p>
				<strong>¡Prueba a dar like a tus recetas preferidas!</strong> <br>
				Nos ayudaria a saber que otras recetas podemos traer en el futuro.
			</p>

        	<!-- PRIMER GRUPO DE RECETAS (8 recetas) -->
			<div class="list-card-recipes">
	        <!-- Receta 1 -->
				<div class="card-recipe" data-recipe-id="1">
					<div class="container-img">
						<img src="./FoodieXYZ_files/img/img-recipe-1.webp" alt="Imagen Receta">
						<button class="btn-favorite">
						<i class="fa-solid fa-heart"></i>
						</button>
					</div>

					<div class="content">
						<h3>Pancakes de avena y fresa con jarabe de miel</h3>

						<div class="footer">
							<span class="time">
								<i class="fa-solid fa-clock"></i>
								30 minutos
							</span>
							<span class="category">
								<i class="fa-solid fa-utensils"></i>
								Desayuno
							</span>
								<span class="like-count"><?php echo $likes[1] ?? 0; ?> ♥</span>
						</div>
					</div>
				</div>
            <!-- Receta 2 -->
				<div class="card-recipe" data-recipe-id="2">
					<div class="container-img">
						<img src="./FoodieXYZ_files/img/img-recipe-2.webp" alt="Imagen Receta">
						<button class="btn-favorite">
						<i class="fa-solid fa-heart"></i>
						</button>
					</div>

					<div class="content">
						<h3>Salmón asado con lima fresca y salsa de jengibre</h3>

						<div class="footer">
						<span class="time">
							<i class="fa-solid fa-clock"></i>
							30 minutos
						</span>
						<span class="category">
							<i class="fa-solid fa-utensils"></i>
							Pescado
						</span>
							<span class="like-count"><?php echo $likes[2] ?? 0; ?> ♥</span>
						</div>
					</div>
				</div>
            <!-- Receta 3 -->
				<div class="card-recipe" data-recipe-id="3">
					<div class="container-img">
						<img src="./FoodieXYZ_files/img/img-recipe-3.webp" alt="Imagen Receta">
						<button class="btn-favorite">
						<i class="fa-solid fa-heart"></i>
						</button>
					</div>

					<div class="content">
						<h3>Gran Hamburguesa de carne de res Wagyu</h3>

						<div class="footer">
						<span class="time">
							<i class="fa-solid fa-clock"></i>
							30 minutos
						</span>
						<span class="category">
							<i class="fa-solid fa-utensils"></i>
							Aperitivo
						</span>
							<span class="like-count"><?php echo $likes[3] ?? 0; ?> ♥</span>
						</div>
					</div>
				</div>
            <!-- Receta 4 -->
				<div class="card-recipe" data-recipe-id="4">
					<div class="container-img">
						<img src="./FoodieXYZ_files/img/img-recipe-4.webp" alt="Imagen Receta">
						<button class="btn-favorite">
						<i class="fa-solid fa-heart"></i>
						</button>
					</div>

					<div class="content">
						<h3>Ensalada mixta saludable y fresca con mayonesa</h3>

						<div class="footer">
						<span class="time">
							<i class="fa-solid fa-clock"></i>
							30 minutos
						</span>
						<span class="category">
							<i class="fa-solid fa-utensils"></i>
							Saludable
						</span>
							<span class="like-count"><?php echo $likes[4] ?? 0; ?> ♥</span>
						</div>
					</div>
				</div>
            <!-- Receta 5 -->
				<div class="card-recipe" data-recipe-id="5">
					<div class="container-img">
						<img src="./FoodieXYZ_files/img/img-recipe-5.webp" alt="Imagen Receta">
						<button class="btn-favorite">
						<i class="fa-solid fa-heart"></i>
						</button>
					</div>

					<div class="content">
						<h3>Albóndigas de pollo con queso crema</h3>

						<div class="footer">
						<span class="time">
							<i class="fa-solid fa-clock"></i>
							30 minutos
						</span>
						<span class="category">
							<i class="fa-solid fa-utensils"></i>
							Carne
						</span>
							<span class="like-count"><?php echo $likes[5] ?? 0; ?> ♥</span>
						</div>
					</div>
				</div>
            <!-- Receta 6 -->
				<div class="card-recipe" data-recipe-id="6">
					<div class="container-img">
						<img src="./FoodieXYZ_files/img/img-recipe-6.webp" alt="Imagen Receta">
						<button class="btn-favorite">
						<i class="fa-solid fa-heart"></i>
						</button>
					</div>

					<div class="content">
						<h3>Pasta cremosa de pollo y tocino</h3>

						<div class="footer">
						<span class="time">
							<i class="fa-solid fa-clock"></i>
							30 minutos
						</span>
						<span class="category">
							<i class="fa-solid fa-utensils"></i>
							Fídeos
						</span>
							<span class="like-count"><?php echo $likes[6] ?? 0; ?> ♥</span>
						</div>
					</div>
				</div>
            <!-- Receta 7 -->
				<div class="card-recipe" data-recipe-id="7">
					<div class="container-img">
						<img src="./FoodieXYZ_files/img/img-recipe-7.webp" alt="Imagen Receta">
						<button class="btn-favorite">
						<i class="fa-solid fa-heart"></i>
						</button>
					</div>

					<div class="content">
						<h3>Pancakes afrutado con naranja y arándanos</h3>

						<div class="footer">
						<span class="time">
							<i class="fa-solid fa-clock"></i>
							30 minutos
						</span>
						<span class="category">
							<i class="fa-solid fa-utensils"></i>
							Dulce
						</span>
							<span class="like-count"><?php echo $likes[7] ?? 0; ?> ♥</span>
						</div>
					</div>
				</div>
            <!-- Receta 8 -->
				<div class="card-recipe" data-recipe-id="8">
					<div class="container-img">
						<img src="./FoodieXYZ_files/img/img-recipe-8.webp" alt="Imagen Receta">
						<button class="btn-favorite">
						<i class="fa-solid fa-heart"></i>
						</button>
					</div>

					<div class="content">
						<h3>Arroz con pollo y verduras en una sola olla</h3>

						<div class="footer">
						<span class="time">
							<i class="fa-solid fa-clock"></i>
							30 minutos
						</span>
						<span class="category">
							<i class="fa-solid fa-utensils"></i>
							Aperitivo
						</span>
							<span class="like-count"><?php echo $likes[8] ?? 0; ?> ♥</span>
						</div>
					</div>
				</div>

            <!-- Mensaje especial al final del primer grupo -->
			<div class="card-message">
					<p>¡No olvides comer comida saludable!</p>

				<img src="./FoodieXYZ_files/img/plate-food.png" alt="Plato de comida saludable">
			</div>
		</div>
	</main>

    <!-- SECCIÓN VACÍA (sirve como espaciador entre secciones) -->
		<section class="container space"></section>

		<!-- SEGUNDO GRUPO DE RECETAS (8 recetas adicionales) -->
		<section class="container section-more-recipes">
			<h2>Prueba esta receta para alegrate el día</h2>
			<p>
				Deléitate con creaciones sabrosas. Desde clásicos
				reconfortantes hasta giros innovadores, descubra platos que
				alegran cada comida
			</p>

			<div class="list-card-recipes">
				<!-- Receta 9 -->
				<div class="card-recipe" data-recipe-id="9">
					<div class="container-img">
						<img src="./FoodieXYZ_files/img/img-recipe-9.webp" alt="Imagen Receta">
						<button class="btn-favorite">
							<i class="fa-solid fa-heart"></i>
						</button>
					</div>

					<div class="content">
						<h3>Ensalada tropical de frutas con super alimentos</h3>

						<div class="footer">
							<span class="time">
								<i class="fa-solid fa-clock"></i>
								30 min
							</span>
							<span class="category">
								<i class="fa-solid fa-utensils"></i>
								Saludable
							</span>
							<span class="like-count"><?php echo $likes[9] ?? 0; ?> ♥</span>
						</div>
					</div>
				</div>
            	<!-- Receta 10 -->
				<div class="card-recipe" data-recipe-id="10">
					<div class="container-img">
						<img src="./FoodieXYZ_files/img/img-recipe-10.webp" alt="Imagen Receta">
						<button class="btn-favorite">
							<i class="fa-solid fa-heart"></i>
						</button>
					</div>

					<div class="content">
						<h3>Filete de carne de Wagyu con papas fritas</h3>

						<div class="footer">
							<span class="time">
								<i class="fa-solid fa-clock"></i>
								30 min
							</span>
							<span class="category">
								<i class="fa-solid fa-utensils"></i>
								Carne
							</span>
							<span class="like-count"><?php echo $likes[10] ?? 0; ?> ♥</span>
						</div>
					</div>
				</div>
            	<!-- Receta 11 -->
				<div class="card-recipe" data-recipe-id="11">
					<div class="container-img">
						<img src="./FoodieXYZ_files/img/img-recipe-11.webp" alt="Imagen Receta">
						<button class="btn-favorite">
							<i class="fa-solid fa-heart"></i>
						</button>
					</div>

					<div class="content">
						<h3>Arroz frito japonés con espárragos</h3>

						<div class="footer">
							<span class="time">
								<i class="fa-solid fa-clock"></i>
								30 min
							</span>
							<span class="category">
								<i class="fa-solid fa-utensils"></i>
								Oriental
							</span>
							<span class="like-count"><?php echo $likes[11] ?? 0; ?> ♥</span>
						</div>
					</div>
				</div>
            	<!-- Receta 12 -->
				<div class="card-recipe" data-recipe-id="12">
					<div class="container-img">
						<img src="./FoodieXYZ_files/img/img-recipe-12.webp" alt="Imagen Receta">
						<button class="btn-favorite">
							<i class="fa-solid fa-heart"></i>
						</button>
					</div>

					<div class="content">
						<h3>Taco vegetariano de coliflor y nueces</h3>

						<div class="footer">
							<span class="time">
								<i class="fa-solid fa-clock"></i>
								30 min
							</span>
							<span class="category">
								<i class="fa-solid fa-utensils"></i>
								Occidental
							</span>
							<span class="like-count"><?php echo $likes[12] ?? 0; ?> ♥</span>
						</div>
					</div>
				</div>
           		<!-- Receta 13 -->
				<div class="card-recipe" data-recipe-id="13">
					<div class="container-img">
						<img src="./FoodieXYZ_files/img/img-recipe-13.webp" alt="Imagen Receta">
						<button class="btn-favorite">
							<i class="fa-solid fa-heart"></i>
						</button>
					</div>

					<div class="content">
						<h3>Ensalada de pollo arcoíris con almendras y miel</h3>

						<div class="footer">
							<span class="time">
								<i class="fa-solid fa-clock"></i>
								30 min
							</span>
							<span class="category">
								<i class="fa-solid fa-utensils"></i>
								Saludable
							</span>
							<span class="like-count"><?php echo $likes[13] ?? 0; ?> ♥</span>
						</div>
					</div>
				</div>
            	<!-- Receta 14 -->
				<div class="card-recipe" data-recipe-id="14">
					<div class="container-img">
						<img src="./FoodieXYZ_files/img/img-recipe-14.webp" alt="Imagen Receta">
						<button class="btn-favorite">
							<i class="fa-solid fa-heart"></i>
						</button>
					</div>

					<div class="content">
						<h3>Sandwich picante de barbacoa con papas fritas</h3>

						<div class="footer">
							<span class="time">
								<i class="fa-solid fa-clock"></i>
								30 min
							</span>
							<span class="category">
								<i class="fa-solid fa-utensils"></i>
								Aperitivo
							</span>
							<span class="like-count"><?php echo $likes[14] ?? 0; ?> ♥</span>
						</div>
					</div>
				</div>
            	<!-- Receta 15 -->				
				<div class="card-recipe" data-recipe-id="15">
					<div class="container-img">
						<img src="./FoodieXYZ_files/img/img-recipe-15.webp" alt="Imagen Receta">
						<button class="btn-favorite">
							<i class="fa-solid fa-heart"></i>
						</button>
					</div>

					<div class="content">
						<h3>Arroz frito japonés con espárragos</h3>

						<div class="footer">
							<span class="time">
								<i class="fa-solid fa-clock"></i>
								30 min
							</span>
							<span class="category">
								<i class="fa-solid fa-utensils"></i>
								Mariscos
							</span>
							<span class="like-count"><?php echo $likes[15] ?? 0; ?> ♥</span>
						</div>
					</div>
				</div>
	            <!-- Receta 16 -->
				<div class="card-recipe" data-recipe-id="16">
					<div class="container-img">
						<img src="./FoodieXYZ_files/img/img-recipe-16.webp" alt="Imagen Receta">
						<button class="btn-favorite">
							<i class="fa-solid fa-heart"></i>
						</button>
					</div>

					<div class="content">
						<h3>Sopa ramen de pollo con champiñones</h3>

						<div class="footer">
							<span class="time">
								<i class="fa-solid fa-clock"></i>
								30 min
							</span>
							<span class="category">
								<i class="fa-solid fa-utensils"></i>
								Oriental
							</span>
							<span class="like-count"><?php echo $likes[16] ?? 0; ?> ♥</span>
						</div>
					</div>
				</div>
			</div>
		</section>

    <!-- SECCIÓN VACÍA (sirve como espaciador entre secciones) -->
    <section class="container space"></section>

	<!-- PIE DE PÁGINA -->    
	<footer class="container">
		<div class="first-section">
			<span class="logo">
				<a href="index.php">FoodieCraft</a>
			</span>

			<nav class="navigation-footer">
				<a href="recetas.php">Recetas</a>
				<a href="blog.php">Blog</a>
				<a href="registro.php">Registro</a>
				<a href="nosotros.php">Nosotros</a>
			</nav>
		</div>

		<div class="second-section">
			<div></div>
			<p class="copyright">©2024 Persona desconocida.</p>
				
			<ul class="social-links">
				<li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
				<li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
				<li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
        	</ul>
		</div>
	</footer>
    	<!-- Scripts JavaScript -->
		<script src="./FoodieXYZ_files/index.js"></script>
	</body>
</html>
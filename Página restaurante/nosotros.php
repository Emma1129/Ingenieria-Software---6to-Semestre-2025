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
		
		<!-- Sección de publicaciones de Instagram -->
		<section class="section-posts-instagram">

			<!-- Contenedor principal con clase adicional para estilos de Instagram -->
			<div class="container section-instagram">
			
				<!-- Título de la sección con énfasis en "Instagram" usando la etiqueta <span> -->
				<h2>Echa un vistazo a @FoodieCraft en <span>Instagram</span></h2>

				<!-- Descripción que invita al usuario a inspirarse con contenido culinario -->
				<p>¡Inspírate con fotografías deliciosas, recetas deliciosas y consejos de cocina para mejorar tus habilidades culinarias!</p>

				<!-- Contenedor que agrupa las publicaciones de Instagram como tarjetas -->
				<div class="list-posts-instagram">
					<!-- Cada imagen se encuentra dentro de un div con clase "card-img" -->
					<div class="card-img"><img src="./FoodieXYZ_files/img/post-instagram-1.png" alt="Post Instagram 1"></div>
					<div class="card-img"><img src="./FoodieXYZ_files/img/post-instagram-2.png" alt="Post Instagram 2"></div>
					<div class="card-img"><img src="./FoodieXYZ_files/img/post-instagram-3.png" alt="Post Instagram 3"></div>
					<div class="card-img"><img src="./FoodieXYZ_files/img/post-instagram-4.png" alt="Post Instagram 4"></div>
				</div>
			</div>
		</section>

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
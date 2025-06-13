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

    <!-- SECCIÓN HERO/BANNER PRINCIPAL -->
    <section class="container section-banner-hero">
        <div class="content">
            <!-- Badge destacado -->
            <span class="badge-hot-recipes">
                <i class="fa-solid fa-fire-flame-curved"></i>
                Recetas Calientes
            </span>

            <!-- Título principal -->
            <h1>Alitas de pollo picantes</h1>

            <!-- Descripción -->
            <p>
                “Crujientes, sabrosas y perfectamente condimentadas:
                Disfrute de la receta definitiva de deliciosas alitas de
                pollo que le dejarán con ganas de más”
            </p>

            <!-- Badges informativos -->
            <div class="badges">
                <span><i class="fa-solid fa-clock"></i>30 minutos</span>
                <span><i class="fa-solid fa-utensils"></i>Pollo</span>
            </div>

            <!-- Botón CTA (Call to Action) -->
            <button onclick="window.location.href='https://www.youtube.com/watch?v=j64xl7m8HhE'">
                Ver recetas
                <i class="fa-solid fa-circle-play"></i>
            </button>
        </div>
        
        <!-- Imagen del banner -->
        <div class="container-img">
            <img src="./FoodieXYZ_files/img/img-banner-hero.webp" alt="Alitas de pollo picantes">
        </div>
    </section>

    <!-- SECCIÓN DE CATEGORÍAS -->
    <section class="container section-categories">
        <div class="header">
            <h2>Categorías</h2>
            <a href="" class="btn-all-categories">Ver todas las categorias</a>
        </div>

        <!-- Tarjetas de categorías -->
        <div class="list-card-categories">
            <!-- Cada categoría tiene una clase única para estilizado -->
            <div class="card-category breakfast">
                <img src="./FoodieXYZ_files/img/icono-desayuno.svg" alt="Desayuno">
                <p>Desayuno</p>
            </div>
            <div class="card-category vegan">
                <img src="./FoodieXYZ_files/img/icono-vegano.svg" alt="Comida vegana">
                <p>Vegano</p>
            </div>
            <div class="card-category meat">
                <img src="./FoodieXYZ_files/img/icono-carne.svg" alt="Platos de carne">
                <p>Carne</p>
            </div>
            <div class="card-category desert">
                <img src="./FoodieXYZ_files/img/icono-cake.svg" alt="Postres">
                <p>Postre</p>
            </div>
            <div class="card-category chocolate">
                <img src="./FoodieXYZ_files/img/icono-chocolate.svg" alt="Chocolate">
                <p>Chocolate</p>
            </div>
        </div>
    </section>

    <!-- SECCIÓN PROMOCIONAL "CHEF" -->
    <section class="container section-chef">
        <div class="content">
            <h2>Cada uno puede ser chef en su propia cocina</h2>
            <p>
                Descubra recetas fáciles y deliciosas para dar rienda suelta
                al artista culinario que lleva dentro y hacer de cada comida
                una obra maestra.
            </p>
            <button class="btn">Aprender más</button>
        </div>
        <div class="container-img">
            <img src="./FoodieXYZ_files/img/img-chef.png" alt="Chef cocinando">
        </div>
    </section>

    <!-- SECCIÓN DUPLICADA VACÍA (probablemente para futuras actualizaciones) -->
    <section class="container section-chef"></section>
    
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

    <!-- SCRIPTS -->
    <script src="./FoodieXYZ_files/index.js"></script>
</body>
</html>
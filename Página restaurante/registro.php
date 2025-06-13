<?php
// Inicializa la variable $mensaje como una cadena vacía.
// Esta variable se usará para mostrar un mensaje al usuario según el resultado del registro.
$mensaje = '';

// Verifica si en la URL se recibió el parámetro 'success' (por ejemplo: index.php?success=1)
if (isset($_GET['success'])) {
    // Si 'success' está presente, se recupera el nombre enviado por la URL (por ejemplo: index.php?success=1&nombre=Juan)
    // Se utiliza 'htmlspecialchars' para evitar inyecciones de HTML o XSS (Cross-site scripting).
    $nombre = htmlspecialchars($_GET['nombre']);

    // Se define el mensaje de éxito personalizado usando el nombre recuperado
    $mensaje = "¡Registro exitoso! Gracias por suscribirte, {$nombre}.";

} elseif (isset($_GET['error'])) {
    // Si se recibió el parámetro 'error' en la URL (por ejemplo: index.php?error=1),
    // se define un mensaje de error genérico.
    $mensaje = 'Hubo un error al procesar tu registro. Por favor intenta de nuevo.';
}
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

		<!-- SECCIÓN DE NEWSLETTER -->
		<section class="container section-newsletter">
			<!-- Título principal de la sección -->
			<h2>Delicias en tu correo</h2>
			
			<!-- Descripción del propósito del newsletter -->
			<p>
				Suscríbete para recibir recetas deliciosas, consejos culinarios 
				e inspiración gastronómica directamente en tu correo electrónico.
			</p>

			<!-- Bloque para mostrar mensajes de retroalimentación -->
			<?php if (isset($mensaje) && !empty($mensaje)): ?>
				<div class="alert-success">
					<?php echo htmlspecialchars($mensaje); ?>
				</div>
			<?php endif; ?>

			<!-- Formulario de suscripción -->
			<form action="register.php" method="post" class="container-input" id="form-newsletter">
				<!-- Campo para el nombre del usuario -->
				<input 
					type="text" 
					name="nombre" 
					placeholder="Tu nombre" 
					required
					aria-label="Tu nombre completo"
				>
				
				<!-- Campo para el email del usuario -->
				<input 
					type="email" 
					name="email" 
					placeholder="Tu correo electrónico" 
					required
					aria-label="Tu dirección de correo electrónico"
				>
				
				<!-- Botón de envío del formulario -->
				<button type="submit" class="btn">Registrarse</button>
			</form>
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
<?php
// Incluye el archivo de conexión a la base de datos
require_once 'db.php';
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

    <!-- SECCIÓN PRINCIPAL - CHAT DE VISITANTES -->
	<section class="container chat-container">
			<h2>Chat de visitantes</h2>
			
			<!-- Contenedor para los mensajes -->
			<div id="messages" class="messages"></div>

        	<!-- Formulario para enviar mensajes -->
			<form id="chat-form" class="chat-form">
			<input type="text" id="nombre" placeholder="Tu nombre" required>
			<input type="text" id="contenido" placeholder="Escribe un mensaje..." required>
			<button type="submit">Enviar</button>
			</form>
		</section>
    <!-- Script para el funcionamiento del chat -->
  	<script>
		const messagesDiv = document.getElementById('messages');
		const form = document.getElementById('chat-form');

    // Función para cargar mensajes desde el servidor
    async function loadMessages() {
      try {
		// Obtener mensajes del endpoint
		const res = await fetch('get_messages.php');
		const msgs = await res.json();

		// Generar HTML para cada mensaje
        messagesDiv.innerHTML = msgs.map(m => 
          `<div class="message">
             <div class="meta"><strong>${m.nombre}</strong> · ${m.fecha}</div>
             <div class="text">${m.contenido}</div>
           </div>`
        ).join('');

        // Desplazar al final de los mensajes		
        messagesDiv.scrollTop = messagesDiv.scrollHeight;
      } catch (e) {
        console.error('Error al cargar mensajes:', e);
      }
    }

    // Evento de envío de formulario
    form.addEventListener('submit', async e => {
      e.preventDefault();
      const nombre = document.getElementById('nombre').value.trim();
      const contenido = document.getElementById('contenido').value.trim();
    
		// Validar campos
		if (!nombre || !contenido) return;

		try {
			// Enviar mensaje al servidor
			const res = await fetch('post_message.php', {
				method: 'POST',
				headers: { 'Content-Type': 'application/json' },
				body: JSON.stringify({ nombre, contenido })
			});

			if (!res.ok) console.error('Post error:', res.statusText);
			// Limpiar campo de mensaje y recargar chat
			document.getElementById('contenido').value = '';
			loadMessages();
		} catch (e) {
			console.error('Error al enviar mensaje:', e);
		}
	});

    // Recargar mensajes cada 3 segundos
    setInterval(loadMessages, 3000);

	// Cargar mensajes al iniciar
    loadMessages();
  </script>

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
				<a href="blog">Blog</a>
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
</body>
</html>
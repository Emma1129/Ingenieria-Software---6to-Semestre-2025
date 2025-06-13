// Espera a que todo el contenido del DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', () => {
  // Selecciona los elementos del menú móvil:
  const btnCloseMenu = document.querySelector('.btn-close'); // Botón para cerrar el menú
  const btnOpenMenu = document.querySelector('.btn-menu-responsive'); // Botón para abrir el menú
  const menuMobile = document.querySelector('.menu-mobile'); // Contenedor del menú móvil

  // Si alguno de los elementos no existe en el DOM, detiene la ejecución
  if (!btnOpenMenu || !btnCloseMenu || !menuMobile) return;

  // Agrega un evento para abrir el menú cuando se hace clic en el botón correspondiente
  btnOpenMenu.addEventListener('click', () => {
    menuMobile.classList.add('active'); // Añade la clase 'active' para mostrar el menú
  });

  // Agrega un evento para cerrar el menú cuando se hace clic en el botón correspondiente
  btnCloseMenu.addEventListener('click', () => {
    menuMobile.classList.remove('active'); // Remueve la clase 'active' para ocultar el menú
  });
});

// Selecciona todos los botones de "me gusta" (like) en las tarjetas de recetas
const botonesLike = document.querySelectorAll('.btn-favorite');

// Recorre cada botón y le asigna un evento de clic
botonesLike.forEach(btn => {
  btn.addEventListener('click', async e => {
    e.preventDefault(); // Evita el comportamiento por defecto del enlace o botón

    // Obtiene el contenedor más cercano con la clase .card-recipe
    const card = btn.closest('.card-recipe');

    // Extrae el ID de la receta desde el atributo data del contenedor
    const recipeId = card.dataset.recipeId;

    // Selecciona el ícono dentro del botón y el contador de likes
    const icono = btn.querySelector('i');
    const likeCount = card.querySelector('.like-count');

    // Envía una solicitud POST a like_recipe.php con el ID de la receta
    const res = await fetch('like_recipe.php', {
      method: 'POST',
      headers: {'Content-Type': 'application/json'},
      body: JSON.stringify({ recipe_id: recipeId })
    });

    // Espera la respuesta en formato JSON
    const data = await res.json();

    // Si la operación fue exitosa, actualiza el ícono y el contador de likes
    if (data.success) {
      icono.classList.add('active'); // Marca el ícono como activo
      likeCount.textContent = `${data.likes} ♥`; // Muestra el número actualizado de likes
    } else {
      // Si hubo un error, lo muestra en la consola
      console.error(data.error);
    }
  });
});

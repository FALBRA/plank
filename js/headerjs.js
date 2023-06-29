// Obtenemos el enlace correspondiente a "SERVICIOS"
const serviciosLink = document.getElementById('serviciosLink');

// Obtenemos la URL actual
const currentURL = window.location.href;

// Verificamos si estamos en la página "todos-servicios.php"
if (currentURL.includes('todos-servicios.php')) {
  serviciosLink.classList.add('neon');
}

// Obtenemos el enlace correspondiente a "SERVICIOS"
const serviciosLinkNoticias = document.getElementById('serviciosNoticias');

// Obtenemos la URL actual
const currentURLNoticias = window.location.href;

// Verificamos si estamos en la página "todos-servicios.php"
if (currentURLNoticias.includes('noticias.php')) {
  serviciosLinkNoticias.classList.add('noti');
}
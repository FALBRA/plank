// Captura el clic en el enlace de WhatsApp
const whatsappLink = document.querySelector('.whatsapp');
whatsappLink.addEventListener('click', function(event) {
  event.preventDefault();

  // Número de teléfono y mensaje
  const phoneNumber = '914069125'; // Reemplaza con el número de teléfono
  const message = 'Hola, estoy enviando un mensaje desde tu sitio web.'; // Reemplaza con tu mensaje

  // Crea la URL de WhatsApp con el número y el mensaje
  const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;

  // Abre una nueva ventana o pestaña con la URL de WhatsApp
  window.open(whatsappUrl, '_blank');
});

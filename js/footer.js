
function enviarWhatsApp() {
    
    var telefono = "914069125";
    
    var mensaje = "Hola%20mundo";
    // Construir el enlace de WhatsApp
    var enlaceWhatsApp = "https://wa.me/" + telefono + "?text=" + mensaje;
    // Abrir WhatsApp en una nueva ventana
    window.open(enlaceWhatsApp, "_blank");
}


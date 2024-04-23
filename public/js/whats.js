function abrirWhatsApp() {
    var numeroTelefono = "+573014166204"; // Reemplaza con el número de teléfono deseado
    var mensaje = "¡Hola! Estoy interesado en tu servicio."; // Mensaje predeterminado
    var enlaceWhatsApp = "https://wa.me/" + numeroTelefono + "?text=" + encodeURIComponent(mensaje);
    window.open(enlaceWhatsApp, "_blank");
  }
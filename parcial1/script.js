function mostrarMensaje() {
  const mensaje = document.querySelector("#mensaje");
  mensaje.textContent = "Turno recibido - te atiende Jose Manuel Vargas Diaz";
  mensaje.classList.remove("oculto");
}

document.querySelector("#btn-confirmar").addEventListener("click", mostrarMensaje);

const formulario = document.querySelector('#form-naranja');
const aviso = document.querySelector('#aviso-naranja');

function validarFormulario(event) {
  const nombre = document.querySelector('#nombre').value;
  const correo = document.querySelector('#correo').value;

  if (nombre === '' || correo === '') {
    event.preventDefault();
    aviso.textContent = 'Tu nombre y tu correo van primero - sin eso no sale el jugo.';
    aviso.classList.add('error');
    aviso.classList.remove('exito');
  } else if (!correo.includes('@')) {
    event.preventDefault();
    aviso.textContent = 'Sin arroba ese correo no sirve - fijate y volvé a enviar.';
    aviso.classList.add('error');
    aviso.classList.remove('exito');
  } else {
    aviso.textContent = 'Jugo anotado - te atiende José Manuel Vargas Diaz';
    aviso.classList.add('exito');
    aviso.classList.remove('error');
  }
}

formulario.addEventListener('submit', validarFormulario);

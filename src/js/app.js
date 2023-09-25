document.addEventListener('DOMContentLoaded', function () {
  eventListener();
  darkMode();
})

function darkMode() {
  const presfiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
  if (presfiereDarkMode.matches) {
    document.body.classList.add('dark-mode');
  } else {
    document.body.classList.remove('dark-mode');
  }
  presfiereDarkMode.addEventListener('change', function () {
    if (presfiereDarkMode.matches) {
      document.body.classList.add('dark-mode');
    } else {
      document.body.classList.remove('dark-mode');
    }
  })
  const botonDarkMode = document.querySelector('.dark-mode-boton');

  botonDarkMode.addEventListener('click', function () {
    document.body.classList.toggle('dark-mode');
    //Para que el modo elegido se quede guardado en local-storage
    if (document.body.classList.contains('dark-mode')) {
      localStorage.setItem('modo-oscuro','true');
    } else {
      localStorage.setItem('modo-oscuro','false');
    }
  });

  //Obtenemos el modo del color actual
  if (localStorage.getItem('modo-oscuro') === 'true') {
    document.body.classList.add('dark-mode');
  } else {
    document.body.classList.remove('dark-mode');
  }

}

function eventListener() {
  const mobilMenu = document.querySelector('.mobile-menu');
  mobilMenu.addEventListener('click', navegacionResponsive);

  //muestra campos condicionales
  const metodoContacto = document.querySelectorAll('input[name="contacto[contacto]"]');
  metodoContacto.forEach(input => input.addEventListener( 'click', mostrarMetodosContacto ) );
}

function navegacionResponsive() {
  const navegacion = document.querySelector('.navegacion');
  navegacion.classList.toggle('mostrar');
}

function mostrarMetodosContacto(e) {
  const contactoDiv = document.querySelector('#contacto');
  const seleccion = e.target.value;

  if (seleccion === 'telefono') {
    contactoDiv.innerHTML = `
      <label for="telefono">Numero de contacto</label>
      <input type="tel" placeholder="Tu telefono" id="telefono" name="contacto[telefono]" >
      
      <p>Complete la forma de contacto</p>
      
      <label for="fecha">Fecha</label>
      <input type="date" id="fecha" name="contacto[fecha]">
      <label for="hora">Hora</label>
      <input type="time" id="hora" min="09:00" max="18:00" name="contacto[hora]">
    `;
  } else {
    contactoDiv.innerHTML = `
      <label for="email">Correo</label>
      <input type="email" placeholder="abcd@gmail.com" id="email" name="contacto[email]" required>
    `;
  }
}
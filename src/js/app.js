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
}

function navegacionResponsive() {
  const navegacion = document.querySelector('.navegacion');
  navegacion.classList.toggle('mostrar');
}
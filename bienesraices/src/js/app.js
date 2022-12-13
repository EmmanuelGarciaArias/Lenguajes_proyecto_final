document.addEventListener('DOMContentLoaded', function() {

  eventListeners();
  darkMode();
})

function darkMode() {

  const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: light)')
  //console.log(prefiereDarkMode.matches)
  if(prefiereDarkMode.matches) {
    document.body.classList.add('dark-mode');
  } else {
    document.body.classList.remove('dark-mode');
  }

  prefiereDarkMode.addEventListener('change', function() {
    if(prefiereDarkMode.matches) {
      document.body.classList.add('dark-mode');
    } else {
      document.body.classList.remove('dark-mode');
    }
  })

  const botonDarkMode = document.querySelector('.dark-mode-boton')

  botonDarkMode.addEventListener('click', darkmodeoptions)
}

//Funcion para inserar o remover la clase dark-mode en el boton
function darkmodeoptions(){
  const botondark = document.querySelector('.dark-mode-boton')

  if(document.body.classList.contains('dark-mode')) {
    document.body.classList.remove('dark-mode')
} else {
  document.body.classList.add('dark-mode')
}
}

function eventListeners() {
  const mobileMenu = document.querySelector('.mobile-menu');

  mobileMenu.addEventListener('click', navegacionResponsive)
}

function navegacionResponsive() {
  const navegacion = document.querySelector('.navegacion');

  if(navegacion.classList.contains('mostrar')) {
      navegacion.classList.remove('mostrar')
  } else {
    navegacion.classList.add('mostrar')
  }
}
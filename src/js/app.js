document.addEventListener('DOMContentLoaded', function() {
    iniciarApp();
});

function iniciarApp(){
    mobileMenu();
    navegacionFija();
    scrollNav();
    dropdown();
    
}

function navegacionFija() {
    const barra = document.querySelector('.header');
    const schedule = document.querySelector('.schedule');
    const body = document.querySelector('body');

    window.addEventListener('scroll', function() {
        if(schedule.getBoundingClientRect().top < 0){
            barra.classList.add('fijo');
            body.classList.add('body-scroll');
        }else{
            barra.classList.remove('fijo');
            body.classList.remove('body-scroll');
        }
    })
}

function scrollNav() {
    const enlaces = document.querySelectorAll('.navegacion a');
    enlaces.forEach( enlace => {
        enlace.addEventListener('click', function(e) {
            e.preventDefault();
            const seccionScrooll = e.target.attributes.href.value;
            const seccion = document.querySelector(seccionScrooll);
            seccion.scrollIntoView({ behavior: "smooth"});
        })
    })
}


function dropdown(){
    // Obtenemos todos los elementos con la clase 'pregunta'
    const preguntas = document.querySelectorAll('.pregunta');

    // Iteramos sobre cada pregunta para agregar el evento de clic
    preguntas.forEach(pregunta => {
        pregunta.addEventListener('click', () => {
            // Obtenemos el elemento 'respuesta' asociado a la pregunta actual
            const respuesta = pregunta.nextElementSibling;

            // Cambiamos la clase del elemento respuesta para mostrar u ocultar el contenido
            respuesta.classList.toggle('cerrado');

            // Obtenemos el elemento con la clase 'icono' dentro de la pregunta actual
            const icono = pregunta.querySelector('.icono');

            // Cambiamos el contenido del elemento 'icono' según si está desplegado o no
            if (respuesta.classList.contains('cerrado')) {
                icono.textContent = '+';
            } else {
                icono.textContent = 'x';
            }

        });
    });
}

function mobileMenu() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar')

}

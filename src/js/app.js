document.addEventListener('DOMContentLoaded', function(){
    eventListeners();
    darkMode();
});

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');
    navegacion.classList.toggle('mostrar');
}

function darkMode() {
    //Leer las preferencias del usuarios en el sistema operativo
    const darkModePreferences = window.matchMedia('(prefers-color-scheme: dark)');

    if(darkModePreferences.matches){
        document.body.classList.add('dark-mode');
    }else{
        document.body.classList.remove('dark-mode');
    }

    //Para que detecte el cmbio en el sistema y no sea necesario recargar la pagina
    darkModePreferences.addEventListener('change',function(){
        if(darkModePreferences.matches){
            document.body.classList.add('dark-mode');
        }else{
            document.body.classList.remove('dark-mode');
        }
    });


    const botonDarkMode = document.querySelector('.dark-mode-boton');
    botonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    });
}
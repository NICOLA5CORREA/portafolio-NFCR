(function() {
    // Función para controlar el cambio de color al hacer scroll
    window.addEventListener('scroll', function() {
        var nav = document.querySelector('.nav');
        if (window.scrollY > 120) { // Cambia 100 a la posición deseada donde quieres que ocurra el cambio
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    });
})();

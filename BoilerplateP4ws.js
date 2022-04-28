/**
     * Seccion para las funciones del proyecto imagenes expandibles*/
    

    const panels = document.querySelectorAll('.panel')

    panels.forEach((panel) => {
        panel.addEventListener('click',() => {
            removeActiveClasses()
            panel.classList.add('active')
        })
    })
    
    function removeActiveClasses() {
        panels.forEach(panel => {
            panel.classList.remove('active')
        })
    }
/*Fin del bloque */
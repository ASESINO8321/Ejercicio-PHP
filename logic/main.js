//variables y funcion tipo flecha para para el boton de menu desplegable
const navButton = document.querySelector(".navButton");
const navUl = document.querySelector(".navUl");
    // creamos un escuchador de eventos para que cambia la clase de navUl y hacer visible el menu
    navButton.addEventListener("click", () => {
    navUl.classList.toggle("navUl_visible");
    //creamos un if() y else() para que nuestro menu despegable interactue con el taburador
    if(navUl.classList.contains("navUl_visible")){
        //agregamos la propiedad setAtributte para cambiar el aria label y cerrar o abrir el menu por medio de la tecla tabulador
        navButton.setAttribute("aria-label", "Cerrar menu")
    } 
    else{
        navButton.setAttribute("aria-label", "Abrir menu")
    }
});
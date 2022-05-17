export let menuButton = () => {

    let menu = document.getElementById("cabecera-menu-mobile");
    let hamburger = document.getElementById("menu-hamburger-button")

    if(hamburger){
        hamburger.addEventListener("click", () => {
            menu.classList.toggle("active"); 
            hamburger.classList.toggle("active"); 
        });
    }
}




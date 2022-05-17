import{message} from './message.js';

export let form = () => {
    
    let storeButton = document.querySelector(".store");

    storeButton.addEventListener("click", () =>{

        message("El formulario no es válido", 'error');
    });

}




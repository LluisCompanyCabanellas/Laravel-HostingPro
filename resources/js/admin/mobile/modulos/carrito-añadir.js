
export let carrito = () => {


    let botones = document.querySelectorAll(".contratar");
    let contador = document.querySelector(".contador");

    botones.forEach(button => {
        button.addEventListener("click", () => {

            contador.value = parseInt(contador.value) + 1;
        }); 
    })


    
}




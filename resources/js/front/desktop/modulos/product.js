
export let product = () => {
    
    let pays = document.querySelector(".pay");
    let amount = document.querySelector(".plus-minus-input")

    if(pays) {

        pays.addEventListener("click", () => {

            if(amount.value > 0) {
                
                document.dispatchEvent(new CustomEvent('message', {
                    detail: {
                        text: 'Has añadido el producto con exito',
                        type: 'success'
                    }
                }));
            }   else {
                document.dispatchEvent(new CustomEvent('message', {
                    detail: {
                        text:'Has añadido el producto con exito',
                        type:'error'
                    }
                }));
            }
        });
    }

}

    

 
 
 
 
 
 
 
 
 
 
 
 










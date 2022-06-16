
export let renderNumberProducts = () => {

let numberProducts = document.querySelectorAll("pay");
    
  

document.addEventListener("renderProductModules",( event =>{
    renderProducts();
}), {once: true});




if(numberProducts) {
            
    numberProducts.addEventListener('click', (event) => {

        event.preventDefault();

        let data = new FormData(form); // FormData es un objeto que nos permite capturar los datos del formulario.
        let url = form.action;

        let sendOrderRequest = async () => {
                
        let response = await fetch(url, {

            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
            },

            method: 'POST',
            body: data

        })
        .then(response => {
            
            if (!response.ok) throw response;

            return response.json();
        })
        .then(json => {
            mainContainer.innerHTML = json.content;
                                        
            document.dispatchEvent(new CustomEvent('renderProductModules'));
        })
        .catch ( error => {

            if(error.status == '500'){
                console.log(error);

            }

        });
    }

    sendOrderRequest();

});
}    

}

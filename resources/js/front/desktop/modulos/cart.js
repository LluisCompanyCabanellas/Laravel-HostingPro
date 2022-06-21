
export let renderCart = () => {

    let mainContainer = document.querySelector("main");  
    let payButton = document.querySelector(".pay");
    let forms = document.querySelectorAll(".add-to-cart");
    let plus = document.querySelectorAll(".plus");
    let minus = document.querySelectorAll(".minus");
  
  

        
    document.addEventListener("renderProductModules",( event =>{
        renderCart();
    }), {once: true});


    if(payButton) {
                
        payButton.addEventListener('click', (event) => {

            event.preventDefault();

            forms.forEach(form => { 

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

        });
    }    



    
    if(plus) {
            
        plus.addEventListener('click', (event) => {

            event.preventDefault();

            let url = plus.dataset.url;//?¿

            let sendOrderRequest = async () => {
                
                let response = await fetch(url, {

                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    },

                    method: 'GET',
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



    
    if(minus) {
            
        minus.addEventListener('click', (event) => {

            event.preventDefault();

            let url = minus.dataset.url;//?¿

            let sendOrderRequest = async () => {
                
                let response = await fetch(url, {

                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    },

                    method: 'GET',
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


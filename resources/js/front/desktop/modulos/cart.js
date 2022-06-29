
export let renderCart = () => {

    let mainContainer = document.querySelector("main");  
    let payButton = document.querySelector(".pay");
    let forms = document.querySelectorAll(".add-to-cart");
<<<<<<< HEAD
    let plus = document.querySelector(".cart-plus");
    let minus = document.querySelector(".cart-minus");

=======
    let plusMinusButtons = document.querySelectorAll(".plus-minus-button");
    let checkoutButton = document.querySelector(".checkout-button");
>>>>>>> 010376c8a59fa3a80a50e255101079f4c73c5b14
        
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

    plusMinusButtons.forEach(plusMinusButton => {

        plusMinusButton.addEventListener('click', (event) => {

            event.preventDefault();

            let url = plusMinusButton.dataset.url;

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
    });

    if(checkoutButton) {
                
        checkoutButton.addEventListener('click', (event) => {

            event.preventDefault();

            let url = checkoutButton.dataset.url;
    
            let sendShowRequest = async () => {
    
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
                .catch(error =>  {
    
                    if(error.status == '500'){
                        console.log(error);
                    }
                });
            };
    
            sendShowRequest();
     
        
        });
    }    

    
<<<<<<< HEAD
    if(plus) {
            
        plus.addEventListener('click', (event) => {

            event.preventDefault();

            let url = plus.dataset.url;

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

            let url = minus.dataset.url;

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
    


    
=======
    

}  
>>>>>>> 010376c8a59fa3a80a50e255101079f4c73c5b14


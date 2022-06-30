export let renderProducts = () => {

    let mainContainer = document.querySelector("main");
    let viewButtons = document.querySelectorAll('.view-product');
    let categoryButtons = document.querySelectorAll('.category-button');
    let amount = document.querySelector(".plus-minus-input");
    let orderPrice = document.querySelector(".order-price");
    let search = document.querySelector(".searcher");
    let form = document.querySelector(".searcherproduct");
    let payButton = document.querySelector(".pay");
    let forms = document.querySelectorAll(".add-to-cart");

    document.addEventListener("products",( event =>{
        
        renderProducts();

    }), {once: true});

    viewButtons.forEach(viewButton => {
 
        viewButton.addEventListener('click', () => {
 
            let url = viewButton.dataset.url;
 
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
               
                    document.dispatchEvent(new CustomEvent('products'));

                })
                .catch(error =>  {
 
                    if(error.status == '500'){
                        console.log(error);
                    }
                });
            };
 
            sendShowRequest();
 
        });
    });

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
                   
                        document.dispatchEvent(new CustomEvent('cart'));

                        document.dispatchEvent(new CustomEvent('message', {
                            detail: {
                                text: 'Has añadido el producto con exito',
                                type: 'success'
                            }
                        }));
                    })
                    .catch ( error => {

                        document.dispatchEvent(new CustomEvent('message', {
                            detail: {
                                text:'Has añadido el producto con exito',
                                type:'error'
                            }
                        }));
                    
                        if(error.status == '500'){
                            console.log(error);

                        }

                    });
                }

                sendOrderRequest();
            });

        });
    }    

    categoryButtons.forEach(categoryButton => {
 
        categoryButton.addEventListener('click', () => {
 
            let url = categoryButton.dataset.url;
 
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
                    document.dispatchEvent(new CustomEvent('products'));
                    
                })
                .catch(error =>  {
 
                    if(error.status == '500'){
                        console.log(error);
                    }
                });
            };
 
            sendShowRequest();
 
        });
    });

    if(orderPrice) {
            
        orderPrice.addEventListener('change', (event) => {

            event.preventDefault();

            let url = orderPrice.value;

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
                    document.dispatchEvent(new CustomEvent('products'));

                   
                }).catch ( error => {

                    if(error.status == '500'){
                        console.log(error);

                    }

                });
            }

            sendOrderRequest();

        });
    }       

    if(search) {

        search.addEventListener('click', (event) => {

            event.preventDefault();

            let data = new FormData(form); 
          
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
                    document.dispatchEvent(new CustomEvent('products'));
                
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


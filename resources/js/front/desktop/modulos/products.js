export let renderProducts = () => {

    let mainContainer = document.querySelector("main");
    let viewButtons = document.querySelectorAll('.view-product');
    let categoryButtons = document.querySelectorAll('.category-button');
    let pays = document.querySelector(".pay");
    let amount = document.querySelector(".plus-minus-input");
    let orderPrice = document.querySelector(".order-price");
  

    document.addEventListener("renderProductModules",( event =>{
        renderProducts();
    }), {once: true});
    
    
    viewButtons.forEach(categoryButton => {
 
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
    });

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

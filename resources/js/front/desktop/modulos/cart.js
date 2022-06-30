export let renderCart = () => {

    let mainContainer = document.querySelector("main");  

    let plusMinusButtons = document.querySelectorAll(".plus-minus-button");
    let checkoutButton = document.querySelector(".checkout-button");
        
    document.addEventListener("cart",( event =>{
        
        renderCart();

    }), {once: true});

   
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
               
                    document.dispatchEvent(new CustomEvent('cart'));

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
               
                    document.dispatchEvent(new CustomEvent('checkout'));

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

}

